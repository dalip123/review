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

Route::get('/', function () {
    return view('welcome');
});
Route::get('deploy','ServerController@deploy');
Route::get('social/login/redirect/{path}', ['uses' => 'Auth\AuthController@redirectToProvider', 'as' => 'social.login']);
Route::get('social/login/{path}', 'Auth\AuthController@handleProviderCallback');
Route::get('index',[
    'uses'=>'Auth\AuthController@index',
    'as'=>'index'
	]);

Route::post('index',[
	'uses'=>'ServerController@submitReview',
	'as'=>'submitReview'
	]);