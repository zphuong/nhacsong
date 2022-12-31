<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('song_id')->unsigned();
            $table->string('name');
            $table->timestamps();

            $table->foreign('song_id')
                ->references('id')
                ->on('songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tones');
    }
}
