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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/projects','ProjectController@index');
Route::post('/projects','ProjectController@store');
Route::get('/projects/create','ProjectController@create');
Route::get('/projects/{profile}','ProjectController@show');
Route::get('/projects/{profile}/edit', 'ProjectController@edit');
Route::patch('projects/{profile}','ProjectController@update');
Route::delete('projects/{profile}','ProjectController@destroy');
Route::post('/projects','ProjectController@ratin');

Route::post('/projects/{profile}/tasks','ProjectTasksController@store');
Route::post('/completed-tasks/{task}','CompletedTasksController@store');
Route::delete('/completed-tasks/{task}','CompletedTasksController@destory');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
