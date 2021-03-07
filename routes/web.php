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
	Route::get('/', 'Web\HomeController@index');
	Route::get('home', 'Web\HomeController@index')->name('home');
	
});


	/*
	 | Authentication routes											    
	 |-----------------------------------
	 | For logged in users only.
	 */	
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'account'], function(){
	Route::get('dashboard', 'DashboardController@adminIndex')->name('dashboard.admin');
});
