<?php

use Illuminate\Database\Seeder;
use App\Category;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Publisher', 50)->create();
    }
}
