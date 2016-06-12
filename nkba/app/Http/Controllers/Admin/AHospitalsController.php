<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Hospital;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AHospitalsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        if (!Auth::user() || Auth::user()->role != "ادمن") {
            return redirect("/");
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::all();
        $hospitals->toarray();
        return view('admin.hospitals.index', compact('hospitals'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hospitals.new');
        
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
        // $validation = Validator::make($input, Hospital::$rules);
        // if ($validation->passes())
        // {
            //add hospital in hospitals table 
        $hospital = new hospital;
        $hospital->name = $input['name'];
        $hospital->address = $input['address'];
        $hospital->phone = $input['phone'];
        $hospital->governorate = $input['governorate'];
        $hospital->area = $input['area'];
        $hospital->discription = $input['discription'];
        $hospital->path = $input['path'];
        $hospital->save();

        return Redirect::route('admin-hospital.index');
        // } 

        // return Redirect::route('admin-hospital.create')
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
        // get the hospital
        $hospital = Hospital::find($id);
        return View('admin.hospitals.show',compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = Hospital::find($id);
        return View('admin.hospitals.edit',compact('hospital'));
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
        $hospital = Hospital::findOrFail($id);
       // $validation=$this->validate($request, [
       //  'name' => 'required',
       //  'email' => 'required'
       //  ]);
       $input = $request->all();
       $hospital->fill($input)->save();
       return Redirect::route('admin-hospital.show',$hospital->id);
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
        $hospital = Hospital::findOrFail($id);
        $hospital->delete();
        return Redirect::route('admin-hospital.index');
   }
}
