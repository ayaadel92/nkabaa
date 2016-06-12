<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function __construct() {
        // print_r('session:'.Session::has('id'));exit();
        if (!Session::has('id')) {
            return view("admin.login");
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }else
        {
            return view('admin.layout.master');
        }
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
        //
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

    public function login(Request $request)
    {
        return view('admin.login');
    }
    public function loggedin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $admin_count= DB::table('admins')->where([['email',$email],['password',$password]])->count();
        if($admin_count > 0){
            $admin = DB::table('admins')->where([['email',$email],['password',$password]])->get();
            $admin_json=response()->json($admin)->getData()[0];
            Session::put('id',$admin_json->id);
            return  redirect("/admin");
        }
        else{
            return redirect("/admin/login");
        }
    }
     public function logout(Request $request)
    {
        Session::flush();
        return redirect("/admin/login");
    }
}
