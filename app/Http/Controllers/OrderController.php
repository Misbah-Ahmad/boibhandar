<?php

namespace App\Http\Controllers;
use App\Book;
use App\Order;
use App\OrderDetail;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    
    public function show(Order $order)
    {
        return back();
    }


    public function checkout(Request $request)
    {

        $user = auth()->user(); 
        $cartList = json_decode($request->cart_list);


        $this->updateCart($user, $cartList->_books);

        $reference = $user->orders()->count() . rand(10, 99) . $user->id;
        
        $is_gift = intval($cartList->_b_g);

        return view('orders.checkout', compact(['user', 'reference', 'is_gift']));

    }


    public function confirm(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'fname' => ['required', 'string', 'min:1', 'max:255'],
            'sname' => ['required', 'string', 'min:1', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^(01)[3-9]{1,1}[0-9]{8,8}$/i'], // needs to check unique phone later if different from current
            'address' => ['required', 'string', 'min:10', 'max:40'],
            'bkash_phone' => ['requiredif:payment_method,bkash', 'string', 'regex:/^(01)[3-9]{1,1}[0-9]{8,8}$/i']
        ]);

        if ($validator->fails()) 
        {
            return back()->withErrors($validator);
        }

        $user = auth()->user();

        $books = $user->cart->books()->without('author')->get();

        $orderDetails = [];

    
        $order = Order::saveNewOrder($request, $user);

        foreach($books as $book)
        {
            $orderDetail = new OrderDetail;
            $orderDetail->book_id = $book->id;
            $orderDetail->price = $book->hasDiscount ? $book->discountedPrice : $book->price;
            $orderDetail->buying_price = $book->buying_price;
            $orderDetail->quantity = $book->counter->count;
            $orderDetail->total_price = $book->counter->count * $orderDetail->price;

            array_push($orderDetails, $orderDetail);

        }

        $order->orderDetails()->saveMany($orderDetails);


        $grand_total = $order->orderDetails()->sum('total_price') + env('SHIPPING_CHARGE');
        $grand_total += ($request->_b_g ? 30 : 0);

        $order->transaction()->create([

            'total_price' => $grand_total,
            'pay_type' => $request->payment_method,


        ]);

        $noti = [
            'order' => json_decode($order),
            'total' => $order->orderDetails()->sum('total_price'),
        ];

        if(env('APP_ENV') == 'production')
        {
            \Log::channel('slack')->info(json_encode($noti, JSON_PRETTY_PRINT));
        }   
        
        $this->updateCart($user, []);

        return redirect(route('orders.confirmed'))->with('order_id', 'BOID' . $order->id);

    }


    public function confirmed()
    {
        return view('orders.confirmed');        
    }


    private function updateCart($user, $books)
    {
        $cart = $user->cart;
        $cart->books()->detach();

        foreach($books as $book)
        {
            $b = Book::find($book->identifier);
            if($b instanceof Book)
            {
                $cart->books()->attach($b, ['count' => $book->quantity]);
            }
        }

        if(count($books) < 1)
        {
            Cookie::queue(Cookie::make(env('AUTH_CART_COOKIE'), "[]", intval(env('CART_COOKIE_AGE')), '/'));
        }

    }

}
