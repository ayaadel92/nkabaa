<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transfer_date');
            $table->string('eng_id');
            $table->string('health_id');
            $table->string('patient_name');
            $table->enum('patient_type', ['engineer','father', 'mother', 'son','daugter', 'husband','wife']);
            $table->enum('status', ['yes', 'no']);
            $table->enum('done', ['yes', 'no']);
            $table->integer('percentage');
            $table->enum('type', ['rediopology', 'analysis']); 
            $table->integer('total_cost');
            $table->string('medical_diagnosis');
            $table->string('doctor_name')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('lab_name')->nullable();
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
        Schema::drop('transfers');
    }
}
