<?php use App\Category; ?>
<?php use App\Product; ?>
<?php use App\Software; ?>
<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->
@php
$cart_item_quantity = 0;
$cart_total_price = 0.00;
if (!empty((Session::get('cart_session'))['items'])){
    foreach ((Session::get('cart_session'))['items'] as $cart_item) {
        $cart_item_quantity += intval($cart_item['product_quantity']);
        $cart_total_price += floatval($cart_item['total_price']);
    }
}
@endphp
<div class="wide_layout">
    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
    <header id="header" class="type_5">
        <!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->
        <div class="bottom_part">
            <div class="container">
                <div class="row">
                    <div class="main_header_row">
                        <div class="col-sm-3">
                            <!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->
                            <a href="{{ route('index') }}" class="logo">
                                <img src="/images/logo.png" alt="avalon logo"
                                    title="Проектиране и инсталиране на софтуер. Продажба на компютърна техника.">
                            </a>
                            <!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->
                        </div>
                        <!--/ [col]-->
                        <div class="col-lg-6 col-md-5 col-sm-5">
                            <!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->
                            <div class="call_us">
                                <span>За контакт:</span> <b>0619 / 22218</b>
                            </div>
                            <!--/ .call_us-->
                            <!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->
                            <!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->
                            <form class="clearfix search" enctype="multipart/form-data" name="search_form"
                                id="search_form" method="POST" action="{{ route('products') }}">
                                <input type="text" name="search_text" tabindex="1" placeholder="Търси..."
                                    class="alignleft">
                                @csrf
                                <button class="button_blue def_icon_btn alignleft" type="submit"></button>
                            </form>
                            <!--/ #search-->

                            <!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->
                        </div>
                        <!--/ [col]-->
                        <div class="col-lg-3 col-sm-4">
                            <div class="clearfix">
                                <!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->
                                <div class="alignright site_settings">
                                    <span><img src="/images/flag_bg.png" alt="Български език">Български</span>
                                    <!--
											<ul class="dropdown site_setting_list language">
												<li class="animated_item"><a href="#"><img src="/images/flag_en.jpg" alt=""> English</a></li>
												<li class="animated_item"><a href="#"><img src="/images/flag_g.jpg" alt=""> German</a></li>
												<li class="animated_item"><a href="#"><img src="/images/flag_s.jpg" alt=""> Spanish</a></li>
                                            </ul>
                                            -->
                                </div>
                                <!--/ .alignright.site_settings-->
                                <!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->
                                <div class="alignright site_settings currency">
                                    <span>лв.</span>
                                    <!--
											<ul class="dropdown site_setting_list">
												<li class="animated_item"><a href="#">USD</a></li>
												<li class="animated_item"><a href="#">EUR</a></li>
												<li class="animated_item"><a href="#">GBP</a></li>
                                            </ul>
                                            -->
                                </div>
                                <!--/ .alignright.site_settings.currency-->
                                <!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->
                            </div>
                            <!--/ .clearfix-->
                            <!-- - - - - - - - - - - - - - Loginbox & Wishlist & Compare - - - - - - - - - - - - - - - - -->
                            <ul class="account_bar">
                                <!--
										<li>
											<a href="#" class="wishlist_button" data-amount="7"></a>
										</li>
										<li>
											<a href="#" class="compare_button" data-amount="3"></a>
                                        </li>
                                        -->
                                <li>
                                    @guest
                                    <div class="login_box">
                                        <div class="login_box_inner">Потребител&nbsp;:&nbsp;<a
                                                href="{{ route('login-register') }}">Вход | Регистрация</a></div>
                                    </div>
                                    @else
                                    <div class="login_box">
                                        <div class="login_box_inner"><a href="{{ route('home') }}"
                                                title="Преглед на профила.">{{ Auth::user()->name }}</a>&nbsp;:&nbsp;<a
                                                href="{{ route('logout-user') }}">Изход</a></div>
                                    </div>
                                    @endguest
                                </li>
                            </ul>
                            <!--/ .account_bar-->
                            <!-- - - - - - - - - - - - - - End Loginbox & Wishlist & Compare - - - - - - - - - - - - - - - - -->
                        </div>
                        <!--/ [col]-->
                    </div>
                    <!--/ .main_header_row-->
                </div>
                <!--/ .row-->
            </div>
            <!--/ .container-->
        </div>
        <!--/ .bottom_part -->
        <!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->
        <!-- - - - - - - - - - - - - - Main navigation wrapper - - - - - - - - - - - - - - - - -->
        <div id="main_navigation_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- - - - - - - - - - - - - - Sticky container - - - - - - - - - - - - - - - - -->
                        <div class="sticky_inner type_2">
                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->
                            <div class="nav_item size_3">
                                <button class="open_categories_sticky">Продукти</button>
                                <!-- - - - - - - - - - - - - - Main navigation - - - - - - - - - - - - - - - - -->
                                <ul class="theme_menu cats dropdown">
                                    @foreach ($root_categories as $category)
                                    <li class="has_megamenu animated_item">
                                        @php
                                        $category_ids = [];
                                        $category_ids[] = $category->id;
                                        @endphp
                                        <a
                                            href="{{ route('products', ['category_id'=>$category_ids]) }}">{{ $category->name }}</a>
                                        <div class="mega_menu clearfix">
                                            <div class="mega_menu_item">
                                                <ul class="list_of_links">
                                                    @php
                                                    $categories = Category::where(['parent_id' =>
                                                    $category->id])->get();
                                                    @endphp
                                                    @foreach ($categories as $item)
                                                    @php
                                                    $item_ids = [];
                                                    $item_ids[] = $item->id;
                                                    @endphp
                                                    <li><a
                                                            href="{{ route('products', ['category_id'=>$item_ids]) }}">{{ $item->name }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!--/ .mega_menu_item-->
                                        </div>
                                        <!--/ .mega_menu-->
                                    </li>
                                    @endforeach

                                    <li class="has_megamenu animated_item"><a href="{{ route('products') }}"
                                            class="all"><b>Всички продукти</b></a></li>
                                </ul>
                                <!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->
                            </div>
                            <!--/ .nav_item-->
                            <!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->
                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->
                            <div class="nav_item">
                                <nav class="main_navigation">
                                    <ul>
                                        <li><a href="{{ route('index') }}">Начало</a></li>
                                        @auth
                                        @if ($cart_item_quantity > 0)
                                            <li><a href="{{ route('cart') }}">Кошница</a></li>
                                        @else
                                            <li><a href="{{ route('home') }}">Профил</a></li>
                                        @endif
                                        @else
                                        @if ($cart_item_quantity > 0)
                                            <li><a href="{{ route('cart') }}">Кошница</a></li>
                                        @else
                                            <li><a href="{{ route('login-register') }}">Профил</a></li>
                                        @endif
                                        @endauth
                                        <li class="has_submenu">
                                            <a>Софтуер</a>
                                            <ul class="theme_menu submenu">
                                                <!--<li class="current" >-->
                                                <li class="has_submenu">
                                                    <a>Десктоп софтуер</a>
                                                    <ul class="theme_menu submenu">
                                                        <!--<li class="current" >-->
                                                        @foreach (Software::all() as $soft)
                                                        <li>
                                                            <a href="{{ route('desktop.software', ['code' => $soft->code]) }}">{{ $soft->name }}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="has_submenu">
                                                    <a>WEB Модули</a>
                                                    <ul class="theme_menu submenu">
                                                        <!--<li class="current" >-->
                                                        <li>
                                                            <a href="{{ route('web.cc_woocommerce') }}">Кредитен
                                                                Калкулатор WooCommerce</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('web.cc_opencart') }}">Кредитен Калкулатор
                                                                OpenCart</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('web.cc_magento') }}">Кредитен Калкулатор
                                                                Magento</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('web.cc_prestashop') }}">Кредитен
                                                                Калкулатор PrestaShop</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has_submenu">
                                                    <a>WEB Софтуер</a>
                                                    <ul class="theme_menu submenu">
                                                        <!--<li class="current" >-->
                                                        <li>
                                                            <a href="{{ route('web-soft.maxtrade_store') }}">Maxtrade
                                                                Store</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('web-soft.maxtrade_storeerp') }}">Maxtrade
                                                                StoreERP</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('web-soft.maxtrade_ins') }}">Maxtrade
                                                                INS</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('web-soft.avamb') }}">AVAMB</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has_submenu">
                                                    <a>WEB Услуги</a>
                                                    <ul class="theme_menu submenu">
                                                        <!--<li class="current" >-->
                                                        <li>
                                                            <a href="{{ route('web-service.website') }}">Стандартен WEB
                                                                Сайт</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('web-service.onlineshop') }}">Онлайн
                                                                Магазин</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('web-service.webservice') }}">WEB
                                                                Услуги</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has_submenu">
                                                    <a>Мобилен Софтуер</a>
                                                    <ul class="theme_menu submenu">
                                                        <!--<li class="current" >-->
                                                        <li>
                                                            <a href="{{ route('mobile.avambmobile') }}">AVAMB Mobile</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has_submenu">
                                                    <a>Софтуер за Индустрията</a>
                                                    <ul class="theme_menu submenu">
                                                        <!--<li class="current" >-->
                                                        <li>
                                                            <a href="{{ route('industry.ikunk') }}">Maxtrade IKUNK</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('industry.kantar') }}">Maxtrade KNTR</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has_submenu">
                                            <a href="{{ route('support.posts', ['id'=>'all']) }}">Поддръжка</a>
                                            <ul class="theme_menu submenu">
                                                <!--<li class="current" >-->
                                                <li>
                                                    <a href="{{ route('support.posts', ['id'=>'gamings']) }}">Игрални
                                                        компютри</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('support.posts', ['id'=>'offices']) }}">Офис
                                                        компютри</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('support.posts', ['id'=>'printers']) }}">Принтери
                                                        и Копири</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('support.posts', ['id'=>'instalations']) }}">Инсталация
                                                        и настройки</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('support.posts', ['id'=>'networks']) }}">Локални
                                                        Мрежи</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('support.posts', ['id'=>'cameras']) }}">Камери и
                                                        Охрана</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('support.posts', ['id'=>'softwares']) }}">Софтуер</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('for_us') }}">За нас</a></li>
                                        <li><a href="{{ route('contact') }}">За контакт</a></li>
                                        <li class="has_submenu">
                                            <a href="{{ route('index') }}">Авалон</a>
                                            <!-- - - - - - - - - - - - - - Submenu (level 2) - - - - - - - - - - - - - - - - -->
                                            <ul class="theme_menu submenu">
                                                <!--<li class="current" >-->
                                                <li>
                                                    <a href="{{ route('avalon.shop') }}">Магазин Горна Оряховица</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('avalon.service') }}">Компютърен сервиз</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('avalon.service-printeri') }}">Сервиз принтери</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('avalon.mrezi') }}">Компютърни мрежи</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('news.all') }}">Новини</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('klienti') }}">Клиентите за нас</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('faqs.all') }}">Често задавани въпроси</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('avalon.sitemap') }}">Карта на сайта</a>
                                                </li>
                                            </ul>
                                            <!-- - - - - - - - - - - - - - End submenu (level 2) - - - - - - - - - - - - - - - - -->
                                        </li>
                                    </ul>
                                </nav>
                                <!--/ .main_navigation-->
                            </div>
                            <!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->
                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->
                            <div class="nav_item size_3">
                                <button id="open_shopping_cart" class="open_button"
                                    data-amount="{{ $cart_item_quantity }}">
                                    <b class="title">Кошница</b>
                                    <b class="total_price">{{ number_format($cart_total_price, 2, ".", "") }}</b>
                                </button>
                                <!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->
                                <div class="shopping_cart dropdown">
                                    @if (!empty((Session::get('cart_session'))['items']))
                                    <div class="animated_item">
                                        <p class="title">Последно добавени продукти</p>
                                    </div>
                                    @foreach ((Session::get('cart_session'))['items'] as $cart_item)
                                    @php
                                        $product_cart = Product::where(['id' => $cart_item['product_id']])->first();
                                        $imgsrc1 = $product_cart->imgurl1;
                                    @endphp
                                    <div class="animated_item">
                                        <div class="clearfix sc_product">
                                            <a href="{{ route('product', ['id' => $cart_item['product_code']]) }}" class="product_thumb">
                                                @if (!empty($imgsrc1))
                                                    <img style="max-width:80px;" src="{{ $imgsrc1 }}" style="max-width:200px;" alt="{{ $cart_item['product_name'] }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                @else
                                                    <img style="max-width:80px;" src="{{ Config::get('settings.backend') }}/dist/img/noimage.png" style="max-width:200px;" alt="{{ $cart_item['product_name'] }}">
                                                @endif
                                            </a>
                                            <a href="{{ route('product', ['id' => $cart_item['product_code']]) }}" class="product_name">{{ $cart_item['product_name'] }}</a>
                                            <p>{{ $cart_item['product_quantity'] }} x {{ number_format(floatval($cart_item['total_price']) / floatval($cart_item['product_quantity']), 2, ".", "") }}&nbsp;лв.</p>
                                            <a href="{{ route('cart-remove-product', ['id' => $cart_item['product_id']]) }}" class="close"></a>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!--/ .animated_item-->
                                    <div class="animated_item">
                                        <!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->
                                        <ul class="total_info">
                                            <li class="total"><b><span class="price">Общо:</span> {{ number_format($cart_total_price, 2, ".", "") }}&nbsp;лв.</b></li>
                                        </ul>
                                        <!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/ .animated_item-->
                                    <div class="animated_item">
                                        <a href="{{ route('cart') }}" class="button_grey">Виж кошницата</a>
                                        <a href="{{ route('checkout') }}" class="button_blue">Купи</a>
                                    </div>
                                    <!--/ .animated_item-->
                                    @else
                                    <div class="animated_item">
                                        <!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->
                                        <ul class="total_info">
                                            <li class="total"><b><span class="price">Общо:</span> 0.00&nbsp;лв.</b></li>
                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->
                                    </div>
                                    @endif
                                </div>
                                <!--/ .shopping_cart.dropdown-->
                                <!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->
                            </div>
                            <!--/ .nav_item-->
                            <!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->
                        </div>
                        <!--/ .sticky_inner -->
                        <!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->
                    </div>
                    <!--/ [col]-->
                </div>
                <!--/ .row-->
            </div>
            <!--/ .container-->
        </div>
        <!--/ .main_navigation_wrap-->
        <!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->
        @if (!empty($errors) && $errors->any())
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert_box error">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button class="close"></button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </header>

    <!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->
