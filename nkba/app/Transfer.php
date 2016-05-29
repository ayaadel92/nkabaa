<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{


    public static $transfer_rules= array{

    	        $rules = [
                     'eng_id'                          => 'required',
                    'health_id'                       => 'required',
                    'patient_name'      	   =>' required',
                    'patient_type'                  =>' required',
                    'medical_diagnosis'	   =>' required',
                    'type'			   =>' required',
                    'total_cost'	              =>' required'
        ];
         return $rules;

    }
}
