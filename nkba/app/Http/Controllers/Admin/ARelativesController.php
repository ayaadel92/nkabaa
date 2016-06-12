<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\User;
use App\Relative;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class ARelativesController extends Controller
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
        $relatives = Relative::all();
        $relatives->toarray();
        return view('admin.relatives.index', compact('relatives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.relatives.new');
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
        // $validation = Validator::make($input, Relative::$rules);
        // if ($validation->passes())
        // {
            // `id`, `status`, `name`, `health_id`, `eng_id`, `birth_date`, `gender`, `relation_type`, `national_id`, `path`, `limit_id`, `user_id`
            //add relative in relatives table
            $relative = new Relative;
            $relative->status = $input['status'];
            $relative->name = $input['name'];
            $relative->health_id = $input['health_id'];
            $relative->eng_id = $input['eng_id'];
            $relative->birth_date = $input['birth_date'];
            $relative->gender = $input['gender'];
            $relative->relation_type = $input['relation_type'];
            $relative->national_id = $input['national_id'];
            $relative->path = $input['path'];
            $relative->limit_id = $input['limit_id'];
            $relative->user_id = $user->id;
            $relative->save();
            
            return Redirect::route('admin-relative.index');
        // } 

        // return Redirect::route('admin-relative.create')
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
        // get the relative
        $relative = Relative::find($id);
        return View('admin.relatives.show',compact('relative'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $relative = Relative::find($id);
       return View('admin.relatives.edit',compact('relative'));
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
       $relative = Relative::findOrFail($id);
       // $validation=$this->validate($request, [
       //  'name' => 'required',
       //  'email' => 'required'
       //  ]);
       $input = $request->all();
       $relative->fill($input)->save();
       return Redirect::route('admin-relative.show',$relative->id);
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
       $relative = Relative::findOrFail($id);
       $relative->delete();
       return Redirect::route('admin-relative.index');
   }
}
