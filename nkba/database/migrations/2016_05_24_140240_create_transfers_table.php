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
            $table->enum('patient_type', ['مهندس', 'اب','ام','ابن','ابنه','زوج','زوجه']);
            $table->enum('accepted',['لا','نعم']);
            $table->enum('done', ['نعم', 'لا']);
            $table->integer('percentage');
            $table->enum('type', ['اشعة', 'تحاليل']); 
            $table->string('type_name');
            $table->integer('total_cost');
            $table->string('medical_diagnosis');
            $table->string('doctor_name');
            $table->string('hospital_name');
            $table->string('lab_name');

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
