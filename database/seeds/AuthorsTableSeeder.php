<?php

use Illuminate\Database\Seeder;
use App\Category;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author_category')->delete();

        factory('App\Author', 50)
                    ->create()
                    ->each(function ($author) {
                        $cat = Category::find(rand(Category::all()->min('id'), Category::all()->max('id')));                        
                        $author->categories()->save($cat);
            });
    }
}
