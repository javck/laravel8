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

Route::namespace('App\Http\Controllers\Api')->prefix('auth')->group(function(){
    Route::get('/', 'AuthController@me')->name('me');
    Route::post('/login','AuthController@login')->name('login');
    Route::post('/logout','AuthController@logout')->name('logout');
});

Route::middleware('auth:api')->group(function(){
    Route::apiResource('tasks','App\Http\Controllers\Api\TaskController');
});

