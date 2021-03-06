<?php

use App\Analysisradios;
use App\Transfer;
use Illuminate\Support\Facades\Input;
use App\Events\TransferEvent;
use App\Percentages;
use App\Engineer;
use Illuminate\Http\Request;
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


 

//Evaluation Route
  Route::get('/','EvaluateController@GetEvaluate');
 
 //Search Routes
  Route::get('/SearchDoctor/{Data}','EvaluateController@SelectDoctors');
  
  Route::get('/DoctorSpecial/{Data}','EvaluateController@SelectDoctorsSpecial');
  
  Route::get('/DoctorName/{Data}','EvaluateController@SelectDoctorsName');

  Route::get('/SearchHospital/{Data}','EvaluateController@SelectHospitalByGover');
  
  Route::get('/SearchLab/{Data}','EvaluateController@SelectLabByArea');

   


Route::auth();

Route::resource('/home', 'HomeController');


  Route::resource('/engineer', 'EngineerController');


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
//get percentages
  Route::get('api/degree', function(){

   $input = Input::get('option');
   if($input==1)
   {
     $perc = Percentages::findengperc();
     return Response::json($perc->get(['percent']));
   }
   elseif ($input==2) 
   {
    $perc = Percentages::findwifeperc();
    return Response::json($perc ->get(['percent']));
  }
  elseif ($input==3) 
  {
    $perc = Percentages::findhosperc();
    return Response::json($perc ->get(['percent']));
  }
  elseif ($input==4) 
  {
    $perc = Percentages::findsonperc();
    return Response::json($perc ->get(['percent']));
  }
  elseif ($input==5) 
  {
    $perc = Percentages::finddoutperc();
    return Response::json($perc ->get(['percent']));
  }
  elseif ($input==6) 
  {
    $perc = Percentages::findfathperc();
    return Response::json($perc ->get(['percent']));
  }
  elseif ($input==7) 
  {
    $perc = Percentages::findmothperc();
    return Response::json($perc ->get(['percent']));
  }
});

//get card_id
  Route::get('api/card', function(Request $request){
   $input=$request->all();
     //print_r($input);
   $card = Engineer::findengid($input);
   return Response::json($card->get(['health_id']));

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

  Route::get('/admin/login',array('as' => 'admin.login', 'uses' => 'AdminController@login'));
  Route::get('/admin/logout',array('as' => 'admin.logout', 'uses' => 'AdminController@logout'));
  Route::post('/admin/loggedin',array('as' => 'admin.loggedin', 'uses' => 'AdminController@loggedin'));
  Route::resource('admin','AdminController');
  Route::resource('admin-user','Admin\AUsersController');
  Route::resource('admin-engineer','Admin\AEngineersController');
  Route::resource('admin-limit','Admin\ALimitsController');
  Route::resource('admin-relative','Admin\ARelativesController');
  Route::resource('admin-doctor','Admin\ADoctorsController');
  Route::resource('admin-hospital','Admin\AHospitalsController');
  Route::resource('admin-lab','Admin\ALabsController');
  Route::resource('admin-radio','Admin\ARadiosController');


//Employee
  Route::get('/employee-transfer/confirmed',array('as' => 'employee-transfer.confirmed', 'uses' => 'EmplyeeTransferController@confirmed'));
  Route::get('/employee-transfer/decreaseLimit/{id}',array('as' => 'employee-transfer.decreaseLimit', 'uses' => 'EmplyeeTransferController@decreaseLimit'));
  Route::put('/employee-transfer/decreaseInsure',array('as' => 'employee-transfer.decreaseInsure', 'uses' => 'EmplyeeTransferController@decreaseInsure'));
  Route::get('ajax/{created}',function($created){
    if (Request::ajax()) {
        if (Transfer::where('done', 'لا')->count() > 0) {
            $last_created = Transfer::orderBy('created_at', 'desc')->first();
            if ($last_created !== $created) {
                $transfers = Transfer::where([['created_at', '>', $created], ['done', '=', 'لا']])->get();
                return response()->json($transfers);
            }
        }
    }
  });
  Route::get('ajaxConfirm/{updated}',function($updated){
    if (Request::ajax()) {
      if (Transfer::where('done','نعم')->count() > 0) {
        $last_updated = Transfer::orderBy('updated_at','desc')->first();
        if ($last_updated !== $updated) {
          $transfers = Transfer::where([['updated_at','>',$updated],['done','=','نعم'],['confirm','=','نعم']])->get();
          return response()->json($transfers);
        }
        
      }
    }
  });
  Route::resource('employee-transfer','EmplyeeTransferController');

