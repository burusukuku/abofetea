<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('HomeController.index');
	}

    public function sobre()
    {
        return View::make('HomeController.sobre');
    }

    public function contacto()
    {
        return View::make('HomeController.contacto');
    }

    public function donar()
    {
        return View::make('HomeController.donar');
    }

}
