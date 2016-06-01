<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests;
use App\Transfer;
use Jleon\LaravelPnotify\Notify;
use DB;
use Session;

class TransferController extends Controller
{

           // public function __construct() {
           //       $this->middleware('auth');
           //  }
	public function create(){
		return view('transfer.new');
	}

    	public function store(Request $request){

		$input=Input::all();
		$validation=Validator::make($input, Transfer::$transfer_rules);
		 $transfer= new Transfer;
    		  if ($validation->passes())
		        {                 
		        		
		        	$transfer->eng_id=$input['eng_id'];
		        	$transfer->health_id	= $input['health_id'];
		        	$transfer->patient_name=$input['patient_name'];
		        	$transfer->patient_type=$input['patient_type'];
		        	$transfer->medical_diagnosis  =$input['medical_diagnosis'];
		        	$transfer->type=$input['type'];
		        	$transfer->type_name=$input['list'];	
		        	$transfer->doctor_name=$input['doctor_name'];
		        	$transfer->hospital_name=$input['hospital_name'];
		        	$transfer->lab_name=$input['lab_name'];
		        	$transfer->status=$input['status'];
		        	$transfer->total_cost=$input['total_cost'];
		        	$transfer->percentage=$input['percentage'];
		        	$transfer->transfer_date=$input['transfer_date']	;
		        	$transfer->save();
		           $id=$transfer->id;
		           Session('val',$transfer);
		           return Redirect::route('transfer.show',$id);
		               
		           //Redirect::route('transfer.validate_transfer',$transfer);
		     }		     
	}

	public function show($id)
	    {
	         $transfer_row=Transfer::find($id);
	         return view('transfer.show',compact('transfer_row'));
	    }

public function validate_transfer()
{	
	$transfer=Session::get('val');
           $engineer = DB::table('engineers')          
        ->where('eng_id', 6876)
        ->get(); 
  // if(count($engineer)>0)
  //         {
        print_r($engineer);exit;
        	    if($engineer['status']==='yes')
        	       {
        	    	 $relative = DB::table('relatives')
                        ->where('eng_id', $transfer['eng_id']&&'relation_type',$transfer['patient_type'])
                        ->get(); 
                        if($relative['status']==='yes')
                           {
	        	    	 $labs = DB::table('analysisradios')
	                        ->where('name', $transfer['type_name'])
	                        ->get(); 

	                        if($labs->limit==='yes'){
	                        	if($labs->done==='yes'){
	                        	Notify::success('التحويل','مرفوض');
	                        	}
	                        	else{
			        	    	 $limit= DB::table('limits')
			                        ->where('id', $relative->limit_id)
			                        ->get(); 
			                        if($limit->total_remainder>=$transfer['total_cost']){
			                        	Notify::success('التحويل','مقبول');
			                        }
	                        	}
	                        }
	                        else{
		        	    	 $limit= DB::table('limits')
		                        ->where('id', $relative->limit_id)
		                        ->get(); 
		                        if($limit->total_remainder>=$transfer['total_cost']){
		                        	Notify::success('التحويل','مقبول');
		                        }			                        	
	                            }
	                        
                           }
                           else{
                           	Notify::success('الاشتراك','غير مشترك');
                           }
        	        }
        	        else{
        	        	Notify::success('الاشتراك','غير مشترك');
        	        }
        //  }
          // else{
          // 		Notify::success('الاشتراك','لست');
          // }

}

}
