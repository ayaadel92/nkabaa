<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Percentages extends Model
{
     public static function findengperc(){
    	   return DB::table('percentages')->where('type', 'مهندس');
    }
         public static function findwifeperc(){
    	   return DB::table('percentages')->where('type', 'زوجه');
    }
         public static function findhosperc(){
    	   return DB::table('percentages')->where('type', 'زوج');
    }
         public static function findsonperc(){
    	   return DB::table('percentages')->where('type', 'ابن');
    }
         public static function finddoutperc(){
    	   return DB::table('percentages')->where('type', 'ابنه');
    }
         public static function findfathperc(){
    	   return DB::table('percentages')->where('type', 'اب');
    }
         public static function findmothperc(){
    	   return DB::table('percentages')->where('type', 'ام');
    }
}
