<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	return view('web.home');
    }

    public function about()
    {
    	return view('web.about');
    }

    public function service()
    {
    	return view('web.service');
    }

    public function portfolio()
    {
    	return view('web.portfolio');
    }

    public function contact()
    {
    	return view('web.contact');
    }

    public function workWith()
    {
        return view('web.work-with');
    }

}
