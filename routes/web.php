<?php

use App\Models\User;

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','welcome');

//Route::get('contact','App\Http\Controllers\SiteController@contact');
Route::get('contact',[SiteController::class,'contact']);

// Route::get('user/{id}',function($id){
//     return 'User' . $id;
// });

Route::prefix('demo')->group(function(){
    Route::get('hello',function(){
        return 'Hello';
    });
    Route::get('world',function(){
        return 'World';
    });
});

Route::get('user/{user}', function(User $user){
    dd($user);
});

Route::get('redir',function(){
    return redirect(url('demo/hello'));
});
