<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use App\User;
use App\Engineer;




class EvaluateController extends Controller
{
    //
    public function GetEvaluate()
    {

    	$users=DB::select('select d.id,d.name,d.degree,d.specialization,d.phone,d.area,d.discription,d.path,e.rate from doctors d,evaluate_doctors e where e.doctor_id=d.id and e.rate>=6 ');

    	$coUsers=count($users);
       
       // print_r($users);exit();
        $hospitals=DB::select('select d.id,d.name,d.address,d.phone,d.area,d.path,d.discription,e.rate from hospitals d,evaluate_hospitals e where e.hospital_id=d.id and e.rate>=6 ');
        $coHospital=count($hospitals);
        
// print_r($hospital);exit();
        $labs=DB::select('select d.id,d.name,d.address,d.phone,d.area,d.path,d.type,d.discription,e.rate from labs d,evaluate_labs e where e.lab_id=d.id and e.rate>=6 ');
        $colab=count($labs);
       

        $areas=DB::select("select area from doctors where governorate ='alex' group by area");
        $coareas=count($areas);
        $area=response()->json($areas)->getData();

        $specializations=DB::select('select specialization from doctors group by specialization');
        $specialization=response()->json($specializations)->getData();


       return view('welcome',compact('users','hospitals','labs','area','specialization'));
      
              

    }
    
    public function SelectDoctors($Data)
    {
       $VarData=$Data;
      // $VarData=Input::get('SearchDoctor');
      
        


$doctor=DB::table('doctors')
    ->where('governorate', '=', 'alex')
    ->where('area', '=', $VarData)
    ->get();

// $doctor=response()->json($doctors)->getData();
      return view('Search',compact('doctor'));
    }

    public function SelectDoctorsSpecial($Data)
    {

      $VarData=$Data;
      $doctor=DB::table('doctors')
    ->where('governorate', '=', 'alex')
    ->where('specialization', '=', $VarData)
    ->get();

// $doctor=response()->json($doctors)->getData();
      return view('SpecialSearch',compact('doctor'));

    }
    public function SelectDoctorsName($Data)
    {
       $VarData=$Data;
      $doctor=DB::table('doctors')
    ->where('governorate', '=', 'alex')
    ->where('name', '=', $VarData)
    ->get();

  return view('SpecialSearch',compact('doctor'));
    }
    

}
