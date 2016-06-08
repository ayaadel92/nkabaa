<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Auth;
//use App\Repositories\TaskRepository;
use DB;
use App\User;
use DateTime;
use Illuminate\Support\Facades\Request as Request;
use Mail;

class TasksController extends Controller {

    protected $tasks;

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('tasks');
    }

    public function store(Request $request) {
        $task = new Task;
        $task->name = Request::get('name'); //get to get data from object de 3'er el action bta3 el for 
        $task->time = Request::get('time');
        $task->date = Request::get('date');
        $task->user_id = Auth::user()->id;
        $task->save();
        $id = Auth::user()->id;


        $dt = new \DateTime("NOW");

        $x = $dt->format('Y-m-d H:i:s');
        $date = preg_split('/\W/', $x, 0, PREG_SPLIT_NO_EMPTY);
        $year = $date['0'];

        $month = $date['1'];
        $day = $date['2'];
        $hour = $date['3'];
        $min = $date['4'];
        $date2 = preg_split('/\W/', Request::get('time'), 0, PREG_SPLIT_NO_EMPTY);
        $hour1 = $date2['0'];
        $min1 = $date2['1'];
        $date3 = preg_split('/\W/', Request::get('date'), 0, PREG_SPLIT_NO_EMPTY);
         $year1 = $date3['0'];
        $month1 = $date3['1'];
        $day1 = $date3['2'];
         $user = DB::table('engineers')
                    ->where('user_id', $id)
                    ->get();
        if($year==$year1 && $month1==$month && $day==$day1 && $hour1==$hour && $min1 ==$min ){
             Mail::send('emails.tasks',$user,function($message) use ($user)
         {

            $MailBody = Request::get('date');
            $message->setBody($MailBody, 'text/html');
            $message->from('nkabaalex@gmail.com','Admin');
            $message->to($user['0']->email)->subject('التذكير بمواعيد الادويه ');  
                 
         });   
        }
        
        
        
        return redirect("/task/$id");
    }

    public function show($id) {
          $role = Auth::user()->role;
        if ($role == "مهندس" || $role == "قريب") {
        if(Auth::user()->id == $id ){
        $tasks = DB::table('tasks')
                ->where('user_id', $id)
                ->get();
        return view('tasks.index', compact('tasks'));
        }
        else{
             return redirect("/");
        }
        }
        else{
            return redirect("/");
        }
    }

    public function update(Request $request, $id) {

        $task = Task::find($id);
        //print_r($task);exit();
        $task->name = Request::get('name'); //get to get data from object de 3'er el action bta3 el form
        $task->time = Request::get('time');
        $task->date = Request::get('date');
        $task->save();
        $id = Auth::user()->id;


        $dt = new \DateTime("NOW");

        $x = $dt->format('Y-m-d H:i:s');
        $date = preg_split('/\W/', $x, 0, PREG_SPLIT_NO_EMPTY);
        $year = $date['0'];

        $month = $date['1'];
        $day = $date['2'];
        $hour = $date['3'];
        $min = $date['4'];
        $date2 = preg_split('/\W/', Request::get('time'), 0, PREG_SPLIT_NO_EMPTY);
        $hour1 = $date2['0'];
        $min1 = $date2['1'];
        $date3 = preg_split('/\W/', Request::get('date'), 0, PREG_SPLIT_NO_EMPTY);
         $year1 = $date3['0'];
        $month1 = $date3['1'];
        $day1 = $date3['2'];
         $user = DB::table('engineers')
                    ->where('user_id', $id)
                    ->get();
        if($year==$year1 && $month1==$month && $day==$day1 && $hour1==$hour && $min1 ==$min ){
             Mail::send('emails.welcome',$user,function($message) use ($user)
         {
         $message->from('nkabaalex@gmail.com');
         $message->to($user['0']->email)->subject("مواعيدك");
         });   
        }
        

        return redirect("/task/$id");
    }

    public function destroy(Request $request, Task $task) {

        $task->delete();
        $id = Auth::user()->id;
        return redirect("/task/$id");
    }

}
