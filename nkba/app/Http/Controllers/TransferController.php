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

use Event;
use App\Events\TransferEvent;

class TransferController extends Controller
{
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
			$transfer->doctor_name=$input['doctor_name'];
			$transfer->hospital_name=$input['hospital_name'];
			$transfer->lab_name=$input['lab_name'];
			$transfer->total_cost=$input['total_cost'];
			$transfer->status=$input['status'];
			$transfer->percentage=$input['percentage'];
			$transfer->transfer_date=$input['transfer_date']	;
			$transfer->save();
			$id=$transfer->id;
			// Event::fire(new TransferEvent()); // fire the transfer event

		           //$this->show($id);
		           // return view('transfer.new');
			event(new TransferEvent(new Transfer($transfer->toarray())));
			return Redirect::route('transfer.show',$id)->withErrors($validation);
		}		     
	}

	public function show($id)
	{
		$transfer_row=Transfer::find($id);
		return view('transfer.show',compact('transfer_row'));
	}

}
