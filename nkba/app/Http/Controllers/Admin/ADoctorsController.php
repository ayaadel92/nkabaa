<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\Doctor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ADoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }else{
            $doctors = Doctor::all();
            $doctors->toarray();
            return view('admin.doctors.index', compact('doctors'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }else{
            return view('admin.doctors.new');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }else{
            $input = Input::all();
        // $validation = Validator::make($input, Doctor::$rules);
        // if ($validation->passes())
        // {
            //add doctor in doctors table

            $destinatonPath = '';
            $photoname = '';
            if(Input::file('path')){
                $photo = Input::file('path');
                $destinationPath = '/assets/images/admin/doctors/';
                $extension = Input::file('path')->getClientOriginalExtension();
                $photoname = mt_rand(1, 100000).$photo->getClientOriginalName();
                $photo->move(public_path().$destinationPath,$photoname);
            }
            $doctor = new Doctor;
            $doctor->name = $input['name'];
            $doctor->degree = $input['degree'];
            $doctor->specialization = $input['specialization'];
            $doctor->address = $input['address'];
            $doctor->phone = $input['phone'];
            $doctor->governorate = $input['governorate'];
            $doctor->area = $input['area'];
            $doctor->price = $input['price'];
            $doctor->mobile = $input['mobile'];
            $doctor->discription = $input['discription'];
            $doctor->path = $destinationPath.$photoname;
            $doctor->save();

            return Redirect::route('admin-doctor.index');
        }
        // } 

        // return Redirect::route('admin-doctor.create')
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
        // get the doctor
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }else{
            $doctor = Doctor::find($id);
            return View('admin.doctors.show',compact('doctor'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }else{
            $doctor = Doctor::find($id);
            return View('admin.doctors.edit',compact('doctor'));
        }
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
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }else{
            $doctor = Doctor::findOrFail($id);
       // $validation=$this->validate($request, [
       //  'name' => 'required',
       //  'email' => 'required'
       //  ]);
            $input = $request->all();
            $doctor->fill($input)->save();
            return Redirect::route('admin-doctor.show',$doctor->id);
        }
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
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }else{
            $doctor = Doctor::findOrFail($id);
            $doctor->delete();
            return Redirect::route('admin-doctor.index');
        }
    }
}
