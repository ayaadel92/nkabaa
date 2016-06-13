<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;
use Illuminate\Support\Facades\Auth;

class EngineerController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

  
    public function index() {
        return view('home');
    }

    public function show($id) {
         $role = Auth::user()->role;
         if($role == "مهندس"||$role == "قريب"){
         if(Auth::user()->id == $id ){
         if($role ==="مهندس"){
        $user = DB::table('engineers')
                ->where('user_id', $id)
                ->get();
       // print_r($user);exit;
        return view('engineer.index', compact('user'));
         }else{
              $user = DB::table('relatives')
                ->where('user_id', $id)
                ->get();
              //print_r( $user);exit();
        return view('engineer.index', compact('user'));
         }
         }
         else{
            return redirect("/");
         }
         }
         else{
             return redirect("/");
         }
    }

    public function update(Request $request, $id) {
        $record = new User;
        $record = DB::table('users')
                ->where('id', $id)
                ->update(['password' => bcrypt(Request::get('password'))]);
        return redirect("engineer/$id");
    }

}
