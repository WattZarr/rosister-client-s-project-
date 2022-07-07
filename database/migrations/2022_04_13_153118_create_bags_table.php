<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bags', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('image');
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('material');
            $table->text('size');
            $table->integer('price');
            $table->text('status');
            $table->integer('item');
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
        Schema::dropIfExists('bags');
    }
}
