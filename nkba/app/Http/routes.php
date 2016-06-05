<?php
use App\Analysisradios;
use App\Transfer;
use Illuminate\Support\Facades\Input;
use App\Events\TransferEvent;


// use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

  // Route::get('/', function () {
 //   // Notify::success('مرحبا','تسجيل الدخول');
 //   $user=DB::select('select d.id,d.name,d.degree,d.specialization,d.phone,d.area,d.path,e.rate from doctors d,evaluate_doctors e where e.doctor_id=d.id and e.rate>=6');
 //   $cou=count($user);
        // $areas=DB::select('select area from doctors group by area');
        //  $area=response()->json($areas)->getData();
        // return $area;
 //    return view('welcome')->with(print_r($user),$cou);
  // $specializations=DB::select('select specialization from doctors group by specialization');
  //  return $specializations;
 //   // return view('welcome');
   
 // });
  Route::get('/','EvaluateController@GetEvaluate');
  // Route::get('/{id}','EvaluateController@');
  Route::get('/SearchDoctor/{Data}','EvaluateController@SelectDoctors');
  
  Route::get('/DoctorSpecial/{Data}','EvaluateController@SelectDoctorsSpecial');
  
  Route::get('/DoctorName/{Data}','EvaluateController@SelectDoctorsName');
 // Route::get('/SearchDoctor/{Data}',function()
 //  {

 //  $VarData=Input::get('Data');
 //      print($VarData);

 //  });

  Route::auth();

  Route::resource('/home', 'HomeController');

  Route::resource('/engineer', 'EngineerController');
//Route::put('/home/id', 'HomeController@update');

  Route::resource('/users', 'UserController');

  Route::resource('/fin', 'FainancesController');
   Route::resource('/rin', 'RenewsController');

  Route::resource('/member', 'MembersController');

  Route::resource('/task', 'TasksController');

  Route::resource('/complain', 'ComplaintssController');


//transfer routes
Route::resource('transfer','TransferController');
Route::resource('/create','TransferController@create');
Route::get('/transfer-confirm/{id}','TransferController@confirm');
//get analaysis and radiobologies
Route::get('api/dropdown', function(){
  
   $input = Input::get('option');
   if($input==1)
      {
           $radios = Analysisradios::findradios();
           return Response::json($radios->get(['id','name']));
      }
    elseif ($input==2) 
      {
           $analysis = Analysisradios::findanalysis();
           return Response::json($analysis->get(['id','name']));
      }
});

//acceptance transfer
Route::get('ajax-response/{updated}',function($updated){
    if (Request::ajax()) {
        $where = ['done'=>'نعم', 'confirm' =>'لا'];
      if (Transfer::where($where)->count() > 0) {
        $last_updated = Transfer::orderBy('updated_at','desc')->first();
        if($last_updated->created_at !=$last_updated->updated_at){
        if ($last_updated!== $updated) {
          $transfers = Transfer::where([['updated_at','>',$updated],[$where]])->get();
          return response()->json($transfers);
        }
        }
      }
    }
  });


//Admin routes
  Route::resource('admin','AdminController');
  Route::resource('admin-engineer','Admin\AEngineersController');
  Route::resource('admin-limit','Admin\ALimitsController');
  Route::resource('admin-relative','Admin\ARelativesController');

//Employee
  Route::resource('employee-transfer','EmplyeeTransferController');
// Route::get('ajax/{created}','EmplyeeTransferController@ajax');
  Route::get('ajax/{created}',function($created){
    if (Request::ajax()) {
      if (Transfer::where('done','لا')->count() > 0) {
        $last_created = Transfer::orderBy('created_at','desc')->first();
        if ($last_created !== $created) {
          $transfers = Transfer::where([['created_at','>',$created],['done','=','لا']])->get();
          return response()->json($transfers);
        }
        
      }
    }
  });
