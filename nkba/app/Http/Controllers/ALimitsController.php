<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Limit;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class ALimitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limits = Limit::all();
        $limits->toarray();
        return view('admin.limits.index', ['limits' => $limits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.limits.new');
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
        // $validation = Validator::make($input, Limit::$rules);
        // if ($validation->passes())
        // {
            //add limit in limits table
        $limit = new Limit;
        $limit->total_remainder = $input['total_remainder'];
        $limit->surgery_credit = $input['surgery_credit'];
        $limit->analysis_credit = $input['analysis_credit'];
        $limit->user_id = $input['user_id'];
        $limit->save();

        return Redirect::route('admin-limit.index');
    // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // get the limit
        $limit = Limit::find($id);
        return View('admin.limits.show',compact('limit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $limit = limit::find($id);
        return View('admin.limits.edit',compact('limit'));
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
        $limit = limit::findOrFail($id);
        // $validation=$this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required'
        //     ]);
        $input = $request->all();
        $limit->fill($input)->save();
        return Redirect::route('admin-limit.show',$limit->id);
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
       $limit = limit::findOrFail($id);
       $limit->delete();
       return Redirect::route('admin-limit.index');
   }
}
