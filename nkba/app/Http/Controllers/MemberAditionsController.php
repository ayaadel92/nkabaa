<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as Request;
class MemberAditionsController extends Controller
{
   
    public function store(Request $request)
    {
  
    }
    public function show($id)
    {
       
        $user='sssss';
        return view('memberAditions.index', compact('user'));
    }

    

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
