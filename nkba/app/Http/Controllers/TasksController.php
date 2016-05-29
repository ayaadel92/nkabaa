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


class TasksController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//
//        $this->tasks = $tasks;
//    }


    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index()
    {
        return view('tasks');
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $task= new Task;
        $task->name = Request::get('name');//get to get data from object de 3'er el action bta3 el for 
        $task->user_id=Auth::user()->id;
        $task->save();
        return redirect('/tasks');
    }

    
    
       public function show($id) {
        $tasks = DB::table('tasks')
                ->where('user_id', $id)
                ->get();
        return view('tasks.index', compact('tasks'));
    }
    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
       // $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
}