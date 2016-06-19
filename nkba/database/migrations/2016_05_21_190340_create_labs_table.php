<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('governorate');
            $table->string('area'); 
            $table->string('login_id');
            $table->string('email')->unique();
            $table->enum('type', ['مركز اشعة', 'معمل تحاليل']); // dah el no3 
            $table->string('discription')->nullable();
            $table->string('path')->nullable();
            $table->timestamps();
            $table->integer('user_id')->unsigned()->unique()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // delete on cascade
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('labs');
    }
}
