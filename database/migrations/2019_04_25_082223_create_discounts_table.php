<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('type')->default('global');
            
            $table->string('status')->default('active');
            
            $table->decimal('percent', 5, 2)->default(0.0);

            $table->date('expires_on');
            
            $table->integer('model_id')->unsigned()->nullable();
            
            $table->string('model_type')->nullable();

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
        Schema::dropIfExists('discounts');
    }
}
