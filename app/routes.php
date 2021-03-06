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

#seccion Projects

Route::resource('projects','ProjectsController');
Route::post('projects/search', 'ProjectsController@search');

#seccion Activities

Route::resource('activities','ActivitiesController');
Route::post('activities/actividad','ActivitiesController@actividad');
