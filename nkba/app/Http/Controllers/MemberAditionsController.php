<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;
class MemberAditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        $user='sssss';
//        return view('memberAditions.index', compact('user'));
    }
    public function show($id)
    {
        //
        $user='sssss';
        return view('memberAditions.index', compact('user'));
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
