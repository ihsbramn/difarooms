<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cm_user_id')->unsigned();
            $table->foreign('cm_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('cm_forum_id')->unsigned();
            $table->foreign('cm_forum_id')->references('id')->on('forums')->onDelete('cascade');
            $table->string('cm_author')->nullable();
            $table->longText('cm_body')->nullable();
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
        Schema::dropIfExists('comments');
    }
}
