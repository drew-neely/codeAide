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

Route::get('/', 'HomeController@welcome');

Route::auth();

Route::get('home', 'HomeController@index');

Route::get('submissions/{projectId}', 'submissionsController@index');

Route::get('account', 'accountsController@index');

Route::get('indivproject/{projectId}', 'ProjectController@index');

Route::get('createproject', 'ProjectController@createProject');

Route::get('pagenotfound', function() {
	return view('pageNotFound');
});

Route::get('bulletin', 'ProjectController@bulletin');

Route::post('submissions/{projectId}/submit', 'submissionsController@submit');

Route::post('createproject/submit', 'ProjectController@addProject');