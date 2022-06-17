<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelRoomtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_roomtypes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ht_id')->unsigned();
            $table->foreign('ht_id')->references('id')->on('hotels');
            $table->string('name_roomtype');
            $table->longText('description');
            $table->string('name')->nullable();
            $table->string('path')->nullable();
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
        Schema::dropIfExists('hotel_roomtypes');
    }
}
