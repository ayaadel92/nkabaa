<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelativesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('relatives', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status',['نعم','لا']);
            $table->string('name'); 
            $table->string('health_id');
            $table->integer('eng_id')->unsigned();
            $table->date('birth_date'); 
            $table->enum('gender', ['ذكر', 'انثى']); // dah el no3 
            $table->enum('relation_type', ['اب', 'ام', 'ابن','ابنه', 'زوج','زوجه']); // dah el no3 
            $table->string('national_id'); // dah rkm el bt2a 
            $table->string('path')->nullable(); // dah l sora 
            $table->integer('limit_id')->unsigned();
            $table->foreign('limit_id')->references('id')->on('limits')->onDelete('cascade'); // delete on cascade 
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
    public function down() {
        Schema::drop('relatives');
    }

}
