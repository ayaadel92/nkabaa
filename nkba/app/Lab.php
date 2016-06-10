<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
	protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'address', 'phone', 'governorate', 'area' , 'type' , 'discription', 'path'
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
    	);
}
