<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Complaint;
use Illuminate\Support\Facades\Request as Request;
use Illuminate\Support\Facades\Input;

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
       $complain->hospital_name = Request::get('name_hosptail'); 
       $complain->doctor_name = Request::get('name_doctor'); 
        $complain->lab_name = Request::get('name_lab');
        $complain->description=Request::get('dec');
        //fileToUpload
//        $destinationPath="/assets/images";
//        $fileName = Request::get('fileToUpload')->getClientOriginalName();
//        $complain->img_path=Request::get('fileToUpload')->move($destinationPath, $fileName);
//        //print_r($complain->img_path);exit();
//        //Input::file('photo')->move($destinationPath, $fileName);
        
        
      $file = array_get(Request::get('fileToUpload'),'fileToUpload');
           // SET UPLOAD PATH
            $destinationPath = '/assets/images';
            // GET THE FILE EXTENSION
            $extension = $file->getClientOriginalExtension();
            // RENAME THE UPLOAD WITH RANDOM NUMBER
            $fileName = rand(11111, 99999) . '.' . $extension;
            // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
            $upload_success = $file->move($destinationPath, $fileName);
        $complain->img_path= $fileName;
        $complain->user_id = Auth::user()->id;
        
       $complain->save();
//        $id = Auth::user()->id;
        $id=Auth::user()->id;
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
