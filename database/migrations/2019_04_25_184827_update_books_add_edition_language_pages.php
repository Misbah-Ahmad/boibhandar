<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBooksAddEditionLanguagePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            
            $table->string('edition')->default('N/A');
            $table->string('language')->default('N/A');
            $table->integer('pages')->nullable();                        

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
            $table->dropColumn('edition');
            $table->dropColumn('language');
            $table->dropColumn('pages');
        });
    }
}
