<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;
use Illuminate\Support\Facades\Auth;

class RenewsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $role = Auth::user()->role;
        if ($role == "مهندس" || $role == "قريب") {
            if (Auth::user()->id == $id) {
                $member = Auth::user()->login;

                $user_1 = DB::table('engineers')
                        ->where('eng_id', $member)
                        ->get();  //bgyb el mohnds               ---> deh elly hgyb mnha el mohnds dah el status bt3tha eh


                $renew = DB::table('renews')
                        ->where('eng_id', $member)
                        ->get();                        //--->gb kol w m3d elly sglhom feh 


                $renew_count = DB::table('renews')
                        ->where('eng_id', $member)
                        ->count();

                $number_status_no = DB::table('relatives')
                        ->where('eng_id', $member)
                        ->where('status', "لا")
                        ->get();                           //---> gb kol el 2rb elly msh msglhom 


                $number = DB::table('relatives')
                        ->where('eng_id', $member)
                        ->count();

//         for($i=0;$i<=$renew_count;$i++){
//             $name[i]=DB::table('relatives')
//                ->where('eng_id', $member)
//                     ->where('health_id',)
//                ->count();  
//         }


                $memb = DB::select('select h.name,d.health_id,d.year from relatives h , renews d where h.health_id= d.health_id');


 $per = DB::select("select percent from statics"); 
 $renew = DB::select("select renew from statics"); 
      $renew1 = DB::select("select renew1 from statics");
        


                // $data = array("k1' => "$filename", 'k2' => "$type",'k3' => "$mail" ,'k4' => "$filename1");    
                // print_r($memb);exit();
                return view('rin.index', compact(['user_1', 'number_status_no', 'memb','per','renew','renew1']));
            } else {
                return redirect("/");
            }
        } else {
            return redirect("/");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
