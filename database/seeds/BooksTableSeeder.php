<?php

use App\Author;
use App\Category;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_category')->delete();        
        factory('App\Book', 50)
                ->create()
                ->each(function ($book) {
                    $cat = Category::find(rand(Category::all()->min('id'), Category::all()->max('id')));
                    $book->categories()->save($cat);
                    $authors = Author::inRandomOrder()->limit(2)->get();
                    if (count($authors) == 0) {
                        $authors = factory(App\Author::class, 2)->create();
                    }
                    $authors = $authors->pluck('id')->toArray();
                    $book->authors()->attach($authors);
                    //$book->bookDetails()->saveMany(factory('App\BookDetail', 5)->make());
        });
    }
}
