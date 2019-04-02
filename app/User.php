<?php

namespace App;

use App\Book;
use App\Cart;
use App\Order;
use App\Review;
use App\Notification;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function wishlists()
    {
        return $this->belongsToMany(Book::class, 'user_wishlist', 'user_id', 'book_id');
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function promoCodes()
    {
        return $this->belongsToMany(PormoCode::class, 'user_promo_code', 'user_id', 'promo_code_id');
    }

    public function notifications()
    {
        return $this->belongsToMany(Notification::class,'user_notification')->withTimestamps();
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
