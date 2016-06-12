<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('governorate');
            $table->string('area');
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
        Schema::drop('hospitals');
    }
}
