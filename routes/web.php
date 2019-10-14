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
Route::get('/maintanence.html', 'IndexController@maintanence')->name('maintanence');

Route::get('/', 'IndexController@index')->name('index');
Route::get('/za-nas.html', 'IndexController@forUs')->name('for_us');
Route::get('/kontakt.html', 'IndexController@contact')->name('contact');
Route::get('/credit-info.html', 'IndexController@creditInfo')->name('credit-info');
Route::get('/proizvoditeli.html', 'IndexController@proizvoditeli')->name('proizvoditeli');
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
Route::get('/klienti.html', 'IndexController@klienti')->name('klienti');
Route::get('/klient-{id}.html', 'IndexController@klient')->name('klient');
Route::match(['get', 'post'], '/vrashtane.html', 'IndexController@vrashtane')->name('vrashtane');
/** end footer menu */
/** start index web section */
Route::get('/software/{code}.html', 'IndexController@software')->name('software');
/** end index web section */
/** start support section */
Route::match(['get', 'post'], '/support/posts/{id}.html', 'SupportController@supportall')->name('support.posts');
Route::get('/support/software/{id}.html', 'SupportController@supportsoftware')->name('support.software');
/** end support section */
/** start products section */
Route::match(['get', 'post'], '/products.html', 'ProductController@viewProducts')->name('products');
Route::get('/products/{id}.html', 'ProductController@viewProduct')->name('product');
Route::post('/product/add-to-cart.html', 'ProductController@addToCart')->name('product.add-to-cart');
Route::post('/product/change-credit-vnoska.html', 'ProductController@changeCreditVnoskaAjax')->name('product.change-credit-vnoska');
Route::post('/product/change-cart-quantity.html', 'ProductController@changeCartQuantity')->name('product.change-cart-quantity');
Route::post('/add-download.html', 'HelpController@addDownload')->name('add-download');
Route::get('/cart.html', 'HelpController@cart')->name('cart');
Route::get('/cart-remove-product-{id}.html', 'HelpController@cartRemoveProduct')->name('cart-remove-product');
Route::get('/cart-clear.html', 'HelpController@cartClear')->name('cart-clear');
Route::match(['get', 'post'], '/checkout.html', 'HelpController@checkout')->name('checkout');
Route::get('/checkout-result-{id}.html', 'HelpController@checkoutResult')->name('checkout-result');
/** end products section */
/** start help section */
Route::post('/send-contact-us.html', 'HelpController@submit_contactus')->name('send-contact-us');
Route::post('/send-contact-form.html', 'HelpController@submit_contactform')->name('send-contact-form');
/** end help section */
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
Route::post('/user-checkout-login.html', 'UsersController@loginCheckoutUser')->name('user-checkout-login');
Route::post('/news-subscribe.html', 'UsersController@newsSuscribe')->name('news-subscribe');
/** end users routes */
/** start credit routes */
Route::match(['get', 'post'], '/credit/product.html', 'CreditController@index')->name('credit');
Route::match(['get', 'post'], '/credit/danni.html', 'CreditController@danni')->name('credit-danni');
Route::match(['get', 'post'], '/credit/ok.html', 'CreditController@ok')->name('credit-ok');
Route::get('/credit/yes.html', 'CreditController@yes')->name('credit-yes');
Route::get('/credit/no.html', 'CreditController@no')->name('credit-no');
/** end credit routes */
/** start fronend */
Route::group(
    ['middleware' => ['auth','verified']],
    function () {
        Route::get('/home.html', 'UsersController@dashboard')->name('home');
        Route::get('/logout.html', 'UsersController@logoutUser')->name('logout-user');
        Route::match(['get', 'post'], '/change-password.html', 'UsersController@changePassword')->name('change-password');
        Route::match(['get', 'post'], '/change-data.html', 'UsersController@changeData')->name('change-data');
        Route::match(['get', 'post'], '/show-orders.html', 'OrderController@showOrders')->name('show-orders');
        Route::get('/show-order-{id}.html', 'OrderController@showOrder')->name('show-order');
        Route::post('/del-order.html', 'OrderController@delOrder')->name('del-order');
        Route::match(['get', 'post'], '/show-reviews.html', 'UsersController@showReviews')->name('show-reviews');
        Route::get('/show-favorites.html', 'UsersController@showFavorites')->name('show-favorites');
        Route::match(['get', 'post'], '/edit-news.html', 'UsersController@editNews')->name('edit-news');
        Route::match(['get', 'post'], '/person-settings.html', 'UsersController@personSettings')->name('person-settings');
        Route::post('/add-favorite.html', 'FavoriteController@addFavorite')->name('add-favorite');
        Route::post('/del-favorite.html', 'FavoriteController@delFavorite')->name('del-favorite');
        Route::post('/add-review.html', 'ReviewController@addReview')->name('add-review');
        Route::post('/add-review-support.html', 'ReviewSupportController@addReview')->name('add-review-support');
    }
);
/** stop frontend */

Auth::routes(['verify' => true]);

Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap');
Route::get('/sitemap/products', 'SitemapController@products')->name('sitemap-products');
Route::get('/sitemap/manufacturers', 'SitemapController@manufacturers')->name('sitemap-manufacturers');
Route::get('/sitemap/tags', 'SitemapController@tags')->name('sitemap-tags');
Route::get('/sitemap/categories', 'SitemapController@categories')->name('sitemap-categories');
Route::get('/sitemap/supports', 'SitemapController@supports')->name('sitemap-supports');
Route::get('/sitemap/news', 'SitemapController@news')->name('sitemap-news');
Route::get('/sitemap/main', 'SitemapController@main')->name('sitemap-main');
