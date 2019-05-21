<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('order_id');
            $table->integer('return_reqeust_id')->nullable()->default(null);
            $table->decimal('price', 10,2);
            $table->decimal('buying_price', 10,2);
            $table->date('return_date')->nullable();
            $table->integer('return_percentage')->default(0);
            $table->decimal('return_amount', 10,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
