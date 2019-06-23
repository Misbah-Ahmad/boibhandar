<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keywords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

        });

        Schema::create('book_keyword', function (Blueprint $table) {
            $table->integer('book_id');
            $table->integer('keyword_id');
            $table->primary(['book_id', 'keyword_id']);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_keyword');
        Schema::dropIfExists('keywords');

    }
}
