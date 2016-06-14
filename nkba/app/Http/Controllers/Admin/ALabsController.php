<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Lab;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ALabsController extends Controller
{
    public function __construct() {
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Lab::all();
        $labs->toarray();
        return view('admin.labs.index', compact('labs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.labs.new');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Input::all();
        // $validation = Validator::make($input, Lab::$rules);
        // if ($validation->passes())
        // {
     //add lab in labs table 
        $destinatonPath = '';
        $photoname = '';
        if(Input::file('path')){
            $photo = Input::file('path');
            $destinationPath = '/assets/images/admin/doctors/';
            $extension = Input::file('path')->getClientOriginalExtension();
            $photoname = mt_rand(1, 100000).$photo->getClientOriginalName();
            $photo->move(public_path().$destinationPath,$photoname);
        }
        $lab = new lab;
        $lab->name = $input['name'];
        $lab->address = $input['address'];
        $lab->phone = $input['phone'];
        $lab->governorate = $input['governorate'];
        $lab->area = $input['area'];
        $lab->login_id = $input['login_id'];
        $lab->discription = $input['discription'];
        $lab->path = $destinationPath.$photoname;  
        $lab->save();

        return Redirect::route('admin-lab.index');
        // } 

        // return Redirect::route('admin-lab.create')
        // ->withInput()
        // ->withErrors($validation)
        // ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        // get the lab
        $lab = Lab::find($id);
        return View('admin.labs.show',compact('lab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = array('مركز اشعة' => 'مركز اشعة','معمل تحاليل' => 'معمل تحاليل');
        $lab = Lab::find($id);
        return View('admin.labs.edit',compact('lab','types'));
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
        $lab = Lab::findOrFail($id);
       // $validation=$this->validate($request, [
       //  'name' => 'required',
       //  'email' => 'required'
       //  ]);
        $input = $request->all();
        $lab->fill($input)->save();
        return Redirect::route('admin-lab.show',$lab->id);
       // ->withInput()
       // ->withErrors($validation)
       // ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lab = Lab::findOrFail($id);
        $lab->delete();
        return Redirect::route('admin-lab.index');
    }
}
