<?php
use Illuminate\Support\Facades\Input;
use App\Analysisradios;
use App\Transfer;
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

  Route::get('/', function () {

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