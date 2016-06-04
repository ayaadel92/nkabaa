<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Limit extends Model
{
	protected $fillable = array('total_remainder', 'surgery_credit', 'analysis_credit', 'user_id');

	public static $rules= array(
		);
}
