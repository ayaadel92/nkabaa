<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Complaint;
use Illuminate\Support\Facades\Request as Request;
use Illuminate\Support\Facades\Input;
use Mail;
//use Illuminate\Http\Request;


class ComplaintssController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

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
//    $name = Input::get("Auth::user()->id");
//
//        print_r($name);exit();
        $complain = new Complaint;
        $complain->hospital_name = Request::get('name_hosptail');
        $complain->date = Request::get('date');
            $complain->time = Request::get('time');
        $complain->doctor_name = Request::get('name_doctor');
        $complain->lab_name = Request::get('name_lab');
        $complain->description = Request::get('dec');
        $complain->user_id=Auth::user()->id;
        $destinatonPath = '';
        $filename = '';

        $file = Request::file('fileToUpload');
        $destinationPath = public_path() . '/assets/images/';
        $extension = Request::file('fileToUpload')->getClientOriginalExtension();
         $filename =Auth::user()->login .'.'.'-'.rand(1111,9999).$extension;
        $file->move($destinationPath,$filename);

        $complain->img_path = "$destinationPath " . $filename;

        $complain->save();
        $id = Auth::user()->id;
        
         $user = DB::table('engineers')
                    ->where('user_id', $id)
                    ->get();
         $mail=$user['0']->email;
         $des= Request::get('dec');
        $data = array('k1' => "$filename", 'k2' => "$mail",'k3' => "$des");
        Mail::send('emails.complain',$data,function($message) use ($data)
        {
          $MailBody ="<p style='color:#3D7A33;font-size:30px'>". "الصوره الشكاوي"."</p>"."<br> ".$data['k1']."<br>"."<p style='color:#3D7A33;font-size:30px'>"."المشكله"."</p>"."<br>".$data['k3'];  
            $message->setBody($MailBody, 'text/html');
            $message->from( $data['k2']);
            $message->to('nkabaalex@gmail.com','Admin')->subject('شكوي  ');
        });     
     
        return redirect("/complain/$id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
      
    if(Auth::user()->id == $id ){
              $hospitals = DB::select("select name from hospitals");
           $doctors = DB::select("select name from doctors");
            $labs = DB::select("select name from labs");
                   
                    $number = DB::table('hospitals')
                        ->count();

          return view('complain.index', compact(['hospitals','number','doctors','labs']));
        }
        else{
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
