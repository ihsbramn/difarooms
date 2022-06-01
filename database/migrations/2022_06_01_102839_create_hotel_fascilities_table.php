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
            $table->boolean('ramp');
            $table->boolean('antarjemput');
            $table->boolean('akses_kursiroda');
            $table->boolean('toilet_pegangan');
            $table->boolean('parkir_difabel');
            $table->boolean('bantuan_staff');
            $table->boolean('pusat_kesehatan');
            $table->boolean('wifi');
            $table->boolean('kamarmandi_luas');
            $table->boolean('jalan_pemandu');
            $table->boolean('lift_aksesibel');
            $table->boolean('ac');
            $table->boolean('restoran');
            $table->boolean('laundry');
            $table->boolean('ruang_tunggu_tamu');
            $table->boolean('cctv');
            $table->boolean('resepsionis_24jam');
            $table->boolean('kolam_renang');
            $table->boolean('pemadam_api');
            $table->boolean('pusat_kebugaran');
            $table->boolean('mini_bar');
            $table->boolean('masjid');
            $table->boolean('wastafel_rendah');
            $table->boolean('kloset_rendah');


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
