<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBooksAddBuyingPriceIsAvailable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->decimal('buying_price', 6, 3)->default(0.0);
            $table->boolean('is_available')->default(true);
            $table->boolean('pre_order')->default(false);
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
            $table->dropColumn('buying_price');
            $table->dropColumn('is_available');
            $table->dropColumn('pre_order');

        });
    }
}
