<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberAditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberAditions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('eng_id')->unsigned();
            $table->foreign('eng_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('relation_type', ['اب', 'ام', 'ابن','ابنه', 'زوج','زوجه'])->require(); // dah el no3 
            $table->string('require_data')->require(); // dah l sora 
            $table->string('photo')->require(); // dah l sora 
            $table->integer('user_id')->unsigned()->unique();
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
        Schema::drop('memberAditions');
    }
}
