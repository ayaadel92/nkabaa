<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
	

    protected $fillable = array('eng_id','health_id','patient_name','patient_type','medical_diagnosis' ,'type','doctor_name','hospital_name','lab_name','total_cost','accepted','percentage','transfer_date','type_name','patient_number');

    public static $transfer_rules= array(

                    'eng_id'                          => 'required',
                    'patient_name'      	   =>' required',
                    'degree'                  =>' required',
                    'medical_diagnosis'	   =>' required',
                    'type'			   =>' required',
                    'total_cost'	              =>' required'
          );

}
