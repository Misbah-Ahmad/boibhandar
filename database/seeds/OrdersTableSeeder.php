<?php

use App\Order;
use App\OrderDetail;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();

        factory(Order::class, 50)
            ->create()
            ->each(function ($order) {
                $details = factory(OrderDetail::class, rand(1, 5))
                                ->make();
                $order->orderDetails()->saveMany($details);          

            });
    }
}
