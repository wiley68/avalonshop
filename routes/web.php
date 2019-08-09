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
/** start support section */
Route::match(['get', 'post'], '/support/posts/{id}.html', 'SupportController@supportall')->name('support.posts');
Route::get('/support/software/{id}.html', 'SupportController@supportsoftware')->name('support.software');
/** end support section */
/** start products section */
Route::match(['get', 'post'], '/products.html', 'ProductController@viewProducts')->name('products');
Route::get('/products/product{id}.html', 'ProductController@viewProduct')->name('product');
Route::post('/product/set-session.html', 'ProductController@setSession')->name('product.set-session');
Route::get('/cart.html', 'HelpController@cart')->name('cart');
/** end products section */
/** start help section */
Route::post('/send-contact-us.html', 'HelpController@submit_contactus')->name('send-contact-us');
Route::post('/send-contact-form.html', 'HelpController@submit_contactform')->name('send-contact-form');
/** end help section */
/** start sitemap */
Route::get('/sitemap.xml', function(){
   return Response::view('sitemap')->header('Content-Type', 'application/xml');
});
/** end sitemap */
/** start news */
Route::get('/news/all.html', 'NewsController@all')->name('news.all');
Route::get('/news/post{id}.html', 'NewsController@post')->name('news.post');
/** end news */
/** start faq */
Route::get('/faq.html', 'FaqController@all')->name('faqs.all');
/** end faq */
/** start users routes */
// Users routes
Route::get('/login-register.html', 'UsersController@loginRegisterUsers')->name('login-register');
Route::post('/user-register.html', 'UsersController@registerUser')->name('user-register');
Route::post('/user-login.html', 'UsersController@loginUser')->name('user-login');
Route::post('/news-subscribe.html', 'UsersController@newsSuscribe')->name('news-subscribe');
/** end users routes */
/** start fronend */
Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::get('/home.html', 'UsersController@dashboard')->name('home');
        Route::get('/logout.html', 'UsersController@logoutUser')->name('logout-user');
        Route::match(['get', 'post'], '/change-password.html', 'UsersController@changePassword')->name('change-password');
        Route::match(['get', 'post'], '/change-data.html', 'UsersController@changeData')->name('change-data');
        Route::match(['get', 'post'], '/show-orders.html', 'UsersController@showOrders')->name('show-orders');
        Route::match(['get', 'post'], '/show-reviews.html', 'UsersController@showReviews')->name('show-reviews');
        Route::get('/show-favorites.html', 'UsersController@showFavorites')->name('show-favorites');
        Route::match(['get', 'post'], '/edit-news.html', 'UsersController@editNews')->name('edit-news');
        Route::match(['get', 'post'], '/person-settings.html', 'UsersController@personSettings')->name('person-settings');
        Route::post('/add-favorite.html', 'FavoriteController@addFavorite')->name('add-favorite');
        Route::post('/del-favorite.html', 'FavoriteController@delFavorite')->name('del-favorite');
        Route::post('/add-review.html', 'ReviewController@addReview')->name('add-review');
    }
);
/** stop frontend */

Auth::routes();
