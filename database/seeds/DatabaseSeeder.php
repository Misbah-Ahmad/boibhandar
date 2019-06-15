<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['discounts'];


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        

        foreach($this->toTruncate as $table){
            DB::table($table)->truncate();
        }

        $this->call(RoleSeeder::class);
        $this->call(DiscountsTableSeeder::class);
        
        //$this->call(UsersTableSeeder::class);

/*         
        $this->call(CategoriesTableSeeder::class);
        $this->call(PublishersTableSeeder::class);                
        $this->call(AuthorsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
 */

        //$this->call(OrdersTableSeeder::class);
        //$this->call(BookDetailsTableSeeder::class);
    }
}
