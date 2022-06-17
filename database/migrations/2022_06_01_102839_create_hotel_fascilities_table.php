<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelFascilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_fascilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ht_id')->unsigned();
            $table->foreign('ht_id')->references('id')->on('hotels');
            $table->boolean('ramp')->nullable();
            $table->boolean('antarjemput')->nullable();
            $table->boolean('akses_kursiroda')->nullable();
            $table->boolean('toilet_pegangan')->nullable();
            $table->boolean('parkir_difabel')->nullable();
            $table->boolean('bantuan_staff')->nullable();
            $table->boolean('pusat_kesehatan')->nullable();
            $table->boolean('wifi')->nullable();
            $table->boolean('kamarmandi_luas')->nullable();
            $table->boolean('jalan_pemandu')->nullable();
            $table->boolean('lift_aksesibel')->nullable();
            $table->boolean('ac')->nullable();
            $table->boolean('restoran')->nullable();
            $table->boolean('laundry')->nullable();
            $table->boolean('ruang_tunggu_tamu')->nullable();
            $table->boolean('cctv')->nullable();
            $table->boolean('resepsionis_24jam')->nullable();
            $table->boolean('kolam_renang')->nullable();
            $table->boolean('pemadam_api')->nullable();
            $table->boolean('pusat_kebugaran')->nullable();
            $table->boolean('mini_bar')->nullable();
            $table->boolean('masjid')->nullable();
            $table->boolean('wastafel_rendah')->nullable();
            $table->boolean('kloset_rendah')->nullable();


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
        Schema::dropIfExists('hotel_fascilities');
    }
}
