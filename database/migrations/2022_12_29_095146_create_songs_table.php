<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('tune_id')->unsigned();
            $table->string('name');
            $table->string('author')->nullable()->default('Không xác định');
            $table->string('singer')->nullable()->default('Không xác định');
            $table->string('short_lyrics');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tune_id')->references('id')->on('tunes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
