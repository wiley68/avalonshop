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
/** start top menus */
Route::get('/', 'IndexController@index')->name('index');
Route::get('/za-nas.html', 'IndexController@forUs')->name('for_us');
Route::get('/kontakt.html', 'IndexController@contact')->name('contact');
/** end top menus */
/** start menu Avalon */ 
Route::get('/avalon/magazin.html', 'IndexController@shop')->name('avalon.shop');
Route::get('/avalon/serviz.html', 'IndexController@service')->name('avalon.service');
Route::get('/avalon/serviz-printeri.html', 'IndexController@service_printeri')->name('avalon.service-printeri');
Route::get('/avalon.komputarni-mrezi.html', 'IndexController@mrezi')->name('avalon.mrezi');
Route::get('/avalon/web-proekti.html', 'IndexController@web')->name('avalon.web');
Route::get('/avalon/novini.html', 'IndexController@news')->name('avalon.news');
Route::get('/avalon/karta.html', 'IndexController@sitemap')->name('avalon.sitemap');
/** stop menu Avalon */ 
/** start footer menu */
Route::get('/obshti-uslovia.html', 'IndexController@terms')->name('terms');
Route::get('/gdpr.html', 'IndexController@gdpr')->name('gdpr');
Route::get('/politika.html', 'IndexController@politika')->name('politika');
Route::get('/dostavka.html', 'IndexController@dostavka')->name('dostavka');
Route::get('/vrashtane.html', 'IndexController@vrashtane')->name('vrashtane');
/** end footer menu */
/** start index web section */
Route::get('/desktop/maxtrade_change.html', 'IndexController@maxtrade_change')->name('desktop.maxtrade_change');
Route::get('/desktop/maxtrade_cmr.html', 'IndexController@maxtrade_cmr')->name('desktop.maxtrade_cmr');
Route::get('/desktop/maxtrade_ctm.html', 'IndexController@maxtrade_ctm')->name('desktop.maxtrade_ctm');
Route::get('/desktop/maxtrade_lab.html', 'IndexController@maxtrade_lab')->name('desktop.maxtrade_lab');
Route::get('/desktop/maxtrade_slr.html', 'IndexController@maxtrade_slr')->name('desktop.maxtrade_slr');
Route::get('/desktop/maxtrade_smdc.html', 'IndexController@maxtrade_smdc')->name('desktop.maxtrade_smdc');
Route::get('/web/cc_woocommerce.html', 'IndexController@cc_woocommerce')->name('web.cc_woocommerce');
Route::get('/web/cc_opencart.html', 'IndexController@cc_opencart')->name('web.cc_opencart');
Route::get('/web/cc_magento.html', 'IndexController@cc_magento')->name('web.cc_magento');
Route::get('/web/cc_prestashop.html', 'IndexController@cc_prestashop')->name('web.cc_prestashop');
Route::get('/web-soft/maxtrade_store.html', 'IndexController@maxtrade_store')->name('web-soft.maxtrade_store');
Route::get('/web-soft/maxtrade_storeerp.html', 'IndexController@maxtrade_storeerp')->name('web-soft.maxtrade_storeerp');
Route::get('/web-soft/maxtrade_ins.html', 'IndexController@maxtrade_ins')->name('web-soft.maxtrade_ins');
Route::get('/web-soft/avamb.html', 'IndexController@avamb')->name('web-soft.avamb');
Route::get('/web-service/website.html', 'IndexController@website')->name('web-service.website');
Route::get('/web-service/onlineshop.html', 'IndexController@onlineshop')->name('web-service.onlineshop');
Route::get('/web-service/webservice.html', 'IndexController@webservice')->name('web-service.webservice');
Route::get('/mobile/avambmobile.html', 'IndexController@avambmobile')->name('mobile.avambmobile');
Route::get('/industry/ikunk.html', 'IndexController@ikunk')->name('industry.ikunk');
Route::get('/industry/kantar.html', 'IndexController@kantar')->name('industry.kantar');
/** end index web section */
