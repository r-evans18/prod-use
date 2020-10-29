<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducerLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producer_locations', function (Blueprint $table) {
            $table->id();
            $table->integer('producer_id');
            $table->string('name');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('country');
            $table->string('city');
            $table->string('postcode');
            $table->string('telephone');
            $table->string('latitude');
            $table->string('longitude');
            $table->softDeletes();
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
        Schema::dropIfExists('producer_locations');
    }
}
