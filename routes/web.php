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
	Route::get('portfolio', 'Web\HomeController@portfolio')->name('portfolio');
	Route::get('contact', 'Web\HomeController@contact')->name('contact');

	Route::get('dashboard', 'DashboardController@adminIndex')->name('dashboard.admin');
	
});


	/*
	 | Authentication routes											    
	 |-----------------------------------
	 | For logged in users only.
	 */	
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'account'], function(){
	//code
});
