<?php
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
  Route::get('ajax/{created}',function($created){
    if (Request::ajax()) {
      if (Transfer::where('done','لا')->count() > 0) {
        $last_created = Transfer::orderBy('created_at','desc')->first();
        if ($last_created !== $created) {
          // print_r($created);exit;
          $transfers = Transfer::where([['created_at','>',$created],['done','=','لا']])->get();
           // print_r(response()->json($transfers));exit;
           // print_r(response()->json($transfers)->getData()[0]);exit;
          return response()->json($transfers);
        }
        
      }
    }
  });

  //event
  // Route::get('event',function()
  // {

  // });
