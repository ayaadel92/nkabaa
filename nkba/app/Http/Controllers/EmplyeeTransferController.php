<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Transfer;
use DB;
use Carbon\Carbon;
use DateTime;


class EmplyeeTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $transfer=Transfer::findOrFail($id);
        // return view('employee.show',compact('transfer'));

        $transfer_obj = DB::table('transfers')->where('id',$id)->get();
        $transfer = response()->json($transfer_obj)->getData()[0];
        // print_r($transfer);exit;
        $engineer = DB::table('engineers')          
        ->where('eng_id', $transfer->eng_id)
        ->get(); 
        $enginer=response()->json($engineer)->getData()[0];

        if(DB::table('engineers')->where('eng_id',$transfer->eng_id)->count()>0)
        {
            if($enginer->status==="نعم")
            {
                if($transfer->patient_type==="مهندس")
                {
                    $limit=$enginer->limit_id;
                }//end of patient is engineer 
                else
                {
                    $where = ['eng_id'=> $transfer->eng_id, 'relation_type' => $transfer->patient_type,'name'=> $transfer->patient_name];
                    $relative = DB::table('relatives')
                    ->where($where)
                    ->get();
                    $relativ=response()->json($relative)->getData()[0];

                    if($relativ->status==='نعم')
                    {
                        if ($relativ->relation_type == "ابن") {
                            $age = Carbon::now()->diff(new DateTime($relativ->birth_date));
                            if($age->y >= 24 ){
                                $msg1 = $enginer->name;
                                $msg2 = "سن الابن اكبر من او يساوي 24";
                                return  view('employee.show',compact('transfer','msg1','msg2'));
                            }
                        } // check the age of son reach to 24
                        $limit=$relativ->limit_id;
                    }//end of relative status check=yes
                    else{
                        $msg1= $enginer->name;
                        $msg2= "القريب غير مشترك";
                        return  view('employee.show',compact('transfer','msg1','msg2'));
                    }
                }//end of patient is relative
                $limit_obj= DB::table('limits')
                ->where('id', $limit)
                ->get(); 
                $limit_json=response()->json($limit_obj)->getData()[0];
                if($limit_json->analysis_credit>=$transfer->total_cost)//credit_analysis=the reminder from 1000LE
                {
                    $examine_obj = DB::table('analysisradios')
                    ->where('name', $transfer->type_name)
                    ->get(); 
                    $examine_json = response()->json($examine_obj)->getData()[0];

                    if ($examine_json->limit = "yes") {
                        $transfers_limited= DB::table('transfers')
                        ->where([['created_at','>',strtotime('01-01-'.date("Y"))], 
                            ['eng_id',$transfer->eng_id],['patient_type',$transfer->patient_type],
                            ['type_name',$transfer->type_name],
                            ['patient_name','like',"%".$transfer->patient_name."%"],])->count();
                        if ($transfers_limited >= $examine_json->limits_num) {
                            $msg1= $enginer->name;
                            $msg2= "التحويلة غير مقبولة ﻻنه تم القيام بها من قبل";
                            return  view('employee.show',compact('transfer','msg1','msg2'));
                        }
                        $msg1= $enginer->name;
                        $msg2= "التحويلة مقبولة لانها لم تتعدي الحدود المسموح بها";
                        return  view('employee.show',compact('transfer','msg1','msg2'));
                    }//end of checking if the analysis has limits
                    else{
                        $msg1= $enginer->name;
                        $msg2= "التحويلة مقبولة";
                        return  view('employee.show',compact('transfer','msg1','msg2'));
                    }//end of checking if the analysis hasn't limits
                }
            }//end of engineer status check=yes
            else{
                $msg1= $enginer->name;
                $msg2= "المهندس لم يجدد الإشتراك";
                return  view('employee.show',compact('transfer','msg1','msg2'));
                
            }//end of engineer status check=no
        }//end of engineer found 
        else{
            $msg1= $enginer->name;
            $msg2= "المهندس غير مشترك";
            return  view('employee.show',compact('transfer','msg1','msg2'));
        }//end of engineer not found 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $transfer = Transfer::findOrFail($id);
        $input = $request->all();
        $transfer = Transfer::where('id', $id)
        ->update(['accepted' => $input['accepted'],'done' => $input['done']]);
        print_r($transfer);exit;
        return view('employee.show',compact('transfer'));
    }
    public function decreaseLimit($id)
    {
        //'total_remainder', 'surgery_credit', 'analysis_credit', 'user_id'
       $transfer_obj = DB::table('transfers')->where('id',$id)->get();
       $transfer = response()->json($transfer_obj)->getData()[0];
       if($transfer->patient_type==="مهندس")
       {
        $limit=$enginer->limit_id;
        }//end of patient is engineer 
        else
        {
            $where = ['eng_id'=> $transfer->eng_id, 'relation_type' => $transfer->patient_type,'name'=> $transfer->patient_name];
            $relative = DB::table('relatives')
            ->where($where)
            ->get();
            $relativ=response()->json($relative)->getData()[0];
            $limit=$relativ->limit_id;
        }//end of patient is relative
        $limit_obj= DB::table('limits')
        ->where('id', $limit)
        ->get();
        if(!$limit_obj){
            return "هذا المستخدم غير مسجل بالويب سايت وﻻ يمكنك الخصم له من خلال الويب سايت";
        }
        else{
            $limit_json=response()->json($limit_obj)->getData()[0];
            DB::table('limits')
            ->where('id',$limit_json->id)
            ->update([
                'analysis_credit' => $limit_json->analysis_credit - $transfer->total_cost,
                'total_remainder'=> $limit_json->total_remainder - $transfer->total_cost]);
        }
        $analysis_credit = $limit_json->analysis_credit;
        $total_remainder = $limit_json->total_remainder
        return view('employee.decrease_done',compact('analysis_credit','total_remainder'));
    }

}
