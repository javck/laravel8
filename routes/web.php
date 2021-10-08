<?php

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

//條件判斷式示範區=====================
Route::get('if',function(){
    $age = 16;

    if( $age > 18){
        dd('你可以開車囉!');
    }
});

Route::get('/else',function(){
    $name = 'Edgar';

    if( $name == 'Simon'){
        dd('我認識你');
    }else{
        dd('你是誰');
    }
});

Route::get('/elseif',function(){
    $name = 'Mary';

    if ($name == 'Simon') {
        dd('我認識你');
    }elseif($name == 'Mary'){
        dd('我聽過你');
    }else{
        dd('你是誰');
    }
});

Route::get('/switch',function(){
    $myNum = 3;
    switch( $myNum){
        case 1:
            dd(1);
            break;
        case 2:
            dd(2);
            break;
        default:
            dd('以上皆非');
    }
});

Route::get('/switch2',function(){
    $myNum = 2;
    switch( $myNum){
        case 1:
        case 2:
            dd('1或2');
            break;
        default:
            dd('以上皆非');
    }
});
//==========================================

