<?php
namespace App\Http\Controllers\Admin\Engineers;

use DB;
use App\User;
use App\Engineer;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


//admin controller for control the engineers
class AEngineersController extends Controller
{
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
        $validation = Validator::make($input, Engineer::$rules);
        if ($validation->passes())
        {
            //add engineer in users table
            $user = User::create(array(
                'role' => 'engineer',
                'login' => $input['eng_id'],
                'email' => $input['email'],
                'password' => $input['password']
                ));
            //add engineer in engineers table
            $engineer = new Engineer;
            $engineer->user_id = $user->id;
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
            $engineer->path = $input['path'];
            $engineer->save();
            
            return Redirect::route('admin-engineer.index');
        } 

        return Redirect::route('admin-engineer.create')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');
    }
}
