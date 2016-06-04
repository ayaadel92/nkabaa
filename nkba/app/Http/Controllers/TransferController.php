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

class TransferController extends Controller
{
	public static  $count=0;
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
			$transfer->type_name=$input['type_name'];
			$transfer->doctor_name=$input['doctor_name'];
			$transfer->hospital_name=$input['hospital_name'];
			$transfer->lab_name=$input['lab_name'];
			$transfer->total_cost=$input['total_cost'];
			$transfer->accepted=$input['accepted'];
			$transfer->percentage=$input['percentage'];
			$transfer->transfer_date=$input['transfer_date']	;
			$transfer->save();
			if($transfer->save()){
				TransferController::$count ++;
				Notify::success('لديك'.TransferController::$count.'طلبات تحويل','تنبيه');
				$id=$transfer->id;
				Session::set('val',$transfer);
				return Redirect::route('transfer.show',$id);	
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

	public function validate_transfer()
	{
		$transfer=response()->json(Session::get('val'))->getData();
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
								return "سن الابن اكبر من او يساوي 24";
							}
						} // check the age of son reach to 24
						$limit=$relativ->limit_id;
					}//end of relative status check=yes
					else{
						return "القريب غير مشترك";
					}
				}//end of patient is relative
				$limit_obj= DB::table('limits')
				->where('id', $limit)
				->get(); 
				$limit_json=response()->json($limit_obj)->getData()[0];
				if((1000-$limit_json->analysis_credit)>=$transfer->total_cost)//credit_analysis=the reminder from 1000LE
				{
					return('التحويلة مقبولة');
				}



			}//end of engineer status check=yes

			else{
				Notify::success('الاشتراك','غير مشترك');
				
			}//end of engineer status check=no
		}//end of engineer found 
		else{
			Notify::success('الاشتراك','لست');
		}//end of engineer not found 

	}

}
