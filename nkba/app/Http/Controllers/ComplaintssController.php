<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;

class ComplaintssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
      public function __construct() {
        $this->middleware('auth');
    }

    
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $complain = new Complaint;
        $complain->description = Request::get('description'); //get to get data from object de 3'er el action bta3 el for 
        $complain->user_id = Auth::user()->id;
        $complain->hospital_name = Request::get('hospital_name');
        $complain->doctor_name = Request::get('doctor_name');
        $complain->lab_name = Request::get('lab_name');
        $complain->vedio_path = Request::get('vedio_path');
        $complain->save();
        $id = Auth::user()->id;
        return redirect("/complain/$id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $tasks="hello";
        
        return view('complain.index', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
