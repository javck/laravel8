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

Route::get('array',function(){
    //$box = array('玩具','衣服','文具','雜物');
    $box = ['玩具','衣服','文具','雜物'];
    //dd($box);

    //dd(count($box));

    //dd($box[1]);

    $box[1] = '手機';
    //dd($box[1]);

    //unset($box[1]);
    //dd($box[1]);
    //dd(count($box));

    // unset($box);
    // dd(count($box));

});

Route::get('array2',function(){
    $box = ['玩具',['襪子','鞋子'],'文具','雜物'];

    dd($box[1][0]);
});

Route::get('array3',function(){
    // $hero = ['Zack', 100 , 300 ];
    // $hp = $hero[1];
    $hero = [ 'name' => 'Zack' , 'hp' => 100 , 'mp' => 300];
    dd($hero['hp']);
});
