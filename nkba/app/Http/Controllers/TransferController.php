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
use Event;
use App\Events\TransferEvent;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{

	public function __construct() {
		$this->middleware('auth');
	}
	public function index(){
		return view('transfer.index');
	}
	public function create(){
		
		$role = Auth::user()->role;
		if( Auth::user()->role == "معمل" || Auth::user()->role == "مستشفي"){
			return view('transfer.new');
		}
		else{
			return redirect("/");
		}
	}

	public function store(Request $request){
		$input=Input::all();

		$validation=Validator::make($input, Transfer::$transfer_rules);
		$transfer= new Transfer;
		if ($validation->passes())
		{                
			$transfer->eng_id=$input['eng_id'];
			$transfer->health_id = $input['health_id'];
			$transfer->patient_name=$input['patient_name'];
			$transfer->patient_type=$input['degree'];
			$transfer->medical_diagnosis  =$input['medical_diagnosis'];
			$transfer->type=$input['type'];	
			$transfer->type_name=$input['list'];	
			$transfer->doctor_name=$input['doctor_name'];
			$transfer->hospital_name=$input['hospital_name'];
			$transfer->lab_name=$input['lab_name'];
			$transfer->total_cost=$input['total_cost'];
			$transfer->accepted=$input['accepted'];
			$transfer->percentage=$input['percentage'];
			$transfer->transfer_date=$input['transfer_date']	;
			$transfer->save();
			if($transfer->save()){
				return Redirect::route('transfer.create');	

			}else{
				dd($input);
			}
			// Event::fire(new TransferEvent()); // fire the transfer event
			event(new TransferEvent(new Transfer($transfer->toarray())));
		}		     
	}

	public function show($id)
	{
		$transfer_row=Transfer::find($id);
		return view('transfer.show',compact('transfer_row'));
	}

	public function confirm($id){
		DB::table('transfers')
		->where('id', $id)
		->update(['confirm' => 'نعم']);
	}
}
