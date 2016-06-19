<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hospital_name')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('lab_name')->nullable();
            $table->string('description');
            $table->string('vedio_path')->nullable();
            $table->string('img_path')->nullable();
            $table->date('date');
            $table->time('time');
            $table->timestamps(); 
            $table->integer('user_id')->unsigned();
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
        Schema::drop('complaints');
    }
}
