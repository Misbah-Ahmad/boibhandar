<?php

use Illuminate\Database\Seeder;

class BookDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\BookDetail', 50)->create();

    }
}
