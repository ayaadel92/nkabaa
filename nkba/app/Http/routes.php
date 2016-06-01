<?php
use Illuminate\Support\Facades\Input;
use App\Analysisradios;
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


//transfer routes
Route::resource('transfer','TransferController');
Route::resource('/create','TransferController@create');
Route::get('val','TransferController@validate_transfer');
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


//Admin routes
Route::resource('admin','AdminController');
Route::resource('admin-engineer','Admin\Engineers\AEngineersController');


