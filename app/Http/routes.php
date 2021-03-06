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

Route::auth();

Route::get('/home', 'HomeController@index');

/* USERS */
Route::get('users/{id}/view', ['uses' => 'UserController@index', 'as' => 'user.view']);
Route::get('users/{id}/edit', ['uses' => 'UserController@edit', 'as' => 'user.edit']);
Route::post('users/{id}/update', ['uses' => 'UserController@update', 'as' => 'user.update']);