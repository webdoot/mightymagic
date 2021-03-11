<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function filmMakingOtt() 
    {
    	return view('web.services.film-making-ott');
    }


    public function brandIdentity() 
    {
    	return view('web.services.brand-identity');
    }


    public function webSolution() 
    {
    	return view('web.services.web-solution');
    }


    public function corporateFilm() 
    {
    	return view('web.services.corporate-film');
    }


    public function printProduction() 
    {
    	return view('web.services.print-production');
    }


    public function socilMedia() 
    {
    	return view('web.services.social-media');
    }
}
