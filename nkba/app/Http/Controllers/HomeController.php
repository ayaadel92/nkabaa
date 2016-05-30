<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }

    public function show($id) {

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
