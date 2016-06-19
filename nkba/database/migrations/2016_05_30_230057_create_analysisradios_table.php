<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalysisradiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysisradios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('type',['تحليل','اشعة']);
            $table->enum('limit',['yes','no']);
            $table->integer('limits_num');
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
        Schema::drop('analysisradios');
    }
}
