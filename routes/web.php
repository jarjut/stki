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

Route::get('/', 'MainController@index');
Route::post('check', 'MainController@check')->name('check');
Route::get('inputdata', 'MainController@showInputData')->name('inputdata');
Route::post('inputdata', 'MainController@InputData');

Route::get('test', function(){
    return view('hasil');
});
