<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;
use Illuminate\Support\Facades\Auth;

class FainancesController extends Controller {

    public function index() {
        
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show($id) {

        $role = Auth::user()->role;

        if ($role == "engineer") {
            $user = DB::table('engineers')
                    ->where('user_id', $id)
                    ->get();
            // print_r($user['0'] -> status);exit();
            if ($user['0']->status == "no") {
                $message = "yes 7lwa ";
                 $limit="";
                $transfers="";
                return view('fin.index', compact(['message','limit','transfers']));
                
            } else {
                $limit = DB::table('limits')
                        ->where('user_id', $id)
                        ->get();
                $transfers= DB::table('transfers')
                        ->where('eng_id', Auth::user()->login)
                        ->get();
            // print_r($transfers);exit();
                $message = "";
                return view('fin.index', compact(['limit','message','transfers']));
            }
        } else {
            $user = DB::table('relatives')
                    ->where('user_id', $id)
                    ->get();
            if ($user['0']->status == "no") {
                $message = "mohndsk mdf3sh ya 7wan ";
                 $limit="";
                  $transfers="";
                return view('fin.index',compact(['message','limit','transfers']));
            }
            else{
                $limit = DB::table('limits')
                        ->where('user_id', $id)
                        ->get();
               // print_r($limit);exit();
                $message = "";
                return view('fin.index', compact(['limit','message']));
                
            }
        }
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        
    }

    public function destroy($id) {
        //
    }

}
