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

Route::get('grid', array('uses' => 'GridElementController@getMain'));
Route::get('new',array('uses' => 'GridElementController@newElement'));
Route::post('save',array('uses' => 'GridElementController@saveNewElement'));