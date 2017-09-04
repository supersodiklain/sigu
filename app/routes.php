<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});
Route::get('/maps', function(){
	return View::make('maps');
});

// Route::get('/', function(){
// 	return View::make('profile');
// });

Route::get('/tabel',function(){
	return View::make('tabel');
});
Route::get('/profil',function(){
	return View::make('profil-Universitas');
});

Route::controller('/', 'HomeController');