<?php

namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AUsersController extends Controller
{
    public function __construct() {
        if (!Session::has('id')) {
            return redirect("/admin/login");
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $users->toarray();
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Input::all();
        // $validation = Validator::make($input, user::$rules);
        // if ($validation->passes())
        // {
            //add user in users table
            $user = new User;
            $user->role = $input['role'];
            $user->login = $input['login'];
            $user->email = $input['email'];
            $user->password = bcrypt($input['password']);
            $user->save();
            $user_obj = USER::orderBy('id','desc')->first();
            $user_json = response()->json($user_obj)->getData();
            if ($user->role == 'مهندس') {
                DB::table('engineers')->where('eng_id',$input['login'])->update(['user_id'=>$user_json->id]);
            }elseif ($user->role == 'قريب') {
                DB::table('relatives')->where('eng_id',$input['login'])->update(['user_id'=>$user_json->id]);
            }elseif ($user->role == 'معمل') {
                DB::table('labs')->where('id',$input['login'])->update(['user_id'=>$user_json->id]);
            }elseif ($user->role == 'مستشفى') {
                DB::table('hospitals')->where('id',$input['login'])->update(['user_id'=>$user_json->id]);
            }
            return Redirect::route('admin-user.index');
        // } 

        return Redirect::route('admin-user.create');
        // ->withInput()
        // ->withErrors($validation)
        // ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // get the user
        $user = User::find($id);
        return View('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = array('ادمن'=>'أدمن','مهندس'=>'مهندس/مهندسة','قريب'=>'قريب','موظف'=>'موظف','طبيب'=>'طبيب','معمل'=>'معمل','مستشفي'=>'مستشفي');
        $user = User::find($id);
        return View('admin.users.edit',compact('user','roles'));
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
       $user = User::findOrFail($id);
        // $validation=$this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required'
        //     ]);
       $input = $request->all();
       $user->fill($input)->save();
       return Redirect::route('admin-user.show',$user->id);
        // ->withInput()
        // ->withErrors($validation)
        // ->with('message', 'There were validation errors.');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return Redirect::route('admin-user.index');
    }
}
