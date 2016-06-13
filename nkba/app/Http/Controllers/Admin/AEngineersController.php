<?php
namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\User;
use App\Engineer;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


//admin controller for control the engineers
class AEngineersController extends Controller
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
        $engineers = Engineer::all();
        $engineers->toarray();
        return view('admin.engineers.index', ['engineers' => $engineers]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.engineers.new');
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
        // $validation = Validator::make($input, Engineer::$rules);
        // if ($validation->passes())
        // {
      //add engineer in engineers table
        
        $engineer = new Engineer;
        $engineer->user_id = null;
        $engineer->name = $input['name'];
        $engineer->email = $input['email'];
        $engineer->national_id = $input['national_id'];
        $engineer->address = $input['address'];
        $engineer->phone_number = $input['phone_number'];
        $engineer->birth_date = $input['birth_date'];
        $engineer->gradu_year = $input['gradu_year'];
        $engineer->relative_num = $input['relative_num'];
        $engineer->gender = $input['gender'];
        $engineer->eng_id = $input['eng_id'];
        $engineer->health_id = $input['health_id'];
        $engineer->credit_number = $input['credit_number'];
        $engineer->path = null;
        $engineer->save();

        return Redirect::route('admin-engineer.index');
        // } 

        // return Redirect::route('admin-engineer.create')
        // ->withInput()
        // ->withErrors($validation)
        // ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // get the engineer
        $engineer = Engineer::find($id);
        return View('admin.engineers.show',compact('engineer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $engineer = Engineer::find($id);
        return View('admin.engineers.edit',compact('engineer'));
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
        $engineer = Engineer::findOrFail($id);
        $validation=$this->validate($request, [
            'name' => 'required',
            'email' => 'required'
            ]);
        $input = $request->all();
        $engineer->fill($input)->save();
        return Redirect::route('admin-engineer.show',$engineer->id)
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $engineer = Engineer::findOrFail($id);
        $engineer->delete();
        return Redirect::route('admin-engineer.index');
    }


}
