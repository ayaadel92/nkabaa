<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;

class FainancesController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {

        $tasks="hello";
        
        return view('fin.index', compact('tasks'));
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        //
    }
}
