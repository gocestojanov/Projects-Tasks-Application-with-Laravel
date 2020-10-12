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

use App\Notifications\SubscriptionRenewalFailed;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\ProjectController;

Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/','PagesController@home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('projects', 'ProjectController');

Route::get('tags', [ProjectController::class, 'getTags']);
Route::get('projecttags/{project}', [ProjectController::class, 'getProjectTags']);




Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::delete('/tasks/{task}', 'ProjectTasksController@delete');

Route::get('profile', 'ProfileController@show');
Route::get('profile/edit', 'ProfileController@edit');
Route::patch('profile', 'ProfileController@update');



Auth::routes();




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

// Route::get('/home', function (Request $request) {

//     $user = App\User::first();

//     $user->notify(new SubscriptionRenewalFailed);

//     session(['name' => 'John Doe']);

    //return session('name');

    //return $request->session()->get('foobar');

    // $request->flash();

    // session('foobar', 'default');

//     return "Goce";
// });

