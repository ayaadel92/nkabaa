<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Transfer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AtransfersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfers = Transfer::all();
        $transfers->toarray();
        return view('admin.transfers.index', compact('transfers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transfers.new');
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
        $validation = Validator::make($input, Transfer::$rules);
        if ($validation->passes())
        {
            `id`, `total_remainder`, `surgery_credit`, `analysis_credit`, `user_id`
            //add transfer in transfers table
            $transfer = new Transfer;
            $transfer->user_id = $user->id;
            $transfer->name = $input['name'];
            $transfer->email = $input['email'];
            $transfer->national_id = $input['national_id'];
            $transfer->address = $input['address'];
            $transfer->phone_number = $input['phone_number'];
            $transfer->birth_date = $input['birth_date'];
            $transfer->gradu_year = $input['gradu_year'];
            $transfer->relative_num = $input['relative_num'];
            $transfer->gender = $input['gender'];
            $transfer->eng_id = $input['eng_id'];
            $transfer->health_id = $input['health_id'];
            $transfer->credit_number = $input['credit_number'];
            $transfer->path = $input['path'];
            $transfer->save();
            
            return Redirect::route('admin-transfer.index');
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
