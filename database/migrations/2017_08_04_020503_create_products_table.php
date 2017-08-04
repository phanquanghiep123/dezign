<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',500);
            $table->string('thumb',500);
            $table->string('keyword',500);
            $table->text('description',500);
            $table->text('info_json');
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
        Schema::dropIfExists('products');
    }
}
