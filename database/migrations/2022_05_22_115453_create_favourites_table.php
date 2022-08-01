<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fv_user_id')->unsigned();
            $table->foreign('fv_user_id')->references('id')->on('users');
            $table->foreignId('fv_hotel_id')->unsigned();
            $table->foreign('fv_hotel_id')->references('id')->on('hotels');
            $table->string('fv_hotel_name')->nullable();
            $table->string('fv_count')->nullable();
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
        Schema::dropIfExists('favourites');
    }
}
