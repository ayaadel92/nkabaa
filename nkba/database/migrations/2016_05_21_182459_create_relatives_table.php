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
            $table->enum('status',['yes','no']);
            $table->string('name'); // 2sm el mohnds 
            $table->string('health_id');
            $table->integer('eng_id')->unsigned();
            $table->string('birth_date'); // melad el mohnds 
            $table->enum('gender', ['Male', 'Female']); // dah el no3 
            $table->enum('relation_type', ['father', 'mother', 'son','daugter', 'husband','wife']); // dah el no3 
            $table->string('national_id'); // dah rkm el bt2a 
            $table->string('path')->nullable(); // dah l sora 
            $table->integer('limit_id')->unsigned();
            $table->foreign('limit_id')->references('id')->on('limits')->onDelete('cascade'); // delete on cascade 
            $table->timestamps();
            
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
