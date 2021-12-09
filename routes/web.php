<?php

use App\Models\Cgy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/cancheck',function(){
    //先確認是否有登入
    if(Auth::check()){
        $user = Auth::user();
        $cgy = Cgy::first();
        //確認是否具有該權限
        if($user->can('browse',$cgy)){
            return '可以存取';
        }else{
            return '權限不足';
        }
    }else{
        return '尚未登入';
    }
});

Route::get('/sources',function(){
    $sources = json_decode(setting('constant.sources'),true);
    return $sources;
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
