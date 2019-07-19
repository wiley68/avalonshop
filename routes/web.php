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
Route::get('/za-nas.html', 'IndexController@forUs')->name('for_us');
Route::get('/kontakt.html', 'IndexController@contact')->name('contact');
Route::get('/magazin.html', 'IndexController@shop')->name('shop');
Route::get('/serviz.html', 'IndexController@service')->name('service');
Route::get('/serviz-printeri.html', 'IndexController@service_printeri')->name('service-printeri');
Route::get('/komputarni-mrezi.html', 'IndexController@mrezi')->name('mrezi');
Route::get('/web-proekti.html', 'IndexController@web')->name('web');
Route::get('/novini.html', 'IndexController@news')->name('news');
Route::get('/karta.html', 'IndexController@sitemap')->name('sitemap');
Route::get('/obshti-uslovia.html', 'IndexController@terms')->name('terms');
Route::get('/gdpr.html', 'IndexController@gdpr')->name('gdpr');
