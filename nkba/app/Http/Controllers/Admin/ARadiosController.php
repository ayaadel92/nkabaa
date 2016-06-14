<?php
namespace App\Http\Controllers\Admin;

use DB;
use Session;
use App\User;
use App\Analysisradios;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


//admin controller for control the radios
class ARadiosController extends Controller
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
        $radios = Analysisradios::all();
        $radios->toarray();
        return view('admin.radios.index', ['radios' => $radios]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.radios.new');
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
      //add radios in radios table
        $radios = new Analysisradios;
        $radios->name = $input['name'];
        $radios->type = $input['type'];
        $radios->limit = $input['limit'];
        $radios->limits_num = $input['limits_num'];
        $radios->save();

        return Redirect::route('admin-radio.index');
        // } 

        // return Redirect::route('admin-radio.create')
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
        // get the radios
        $radios = Analysisradios::find($id);
        return View('admin.radios.show',compact('radios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $limits = array('تحليل'=>'تحليل','اشعة'=>'اشعة');
        $types = array('yes'=>'نعم','no'=>'لا');
        $radios = Analysisradios::find($id);
        return View('admin.radios.edit',compact('radios','types','limits'));
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
        $radios = Analysisradios::findOrFail($id);
        $input = $request->all();
        $radios->fill($input)->save();
        return Redirect::route('admin-radio.show',$radios->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $radios = Analysisradios::findOrFail($id);
        $radios->delete();
        return Redirect::route('admin-radio.index');
    }


}
