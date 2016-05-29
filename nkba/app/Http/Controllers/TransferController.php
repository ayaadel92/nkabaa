<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\TransferFormRequest;
use App\Http\Requests;
use App\Transfer;

class TransferController extends Controller
{
    	public function store(Request $request){

    		$input=Input::all();
    		$validation=Validator::make($input, Transfer::$rules);
    		  if ($validation->passes())
		        {
		        	        $all_data_except_token = $input->except('_token');
     			        $id = Transfer::insertGetId($all_data_except_token);
		                   $this->show($id);
		        }

		        return Redirect::route('transfer.new')
		        ->withInput()
		        ->withErrors($validation)
		        ->with('message', 'There were validation errors.');
	}

	public function show($id)
	    {
	         $transfer_row=Transfer::find($id);
	         return view('transfer.show',compact('transfer_row'));
	    }

}
