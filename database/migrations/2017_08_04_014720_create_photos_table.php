<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path',500);
            $table->string('lg',500);
            $table->string('md',500);
            $table->string('sm',500);
            $table->string('thumd',500);
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->tinyInteger('status');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
