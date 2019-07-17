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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/za-nas', 'IndexController@forUs')->name('for_us');
Route::get('/kontakt', 'IndexController@contact')->name('contact');
Route::get('/magazin', 'IndexController@shop')->name('shop');
Route::get('/serviz', 'IndexController@service')->name('service');
