<?php

namespace App\Observers;

use App\Cart;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Artisan;

class UserObserver
{

    /**
     * Handle the user "creating" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function creating(User $user)
    {

    }


    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $customerRole = Role::where('name', 'customer')->first();

        if(!($customerRole instanceof Role))
        {
            Artisan::call('db:seed --class=RoleSeeder');
            $customerRole = Role::where('name', 'customer')->first();
        }
        
        $user->attachRole($customerRole);

        if($user->cart == null)
        {
            $user->cart()->save(new Cart);
    
        }
    }
    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
