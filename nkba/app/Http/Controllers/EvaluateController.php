<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use App\User;
use App\Engineer;
use Illuminate\Http\Request;

class EvaluateController extends Controller {

    //
    public function GetEvaluate() {

        $users = DB::select('select d.id,d.name,d.degree,d.specialization,d.phone,d.area,d.discription,d.path,e.rate from doctors d,evaluate_doctors e where e.doctor_id=d.id and e.rate>=6 ');

        $coUsers = count($users);

        // print_r($users);exit();
        $hospitals = DB::select('select d.id,d.name,d.address,d.phone,d.area,d.path,d.discription,e.rate from hospitals d,evaluate_hospitals e where e.hospital_id=d.id and e.rate>=6 ');
        $coHospital = count($hospitals);

// print_r($hospital);exit();
        $labs = DB::select('select d.id,d.name,d.address,d.phone,d.area,d.path,d.type,d.discription,e.rate from labs d,evaluate_labs e where e.lab_id=d.id and e.rate>=6 ');
        $colab = count($labs);


        $areas = DB::select("select area from doctors where governorate ='alex' group by area");
        $coareas = count($areas);
        $area = response()->json($areas)->getData();

        $specializations = DB::select('select specialization from doctors group by specialization');
        $specialization = response()->json($specializations)->getData();


        return view('welcome', compact('users', 'hospitals', 'labs', 'area', 'specialization'));
    }

    public function SelectDoctors($Data , Request $request) {
        $VarData = $Data;
        $User_ID = $request['UserId'];
        $Value_Rate = $request['RateValue'];
        $Doctor_ID = $request['DoctorID'];




        $doctor = DB::table('doctors')
                ->where('governorate', '=', 'alex')
                ->where('area', '=', $VarData)
                ->get();

        $rate = DB::table('evaluate_doctors')
                ->where('doctor_id', '=', $Doctor_ID)
                ->where('eng_id', '=', $User_ID)
                ->get();

        $countRate = count($rate);
        if (!is_null($User_ID) && !is_null($Value_Rate) && !is_null($Doctor_ID)) {
            if ($countRate != 0) {
                DB::table('evaluate_doctors')
                        ->where('doctor_id', $Doctor_ID)
                        ->where('eng_id', $User_ID)
                        ->update(['$User_ID' => $Value_Rate]);
            } elseif ($countRate == 0) {

                DB::table('evaluate_doctors')->insert(
                        ['doctor_id' => $Doctor_ID, 'eng_id' => $User_ID, 'rate' => $Value_Rate]
                );
            }
        }

// $doctor=response()->json($doctors)->getData();
        return view('Search', compact('doctor', 'User_ID', 'Value_Rate', 'Doctor_ID'));
    }

    public function SelectDoctorsSpecial($Data , Request $request) {
        $VarData = $Data;
        $User_ID = $request['UserId'];
        $Value_Rate = $request['RateValue'];
        $Doctor_ID = $request['DoctorID'];

        $doctor = DB::table('doctors')
                ->where('governorate', '=', 'alex')
                ->where('specialization', '=', $VarData)
                ->get();

        $rate = DB::table('evaluate_doctors')
                ->where('doctor_id', '=', $Doctor_ID)
                ->where('eng_id', '=', $User_ID)
                ->get();

        $countRate = count($rate);

        if (!is_null($User_ID) && !is_null($Value_Rate) && !is_null($Doctor_ID)) {
            if ($countRate != 0) {
                DB::table('evaluate_doctors')
                        ->where('doctor_id', $Doctor_ID)
                        ->where('eng_id', $User_ID)
                        ->update(['$User_ID' => $Value_Rate]);
            } elseif ($countRate == 0) {

                DB::table('evaluate_doctors')->insert(
                        ['doctor_id' => $Doctor_ID, 'eng_id' => $User_ID, 'rate' => $Value_Rate]
                );
            }
        }

// $doctor=response()->json($doctors)->getData();
        return view('SpecialSearch', compact('doctor', 'User_ID', 'Value_Rate', 'Doctor_ID'));
    }

    public function SelectDoctorsName($Data, Request $request) {
        $VarData = $Data;
        $User_ID = $request['UserId'];
        $Value_Rate = $request['RateValue'];
        $Doctor_ID = $request['DoctorID'];

        $doctor = DB::table('doctors')
                ->where('governorate', '=', 'alex')
                ->where('name', '=', $VarData)
                ->get();

        $rate = DB::table('evaluate_doctors')
                ->where('doctor_id', '=', $Doctor_ID)
                ->where('eng_id', '=', $User_ID)
                ->get();

        $countRate = count($rate);
        if (!is_null($User_ID) && !is_null($Value_Rate) && !is_null($Doctor_ID)) {
            if ($countRate != 0) {
                DB::table('evaluate_doctors')
                        ->where('doctor_id', $Doctor_ID)
                        ->where('eng_id', $User_ID)
                        ->update(['$User_ID' => $Value_Rate]);
            } elseif ($countRate == 0) {

                DB::table('evaluate_doctors')->insert(
                        ['doctor_id' => $Doctor_ID, 'eng_id' => $User_ID, 'rate' => $Value_Rate]
                );
            }
        }


        return view('NameSearch', compact('doctor', 'User_ID', 'Value_Rate', 'Doctor_ID'));
    }

}
