<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBooksAddLangCountryQuantity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('en_title')->nullable();
            $table->string('en_language')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('country')->nullable();
            $table->string('en_country')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('en_title');
            $table->dropColumn('en_language');
            $table->dropColumn('quantity');
            $table->dropColumn('country');
            $table->dropColumn('en_country');
        });
    }
}
