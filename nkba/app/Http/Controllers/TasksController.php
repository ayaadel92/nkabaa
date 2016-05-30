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
use Illuminate\Support\Facades\Request as Request;

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
        $task->user_id = Auth::user()->id;
        $task->save();
        $id = Auth::user()->id;
        return redirect("/task/$id");
    }

    public function show($id) {
        $tasks = DB::table('tasks')
                ->where('user_id', $id)
                ->get();
        return view('tasks.index', compact('tasks'));
    }
    
    
     public function update(Request $request, $id)
    {
       
         $task= Task::find($id);
        $task->name = Request::get('name');//get to get data from object de 3'er el action bta3 el form
         $id = Auth::user()->id;
          $task->save();
        return redirect("/task/$id");
    }
    
  
    public function destroy(Request $request, Task $task) {
        
        $task->delete();
        $id = Auth::user()->id;
        return redirect("/task/$id");
    }

}
