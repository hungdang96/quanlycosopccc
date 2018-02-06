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

Route::get('/taikhoan/taomoi', function(){

});

Route::get('/taikhoan/capnhat', function(){

});

Route::get('/taikhoan/forgot', function(){

});

Route::get('/coso/themmoi', function(){

});

Route::get('/coso/suathongtin', function(){

});

Route::get('/diagioi/themkhuvuc', function(){

});

Route::get('/diagioi/suakhuvuc', function(){

});