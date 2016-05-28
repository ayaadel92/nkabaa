<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;

//use App\Http\Controllers\Auth;

class EngineerController extends Controller {

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
        $user = DB::table('engineers')
                ->where('user_id', $id)
                ->get();
        return view('engineer.index', compact('user'));
    }
    

    public function update(Request $request, $id) {
        $record = new User;
        $record = DB::table('users')
                ->where('id', $id)
                ->update(['password' => bcrypt(Request::get('password'))]);
        return redirect("engineer/$id");
    }

}

