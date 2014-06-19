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

// Home page of the application
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

// Route to static pages
// The pages can have slugs as per the regex below. Feel free to change the regex as per your need.
Route::get('/page/{page}', ['as' => 'page', 'uses' => 'PagesController@show'])->where(['page' => '[a-zA-Z0-9-_.]+']);
