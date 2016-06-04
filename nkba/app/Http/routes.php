<?php
use App\Transfer;
use Illuminate\Support\Facades\Input;

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

  Route::resource('/member-aditions', 'MemberAditionsController');

  Route::resource('/task', 'TasksController');

  Route::resource('/complain', 'ComplaintssController');

  Route::resource('transfer','TransferController');

  Route::resource('/create','TransferController@create');

//Admin routes
  Route::resource('admin','AdminController');
  Route::resource('admin-engineer','Admin\Engineers\AEngineersController');

//Employee
  Route::resource('employee-transfer','EmplyeeTransferController');
// Route::get('/ajax','EmplyeeTransferController@ajax');
  Route::get('/ajax',function(){
    if (Request::ajax()) {
      if (Transfer::where('done','yes')->count() > 0) {
        $transfers = Transfer::where('done','yes')->get();
            // print_r(json_encode($transfers));exit;
        // print_r(response()->json($transfers)->getData()[0]);exit;

        return response()->json($transfers);
             }
        return "data has ajax";
      }
    });

