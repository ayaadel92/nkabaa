<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ( $table) {
            $table->increments('id');
            $table->string('login'); 
            // dah el 2sm elly hd5ol beh w hyb2a
            // el mohnds bnsblo dah el id bt3o rkm el 3dwya 
            // el admin hkon lih rkm byd5ol beh 
            // el 2krb leha rkm d5ol beh 
            // el mostshfa leha rkm td5ol beh 
            // el m3ml leh rkm yd5ol beh 
            $table->string('email')->unique();
            $table->enum('role', ['مهندس', 'قريب','موظف','ادمن','معمل','مستشفي','طبيب']);
            // typs el users elly d5len 3la system bt3y 
            $table->string('password');  
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
