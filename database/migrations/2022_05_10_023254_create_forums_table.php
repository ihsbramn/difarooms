<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fr_user_id')->unsigned();
            $table->foreign('fr_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('fr_author')->nullable();
            $table->string('fr_title')->nullable();
            // $table->string('fr_filename')->nullable();
            $table->longText('fr_body')->nullable();
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
        Schema::dropIfExists('forums');
    }
}
