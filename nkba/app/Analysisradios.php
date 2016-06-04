<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Analysisradios extends Model
{
    public static function findradios(){
    	   return DB::table('analysisradios')->where('type', 'اشعة');
    }

        public static function findanalysis(){
    	return    DB::table('analysisradios')->where('type', 'تحليل');
    }
}
