<?php

namespace App\Http\Controllers;
use App\Book;
use App\Order;
use App\OrderDetail;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function show(Order $order)
    {
        $total = $order->orderDetails->sum('total_price');
        $gift = $order->is_gift ? $order->gift_wrap_charge : 0;
        $headline = 'Order Details';

        return view('orders.details', compact(['order', 'total', 'gift', 'headline']));
    }


    public function checkout(Request $request)
    {

        $user = auth()->user(); 
        if($user->hasPendingOrder)
        {
            return redirect(route('carts.show'));
        }
        $cartList = json_decode($request->cart_list);


        $this->updateCart($user, $cartList->_books);

        $reference = $user->orders()->count() . rand(10, 99) . $user->id;
        
        $is_gift = intval($cartList->_b_g);

        $districts_data = file_get_contents(storage_path('json/districts.json'));

        return view('orders.checkout', compact(['user', 'reference', 'is_gift', 'districts_data']));

    }


    private function checkDistrictAndSubDistrict(Request $request)
    {
        $district_id = (int) $request->district;
        $sub_district_id = (int) $request->checkout_pickup;

        $districts_data = json_decode(file_get_contents(storage_path('json/districts.json')));

        $district = array_values(array_filter($districts_data->combined, function($item) use($district_id) {
            return $item->id == $district_id;
        }));

        $district = is_array($district) && count($district) > 0 ? $district[0] : null;

        if ($district == null) {
            return null;
        }

        $sub_district = array_values(array_filter($district->sub_districts, function($item) use ($sub_district_id) {

            return $item->id == $sub_district_id;
        }));

        $sub_district = is_array($sub_district) && count($sub_district) > 0 ? $sub_district[0] : null;

        if ($sub_district == null) {
            return null;
        }

        return [
            'district' => ['id' => $district->id, 'name' => $district->name],
            'sub_district' => ['id' => $sub_district->id, 'name' => $sub_district->name],
        ];


    }

    public function confirm(Request $request)
    {
        logger('Confirming order');
        logger(json_encode($request->all(), JSON_PRETTY_PRINT));

        $validator = Validator::make($request->all(), [

            'fname' => ['required', 'string', 'min:1', 'max:255'],
            'sname' => ['required', 'string', 'min:1', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^(8801|\+8801|01)[3-9]{1,1}[0-9]{8,8}$/i'], // needs to check unique phone later if different from current
            'address' => ['required', 'string', 'min:10', 'max:40'],
            'bkash_phone' => ['requiredif:payment_method,bkash', 'string', 'regex:/^(8801|\+8801|01)[3-9]{1,1}[0-9]{8,8}$/i'],
            'district' => ['required', 'string',],
            'checkout_pickup' =>['required', 'string'],
        ], ['phone.regex' => 'Invalid phone number', 'bkash_phone.regex' => 'Invalid bkash phone number'], ['checkout_pickup' => 'Area']);

        if ($validator->fails()) 
        {
            return back()->withErrors($validator)->withInput();
        }

        $district_info = $this->checkDistrictAndSubDistrict($request);

        if ($district_info == null) {
            return back()->withErrors(['district' => 'Address information is invalid!'])->withInput();
        }

        $user = auth()->user();

        $user = auth()->user();
        if ($user->hasPendingOrder)
        {
            return back()->withInput();
        }

        $books = $user->cart->books()->without('author')->get();

        $orderDetails = [];

        $order = Order::saveNewOrder($request, $district_info, $user);

        foreach($books as $book)
        {
            $orderDetail = new OrderDetail;
            $orderDetail->book_id = $book->id;
            $orderDetail->price = $book->hasDiscount ? intval($book->discountedPrice) : intval($book->price);
            $orderDetail->buying_price = $book->buying_price;
            $orderDetail->quantity = $book->counter->count;
            $orderDetail->total_price = $book->counter->count * intval($orderDetail->price);

            array_push($orderDetails, $orderDetail);

        }

        $order->orderDetails()->saveMany($orderDetails);


        $grand_total = $order->orderDetails()->sum('total_price') + intval(env('SHIPPING_CHARGE'));
        $grand_total += ($request->_b_g ? intval(env('GIFT_WRAP_CHARGE')) : 0);

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

    public function corporateShow()
    {
        return view('corporates.create');
    }

    public function saveQuoteRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha',            
            'c_name' => ['required', 'string', 'min:3', 'max:30'],
            'org_name' => ['required', 'string', 'min:3', 'max:60'],
            'phone' => ['required', 'string', 'regex:/^(01)[3-9]{1,1}[0-9]{8,8}$/i'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'org_address' => ['required', 'string', 'min:5', 'max:60'],
            'c_message' => ['required', 'string', 'min:8', 'max:150'],
            'c_file' => ['file', 'mimes:doc,docx,xls,xlsx,zip', 'max:20240'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $file = $request->hasFile('c_file') ? $request->file('c_file') : null;
        $noti = [
            'contact_person' => $request->c_name,
            'organization' => $request->org_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->org_address,
            'message' => $request->c_message, 
            'file_name' => $file ? $request->c_name . '_' . strtotime('now') : null,
        ];

        Log::channel('slack_quote')->info(json_encode($noti, JSON_PRETTY_PRINT));

        if ($file) {
            Storage::put($request->c_name . '_' . strtotime('now'), $file);
        }

        return back()->with('message', 'We\'ve got your request, our corporate sales team will be in touch with you shortly.');

    }

    public function cancel(Order $order)
    {
        $status_array = ['Approved', 'Pending'];

        $message = 'Ops! Something went wrong.';

        if ($order instanceof Order && in_array($order->status, $status_array) && $order->status != 'Cancelled') {
            $order->status = 'Cancelled';

            if ($order->save()) {
                $message = 'Order status was changed to Cancelled successfully!';
            }
        }

        return back()->with('message', $message);        
    }

}
