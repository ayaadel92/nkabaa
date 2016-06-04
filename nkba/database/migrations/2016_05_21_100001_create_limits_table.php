<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total_remainder');// dah motbaky mn el flos 
            $table->integer('surgery_credit');// flos el 3mlyt 
            $table->integer('analysis_credit');// flos el t7lel w el 2sh3a 
            $table->integer('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // delete on cascade
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
        Schema::drop('limits');
    }
}
