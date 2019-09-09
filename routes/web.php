<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');



Route::resource('projects', 'ProjectController');
//Route::resource('projects', 'ProjectController');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
/*
//show all projects
Route::get('/projects','ProjectController@index');
//show one project
Route::get('/projects/{project}','ProjectController@show');
//create new project
Route::get('/projects/create','ProjectController@create');
Route::post('/projects', 'ProjectController@store');
//update project
Route::get('/projects/{project}/edit','ProjectController@edit');
Route::patch('/projects/{project}', 'ProjectController@update');
//delete project
Route::delete('/projects/{project}', 'ProjectController@destroy');
 */
