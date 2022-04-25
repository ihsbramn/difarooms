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
            $table->string('ht_address')->nullable();
            $table->longText('ht_description')->nullable();
            $table->string('ht_filename')->nullable();
            $table->longText('ht_fascility')->nullable();
            $table->string('ht_accesible')->nullable();
            $table->mediumText('ht_accesible_detail')->nullable();
            $table->longText('ht_embedmaps')->nullable();
            $table->string('ht_latitude')->nullable();
            $table->string('ht_longitude')->nullable();
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
