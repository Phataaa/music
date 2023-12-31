<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description', 5000)->nullable();
            $table->string('file_mp3', 200)-> nullable();
            $table->string('img', 200)-> nullable();
            $table->string('name_singer', 200)-> nullable();
            $table->integer('singer_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('category', 200)->nullable();
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
        //
    }
};
