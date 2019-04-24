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


}
