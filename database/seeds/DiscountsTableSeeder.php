<?php

use Illuminate\Database\Seeder;
use App\Discount;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $discounts = [
            [ 'model_id' => 1, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 2, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 3, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 6, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 7, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 8, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 15, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 16, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 17, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 18, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 19, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 20, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 21, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 24, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 25, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 26, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 29, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 30, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 31, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 32, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 33, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 34, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 35, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 36, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 37, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 38, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 40, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 41, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 43, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 45, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 53, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 54, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 55, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 56, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 57, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 58, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 59, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 60, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 61, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 65, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 66, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 68, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 69, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 70, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 71, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 73, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 74, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 79, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 80, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 81, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 86, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 87, 'model_type' => 'App\Publisher', 'percent' => 15, ],
            [ 'model_id' => 5, 'model_type' => 'App\Publisher', 'percent' => 20, ],
            [ 'model_id' => 9, 'model_type' => 'App\Publisher', 'percent' => 20, ],
            [ 'model_id' => 10, 'model_type' => 'App\Publisher', 'percent' => 20, ],
            [ 'model_id' => 11, 'model_type' => 'App\Publisher', 'percent' => 20, ],
            [ 'model_id' => 22, 'model_type' => 'App\Publisher', 'percent' => 20, ],
            [ 'model_id' => 28, 'model_type' => 'App\Publisher', 'percent' => 20, ],
            [ 'model_id' => 42, 'model_type' => 'App\Publisher', 'percent' => 20, ],
            [ 'model_id' => 48, 'model_type' => 'App\Publisher', 'percent' => 20, ],
    ];

    public function run()
    {

        foreach ($this->discounts as $discount)
        {
            Discount::create([
                'type' => 'model',
                'status' => 'active',
                'percent' => $discount['percent'],
                'expires_on' => date('Y-m-d', strtotime('+10days')),
                'model_id' => $discount['model_id'],
                'model_type' => $discount['model_type']
            ]);
            
        }

    }
}
