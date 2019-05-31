<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::where('name', 'customer')->first();
        if(!($role instanceof Role))
        {
            $role = new Role;
            $role->name = 'customer';
            $role->display_name = 'Valuable Customer';
            $role->description = 'Users can order books';
            $role->save();

        }

        $role = Role::where('name', 'admin')->first();

        if (!($role instanceof Role)) 
        {
            $role = new Role;
            $role->name = 'admin';
            $role->display_name = 'Powerful Admin';
            $role->description = 'As your wish';
            $role->save();
        }

        $role = Role::where('name', 'super-admin')->first();

        if (!($role instanceof Role)) 
        {
            $role = new Role;
            $role->name = 'admin';
            $role->display_name = 'Super Admin';
            $role->description = 'As your wish';
            $role->save();
        }
        
    }
}
