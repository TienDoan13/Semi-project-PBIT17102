<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminSide extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function($table){
            $table->increments('category_id');
            $table->string('category_name',200);
            $table->string('category_description',2000);
        });

        Schema::create('movie', function($table){
            $table->increments('movie_id');
            $table->string('movie_name',200);
            $table->string('description',3000);
            $table->string('director',200);
            $table->string('main_actor',200);
            $table->string('movie_img',2000);
        });

        Schmea::create('user', function($table){
            $table->increments('user_id');
            $table->string('username',200);
            $table->string('password',200);
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
}
