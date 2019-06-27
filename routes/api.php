<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->get('/tasks', 'TasksController@index');
Route::middleware('api')->post('/tasks', 'TasksController@store');
Route::middleware('api')->post('/tasks/{task}', 'TasksController@update');
