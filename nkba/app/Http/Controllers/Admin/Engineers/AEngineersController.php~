<?php
namespace App\Http\Controllers\Admin\Engineers;

use DB;
use App\User;
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
        $users = User::all();
        $users->toarray();
        return view('admin.engineers.index', ['users' => $users]);
    }
}
