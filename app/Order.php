<?php

namespace App;

use App\User;
use App\Model;
use App\OrderDetail;
use App\Transaction;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public function getTotalPriceAttribute()
    {
        return $this->orderDetails()->sum('price');
    }

    public function getStatusBadgeAttribute()
    {
        switch ($this->status) {
            case 'Approved':
                return 'info';
                break;

            case 'Cancelled':
                return 'danger';
                break;

            case 'Delivered':
                return 'success';
                break;

            default:
                return 'warning';
                break;

        }

    }


    public function scopeToday($query)
    {
        return $query->whereDate('created_at', date('Y-m-d'));
    }



    public static function saveNewOrder($request, $user)
    {
        $order = new Order;
        $order->delivery_date = date('Y-m-d', strtotime('+3days'));
        $order->address = $request->address;
        $order->district = 'Chattogram';
        $order->name = $request->fname . ' ' . $request->sname;
        $order->phone = $request->phone;
        $order->reference = $request->reference;
        $order->is_gift =$request->_b_g;
        return $user->orders()->save($order);
    } 

    public function getOrderActionAttribute()
    {
        switch ($this->status) {
            case 'Approved':
            case 'Pending':
                return 'Cancel';
                    break;

            case 'Cancelled':
            case 'Delivered':
                return 'N/A';
                break;

            default:
                return 'N/A';
                break;
        }
    }


}
