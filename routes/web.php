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


Route::get('/for',function(){
    $result = '';

    for($i = 0 ; $i < 10 ; $i++){
        $result = $result . $i;
    }

    dd($result);
});

Route::get('/for2',function(){
    $result = '';

    for($i = 0 ; $i < 10 ; $i = $i + 5){
        $result = $result . $i;
    }

    dd($result);
});

Route::get('/while',function(){
    $result = '';
    $i = 1;

    while( $i < 10){
        $result = $result . $i;
        $i += 1;
    }

    dd($result);
});

Route::get('/foreach',function(){
    $result = '';
    $array = ['玩具','衣服','文具','雜物'];

    $i = 0;
    foreach( $array as $item ){
        $result = $result . $item;
        if($i != count($array) - 1){
            $result = $result . ',';
        }
        $i = $i + 1;
    }

    dd($result);
});

Route::get('/foreach2',function(){
    $result = '';
    $array = ['name' => 'zack','hp' => 100,'mp' => 300];

    foreach( $array as $key => $value ){
        $result = $result . $key . '的值為' . $value . ' ';
    }

    dd($result);
});




