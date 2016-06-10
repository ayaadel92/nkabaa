<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
// use Illuminate\Database\Eloquent\Model;

class Engineer extends Authenticatable
{
	protected $primaryKey = 'id';
      //protected $username = 'member_number';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'role', 'name', 'email', 'national_id', 'address', 'phone_number', 'birth_date', 'gradu_year','relative_num', 'gender', 'eng_id', 'health_id', 'credit_number', 'path', 'limit_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'remember_token',
    ];
    public static $rules = array(
    	'name' => 'required|min:2',
    	'email' => 'required|email'
    	);


         public static function findengid($mem){
           return DB::table('engineers')->where('eng_id', $mem);
    }
   
}
