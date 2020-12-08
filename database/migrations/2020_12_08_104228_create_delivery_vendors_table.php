<?php

use App\DeliveryVendor;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default('Boibhandar');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('extras')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        if (DeliveryVendor::where('name', 'Boibhandar')->count() < 1) {
            DeliveryVendor::create([
                'name' => 'Boibhandar',
                'phone' => env('BOIBHANDAR_PHONE'),
                'email' => env('BOIBHANDAR_EMAIL'),
                'location' => env('BOIBHANDAR_LOCATION'),
            ]);
        }


        if (Schema::hasColumn('orders', 'delivery_vendor_id') == false) {

            Schema::table('orders', function (Blueprint $table) {
                $table->bigInteger('delivery_vendor_id')->nullable();
                $table->foreign('delivery_vendor_id')->references('id')->on('delivery_vendors');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_vendors');
    }
}
