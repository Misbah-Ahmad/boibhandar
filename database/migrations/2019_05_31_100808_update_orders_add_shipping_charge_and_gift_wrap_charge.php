<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOrdersAddShippingChargeAndGiftWrapCharge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('shipping_charge')->unsigned()->default(env('SHIPPING_CHARGE'));
            $table->integer('gift_wrap_charge')->unsigned()->default(env('GIFT_WRAP_CHARGE'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('shipping_charge');
            $table->dropColumn('gift_wrap_charge');
        });
    }
}
