<?php

namespace App;

use App\Book;
use App\Cart;
use App\Order;
use App\Review;
use App\Notification;

use App\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'fname', 'sname', 'email', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function wishlist()
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


    public function uploadedFiles()
    {
        return $this->hasMany(UploadedFile::class);
    }

    public function orderDetails()
    {
        return $this->hasManyThrough(
            OrderDetail::class, //related model
            Order::class, // through
            'user_id', // foreign key on intermediate model  
            'order_id' // foreign key on target/related model 
        );
    }




    public function hasBookInWishlist(Book $book)
    {
        return $this->wishlist->contains($book);
    }

    public function getFullNameAttribute()
    {
        return ucwords( strtolower($this->fname . ' ' . $this->sname) );
    }

    public function getJoiningDateAttribute()
    {
        return  date('F d, Y', strtotime($this->created_at));
    }


    public function scopeToday($query)
    {
        return $query->whereDate('created_at', date('Y-m-d')); 
    }


    public function getHasPendingOrderAttribute()
    {
        return $this->orders()->where('status', 'Pending')->today()->count() > 2;
    }

}
