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

Route::get('/',array('as' => 'index', 'uses' => 'HomeController@index'));
Route::get('/sobre', array('as' => 'sobre', 'uses' => 'HomeController@sobre'));
Route::get('/contacto',array('as' => 'contacto', 'uses' => 'HomeController@contacto'));
Route::get('/donar',array('as' => 'donar', 'uses' => 'HomeController@donar'));

Route::get('/rajoy',array('as' => 'rajoy', 'uses' => 'politicos@rajoy'));



Route::get('/soraya',array('as' => 'soraya', 'uses' => 'politicos@soraya'));



// Redireccion a la página de error 404

App::missing(function($exception){
    return Response::view('error.error404', array(), 404);
});