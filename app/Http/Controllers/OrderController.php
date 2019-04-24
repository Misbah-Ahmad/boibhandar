<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    
    public function show(Order $order)
    {
        return back();
    }

}
