<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public $data = [];

    public function contact(Request $request)
    {  
    	// Validation.
        $validation = Validator::make($request->all(),
                        [   'name'      => 'bail|required|string|min:3',
		        			'email'  	=> 'required|email',
                            'phone'     => 'required|regex:/[0-9]{10}/|min:10',
                            'message'   => 'required|string',                
						]
		
         );

		if($validation->fails()){
		    return back()->with('error', 'Please fill valid data in (*) marked fields.')->withInput()->withErrors($validation);
		}

		$this->data = [
                    'name'      =>  $request->name            , 
                    'email'     =>  $request->email           ,
                    'contact'   =>  $request->phone           ,
                    'info'      =>  $request->message         ,

                    // subject what you give
                    'subject'   => 'Contact form submitted'   ,

                    // client ip
                    'ip'        =>  $request->ip()            ,

                ];

        // put try & catch block                 
        try {
        
            // Recieve mail
            Mail::send('mail.html', $this->data, function($message) {
                // construct title
                $title_1 = 'Contact form submitted - ' . $this->data['name'];

                $message->to('marketing@mightymagicdigital.com', 'Mighty Magic Digital');             
                $message->from('noreply@mightymagicdigital.com','MMD QuoteForm');
                $message->replyTo($this->data['email'], $this->data['name']);
                $message->subject($title_1);
            });

            // Reply mail to client
            Mail::send('mail.reply', $this->data, function($message) {
                // construct title
                $title_2 = 'Your form submitted on Mighty Magic Digital' ;
                
                $message->to($this->data['email'], $this->data['name']);             
                $message->from('noreply@mightymagicdigital.com','MightyMagicDigital');
                $message->subject($title_2);
            });

        } catch (\Exception $e) {
            // Return mail not send error       
            return back()->with('error', 'Form not submitted, server error.');
        }  

    	return back()->with('success', 'Your message submitted successfully. We will reach you soon...');

    }


    public function workWithUs(Request $request)
    {   
    	// Validation.
        $validation = Validator::make($request->all(),
                        [   'name'      => 'bail|required|string|min:3',
		        			'email'  	=> 'required|email',
                            'phone'     => 'required|regex:/[0-9]{10}/|min:10',
                            'pfile'   	=> 'nullable|file',                
                            'gender'   	=> 'required|string',                
                            'category' 	=> 'required|string',                
						]
		
         );
        

		if($validation->fails()){
		    return back()->with('error', 'Please fill valid data in (*) marked fields.')->withInput()->withErrors($validation);
		}

		$this->data = [
                    'name'      =>  $request->name            , 
                    'email'     =>  $request->email           ,
                    'contact'   =>  $request->phone           ,
                    'gender'    =>  $request->gender          ,
                    'category'  =>  $request->category        ,

                    'pfile'     =>  $request->pfile           ,

                    // subject what you give
                    'subject'   => 'Work with us form submitted'   ,

                    // client ip
                    'ip'        =>  $request->ip()            ,

                ];

        // put try & catch block                 
        try {
        
            // Recieve mail
            Mail::send('mail.html', $this->data, function($message) {
                // construct title
                $title_1 = 'Work with us form submitted - ' . $this->data['name'];

                // $message->to('team@mightymagicdigital.com', 'Team');             
                $message->to('webdoot.com@gmail.com', 'Team');             
                $message->from('noreply@mightymagicdigital.com','MMD WorkWithUs');
                $message->replyTo($this->data['email'], $this->data['name']);
                $message->subject($title_1);
                $message->attach($this->data['pfile']);
            });

            // Reply mail to client
            Mail::send('mail.reply', $this->data, function($message) {
                // construct title
                $title_2 = 'Your form submitted on Mighty Magic Digital' ;

                $message->to($this->data['email'], $this->data['name']);             
                $message->from('noreply@mightymagicdigital.com','MightyMagicDigital');
                $message->subject($title_2);
            });

        } catch (\Exception $e) {
            // Return mail not send error       
            return back()->with('error', 'Form not submitted, server error.');
        }   

    	return back()->with('success', 'Your message submitted successfully. We will reach you soon...');

    }


    public function getQuote(Request $request)
    {
        // Validation.
        $validation = Validator::make($request->all(),
                        [   'name'      => 'bail|required|string|min:3',
                            'email'     => 'required|email',
                            'contact'     => 'required|regex:/[0-9]{10}/|min:10',              
                        ]
        
         );        

        if($validation->fails()){
            return back()->with('error', 'Please fill valid data in (*) marked fields.')->withInput()->withErrors($validation);
        }

        $this->data = [
                    'name'      =>  $request->name            , 
                    'email'     =>  $request->email           ,
                    'contact'   =>  $request->contact         ,

                    // subject what you give
                    'subject'   => 'Quote Submitted'          ,

                    // client ip
                    'ip'        =>  $request->ip()            ,

                ];

        // put try & catch block                 
        try {
        
            // Recieve mail
            Mail::send('mail.html', $this->data, function($message) {
                // construct title
                $title_1 = 'Quote Submitted - ' . $this->data['name'];
                // send mail
                $message->to('marketing@mightymagicdigital.com', 'Mighty Magic Digital');             
                $message->from('noreply@mightymagicdigital.com','MMD QuoteForm');
                $message->replyTo($this->data['email'], $this->data['name']);
                $message->subject($title_1);
            });

            // Reply mail to client
            Mail::send('mail.reply', $this->data, function($message) {
                // construct title
                $title_2 = 'Your query submitted on Mighty Magic Digital';
                // send mail
                $message->to($this->data['email'], $this->data['name']);             
                $message->from('noreply@mightymagicdigital.com','MightyMagicDigital');
                $message->subject($title_2);
            });

        } catch (\Exception $e) {
            // Return mail not send error       
            return back()->with('error', 'Form not submitted, server error.');
        }    
        
        return back()->with('success', 'Your message submitted successfully. We will reach you soon...');

    }
}
