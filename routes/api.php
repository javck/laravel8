<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\Http\Controllers\Api')->group(function(){
    Route::post('tasks','TaskController@store');

    //關聯範例路由
    Route::get('tasks/showCgy/{id}','TaskController@showCgy');
    Route::get('cgies/showTasks/{id}','CgyController@showTasks');
    Route::get('users/showTasks/{id}','UserController@showTasks');
});


