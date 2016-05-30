<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{

    protected $fillable = array('eng_id','health_id','patient_name','patient_type','medical_diagnosis' ,'type','doctor_name','hospital_name','lab_name','total_cost','status','percentage','transfer_date');

    public static $transfer_rules= array(

                    'eng_id'                          => 'required',
                    'health_id'                       => 'required',
                    'patient_name'      	   =>' required',
                    'patient_type'                  =>' required',
                    'medical_diagnosis'	   =>' required',
                    'type'			   =>' required',
                    'total_cost'	              =>' required'
);


