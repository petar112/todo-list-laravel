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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', 'ToDoListController@getTasks');

Route::post('/tasks/add', 'ToDoListController@insert');

Route::delete('/tasks/delete', 'ToDoListController@delete');

Route::put('/tasks/update', 'ToDoListController@update');