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

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list', 'MusicController@getList')->name('list');

Route::get('/song/{sid}', 'MusicController@getDetail')->name('detail');
