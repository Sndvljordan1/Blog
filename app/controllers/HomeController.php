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

	public function showWelcome()
	{
		return View::make('hello');
	}

	// ===============================================================

	public function showResume()
	{
		return View::make('resume');
	}

	// ===============================================================

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	// ===============================================================

	public function playDice($guess)
	{
		$roll = mt_rand(2, 12);
    if ($guess == $roll) {
        $response = 'Great Guess!';
    }else{
        $response = 'So Close...';
    }
    $data = array('guess' => $guess, 'roll' => $roll, 'response' => $response);
    return View::make('roll-dice')->with($data);
	}

	// ===============================================================

	public function sayHello($name)
	{
		if ($name == "Chris") {
        	return Redirect::to('/');
    	} else {
        	$data = array('name' => $name);
        	return View::make('my-first-view')->with($data);
    	}
	}

	// ===============================================================

	public function showAnimate()
	{
		return View::make('animate');
	}

	// ===============================================================

	public function showFirstForm()
	{
		return View::make('my_first_form');
	}

	// ===============================================================

	public function showHello()
	{
		return View::make('hello_world');
	}

	// ===============================================================

	public function showPositions()
	{
		return View::make('css_positioning');
	}

	// ===============================================================

	public function showFloydBox()
	{
		return View::make('css_box_model');
	}

	// ===============================================================

	public function showCalc()
	{
		return View::make('calc');
	}

	// ===============================================================

	public function playSimon()
	{
		return View::make('simon');
	}

	// ===============================================================

	public function playWhack()
	{
		return View::make('whack');
	}

	// ===============================================================

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', "Invalid Email or Password");
			Log::warning("Attempted login by $email");
		    return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::flash('infoMessage', 'So long, have fun storming the castle!');
		return Redirect::action('PostsController@index');
	}
}
