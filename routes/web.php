<?php
	
/*
 |-----------------------------|
 | WEBDOOT SOFTWARE DEVELOPEMT |
 |      SUPERSITE APP     	   |
 |-----------------------------|
 */

use Illuminate\Support\Facades\Route;

	/*
	 | Public routes											    
	 |-----------------------------------
	 | For all users.
	 */	
Route::group(['middleware' => ['web']], function(){
	Route::get('/', 'Web\HomeController@home');
	Route::get('home', 'Web\HomeController@home')->name('home');
	Route::get('about', 'Web\HomeController@about')->name('about');


	Route::get('services', 'Web\HomeController@service')->name('service');
	Route::get('services/film-making-ott', 'Web\ServiceController@filmMakingOtt')->name('service.ott');
	Route::get('services/band-identity', 'Web\ServiceController@brandIdentity')->name('service.brand');
	Route::get('services/web-solution', 'Web\ServiceController@webSolution')->name('service.web');
	Route::get('services/corporate-film-photography', 'Web\ServiceController@corporateFilm')->name('service.corporate');
	Route::get('services/print-production', 'Web\ServiceController@printProduction')->name('service.print');
	Route::get('services/social-media-marketing', 'Web\ServiceController@socilMedia')->name('service.social');


	Route::get('portfolio', 'Web\HomeController@portfolio')->name('portfolio');
	Route::get('contact', 'Web\HomeController@contact')->name('contact');
	Route::get('work-with-us', 'Web\HomeController@workWith')->name('workwith');

	// submit forms
	Route::post('contact', 'Web\FormController@contact')->name('contact.submit');
	Route::post('work-with-us', 'Web\FormController@workWithUs')->name('workWithUs.submit');
	
});


	/*
	 | Authentication routes											    
	 |-----------------------------------
	 | For logged in users only.
	 */	
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'account'], function(){
	//code
});
