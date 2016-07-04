<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Events\UserMessage;
use Illuminate\Http\Request;

Route::get('/', function () {

	return View('welcome');
	
});

Route::post('/', function(Request $request) {

	// Redis::publish('test-channel',json_encode($data));

	event(new UserMessage($request->input('name'), $request->input('text')));

	return Response::json(['message' => 'Done'],200);
});


