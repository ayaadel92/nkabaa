<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;



class EngineerController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

  
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
