<?php
use Illuminate\Support\Facades\Input;
use App\Analysisradios;
use App\Transfer;
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

  Route::get('/', function () {
   Notify::success('مرحبا','تسجيل الدخول');
   return view('welcome');
 });

  Route::auth();

  Route::resource('/home', 'HomeController');

  Route::resource('/engineer', 'EngineerController');
//Route::put('/home/id', 'HomeController@update');

  Route::resource('/users', 'UserController');

  Route::resource('/fin', 'FainancesController');
   Route::resource('/rin', 'RenewsController');

  Route::resource('/member-aditions', 'MemberAditionsController');

  Route::resource('/task', 'TasksController');

  Route::resource('/complain', 'ComplaintssController');

  Route::resource('transfer','TransferController');

//transfer routes
Route::resource('transfer','TransferController');
Route::resource('/create','TransferController@create');
Route::get('transfer-valid/{id}','TransferController@validate_transfer');
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
  Route::resource('/create','TransferController@create');

//Admin routes
  Route::resource('admin','AdminController');
  Route::resource('admin-engineer','Admin\Engineers\AEngineersController');

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