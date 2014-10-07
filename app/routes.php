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

Route::get('/','HomeController@index', function()
{
	return View::make('HomeController.index');
});

Route::get('/sobre','HomeController@sobre', function()
{
    return View::make('HomeController.sobre');
});

Route::get('/contacto','HomeController@contacto', function()
{
    return View::make('HomeController.contacto');
});

Route::get('/donar','HomeController@donar', function()
{
    return View::make('HomeController.donar');
});
Route::get('/rajoy','politicos@rajoy', function()
{
    return View::make('politicos.rajoy');
});

//Registro de Rutas

Route::any('/' , array('as' => 'index', 'uses' => 'HomeController@index'));
Route::any('/sobre' , array('as' => 'sobre', 'uses' => 'HomeController@sobre'));
Route::any('/contacto' , array('as' => 'contacto', 'uses' => 'HomeController@contacto'));
Route::any('/donar' , array('as' => 'donar', 'uses' => 'HomeController@donar'));

Route::any('/rajoy' , array('as' => 'rajoy', 'uses' => 'politicos@rajoy'));
Route::any('/soraya' , array('as' => 'soraya', 'uses' => 'politicos@soraya'));

// Redireccion a la página de error 404

App::missing(function($exception){
    return Response::view('error.error404', array(), 404);
});