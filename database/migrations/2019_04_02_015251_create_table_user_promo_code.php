<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserPromoCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_promo_code', function (Blueprint $table) {

            $table->bigInteger('user_id')->unsigned();

            $table->bigInteger('promo_code_id')->unsigned();

            $table->primary(['user_id', 'promo_code_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_promo_code');
    }
}
