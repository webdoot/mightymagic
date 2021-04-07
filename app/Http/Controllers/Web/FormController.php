<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function contact(Request $request)
    {  
    	// Validation.
        $validation = Validator::make($request->all(),
                        [   'name'      => 'bail|required|string|min:3',
		        			'email'  	=> 'required|email',
                            'phone'     => 'required|regex:/[0-9]{10}/|digits:10',
                            'message'   => 'required|string',                
						],
		
         );

		 if($validation->fails()){
		    return back()->with('error', 'Please fill valid data in (*) marked fields.')->withInput()->withErrors($validation);
		  }

		  // message sending code here

    	return back()->with('success', 'Your message submitted successfully. We will reach your soon...');

    }


    public function workWithUs(Request $request)
    {
    	dd($request);
    	// Validation.
        $validation = Validator::make($request->all(),
                        [   'name'      => 'bail|required|string|min:3',
		        			'email'  	=> 'required|email',
                            'phone'     => 'required|regex:/[0-9]{10}/|digits:10',
                            'pfile'   	=> 'nullable|file',                
                            'gender'   	=> 'required|string',                
                            'category' 	=> 'required|string',                
						],
		
         );
        

		 if($validation->fails()){
		    return back()->with('error', 'Please fill valid data in (*) marked fields.')->withInput()->withErrors($validation);
		  }

		  // message sending code here

    	return back()->with('success', 'Your message submitted successfully. We will reach your soon...');

    }
}
