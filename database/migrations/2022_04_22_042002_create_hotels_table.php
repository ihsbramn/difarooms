<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id()->startingValue(100);
            $table->string('ht_name')->nullable();
            $table->string('ht_key')->nullable();
            $table->string('ht_address')->nullable();
            $table->longText('ht_description')->nullable();
            $table->string('ht_thumbnail')->nullable();
            $table->string('ht_path')->nullable();
            $table->string('ht_urlvideo')->nullable();
            // $table->boolean('ht_fascility')->nullable();
            $table->string('ht_accesible')->nullable();
            // $table->mediumText('ht_accesible_detail')->nullable();
            // $table->string('ht_price_estimate')->nullable();
            $table->string('ht_contact')->nullable();
            // $table->string('ht_roomtype')->nullable();
            $table->longText('ht_embedmaps')->nullable();
            $table->string('ht_latitude')->nullable();
            $table->string('ht_longitude')->nullable();
            $table->string('ht_author')->nullable();
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
        Schema::dropIfExists('hotels');
    }
}
