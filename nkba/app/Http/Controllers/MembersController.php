<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Complaint;
use Illuminate\Support\Facades\Request as Request;
use Illuminate\Support\Facades\Input;
use Mail;
use MemberAdition;

class MembersController extends Controller
{

  public function store(Request $request)
  {
    $member = new Member;
    $member->relation_type = Request::get('father');
    $member->user_id=Auth::user()->id;
        ////////////////////////////////////////////////////////
    $destinatonPath = '';
    $filename = '';

    $file = Request::file('fileToUpload');
    $destinationPath = public_path() . '/assets/images/';
    $extension = Request::file('fileToUpload')->getClientOriginalExtension();
    $filename =Auth::user()->login .'.'.'-'.rand(1111,9999).$extension;
    $file->move($destinationPath,$filename);

    $member->photo = "$destinationPath " . $filename;
        ///////////////////////////////////////////////
    $destinatonPath1 = '';
    $filename1 = '';

    $file1 = Request::file('fileToUpload1');
    $destinationPath1 = public_path() . '/assets/images/';
    $extension1 = Request::file('fileToUpload1')->getClientOriginalExtension();
    $filename1 =Auth::user()->login .'.'.'-'.rand(1111,9999).$extension1;
    $file1->move($destinationPath1,$filename1);

    $member->require_data = "$destinationPath1 " . $filename1;
        /////////////////////////////////////////////////////////////////

    $member->save();
    $id = Auth::user()->id;
    $user = DB::table('engineers')
    ->where('user_id', $id)
    ->get();
    $mail=$user['0']->email;
    $type=Request::get('father');
    $data = array('k1' => "$filename", 'k2' => "$type",'k3' => "$mail" ,'k4' => "$filename1");
    Mail::send('emails.renews',$data,function($message) use ($data)
    {
      $MailBody =  "<p style='color:#3D7A33;font-size:30px'>"."نوع لاضافه".  "</p>"."<br>". $data['k2']."<br>". "<p style='color:#3D7A33;font-size:30px'>"."اضافه عضويه جديدالصوره اشخصيه بهذا الاسم"."  </p>   "."<br>".$data['k1'].    "<p style='color:#3D7A33;font-size:30px'>"."الملف المطلوب "."</p>"."<br>".$data['k4'];  
      $message->setBody($MailBody, 'text/html');
      $message->from( $data['k3']);
      $message->to('nkabaalex@gmail.com','Admin')->subject("اضافه عضويه جديده");
    });     






    return redirect("/member/$id");
  }
  public function show($id)
  {
   $role = Auth::user()->role;
   if($role == "مهندس"||$role == "قريب"){
    if(Auth::user()->id == $id ){
      return view('member.index');
    }
    else{
      return redirect("/");
    }
  }
  else{
    return redirect("/");
  }
}



public function update(Request $request, $id)
{

}

public function destroy($id)
{

}
}
