<?php

namespace App\Http\Controllers;

use App\Http\Requests;
//use Illuminate\Http\Request;
use DB;
//use App\users;
use App\User;
use Illuminate\Support\Facades\Request as Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }

    public function show($id) {
        //deh el hdf mnha 2ny 27wal 2agy one object v id bt3o 
        $user = User::findorFail($id);
        return view('home', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->password = bcrypt(Request::get('password')); 

        $user->save();
        return redirect("home/$id");
    }

}
