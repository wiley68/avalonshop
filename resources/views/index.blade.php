<?php use App\ProductsCategories; ?>
<?php use App\Product; ?>
<?php use App\Review; ?>
@extends('layouts.design')
@section('content')
@if (!empty($message))
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="alert_box success">
                {!! $message !!}
                <button class="close"></button>
            </div>
        </div>
    </div>
</div>
@endif
			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
			<div class="page_wrapper">
				<div class="container">
					<div class="section_offset">
						<div class="row">
							<!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->
							<div class="col-sm-9">

								<!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->
								<div class="revolution_slider">
									<div class="rev_slider">
										<ul>
											<!-- - - - - - - - - - - - - - Slide 1 - - - - - - - - - - - - - - - - -->
											<li data-transition="papercut" data-slotamount="7" class="align_center">
												<img src="/images/slide_comp.jpg" alt="Авалон магазин компютри">
												<div class="caption sfl stl layer_1" data-x="center" data-y="77" data-easing="easeOutBack" data-speed="600" data-start="900">Компютърни компоненти</div>
												<div class="caption sfl stl layer_2" data-x="center" data-y="135" data-easing="easeOutBack" data-speed="600" data-start="1050">Добри цени<br><small> на отлично</small> Качество <small>и безпроблемна</small> Гаранция!</div>
												<div class="caption sfb stb" data-x="center" data-y="260" data-easing="easeOutBack" data-speed="700" data-start="1150">
													<a href="{{ route('products') }}" class="button_blue big_btn">Разгледайте нашия магазин!</a>
												</div>
											</li>
											<!-- - - - - - - - - - - - - - End of Slide 1 - - - - - - - - - - - - - - - - -->
											<!-- - - - - - - - - - - - - - Slide 2 - - - - - - - - - - - - - - - - -->
											<li data-transition="papercut" data-slotamount="7" class="align_center">
												<img src="/images/slide_software.jpg" alt="">
												<div class="caption sfl stl layer_5" data-x="center" data-y="77" data-easing="easeOutBack" data-speed="600" data-start="900">Разработка на софтуер</div>
												<div class="caption sfl stl layer_6" data-x="center" data-y="135" data-easing="easeOutBack" data-speed="600" data-start="1050">Програми<br><small> и</small> Модули <small>по</small> Поръчка!</div>
												<div class="caption sfb stb" data-x="center" data-y="260" data-easing="easeOutBack" data-speed="700" data-start="1150">
													<a href="{{ route('contact') }}" class="button_blue big_btn">Свържете се с нас!</a>
												</div>
											</li>
											<!-- - - - - - - - - - - - - - End of Slide 2 - - - - - - - - - - - - - - - - -->
											<!-- - - - - - - - - - - - - - Slide 3 - - - - - - - - - - - - - - - - -->
											<li data-transition="papercut" data-slotamount="7">

												<img src="/images/slide_ecommerce.jpg" alt="">
												<div class="caption sfl stl layer_8" data-x="right" data-y="73" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="900">Модули за</div>
												<div class="caption sfl stl layer_9" data-x="right" data-y="122" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1000">e-commerce платформи</div>
												<div class="caption sfl stl layer_10" data-x="right" data-y="178" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1100">Magento, OpenCart, PrestaShop, WooCommerce, VirtueMart ...</div>
												<div class="caption sfb stb" data-x="right" data-hoffset="-60" data-y="262" data-easing="easeOutBack" data-speed="700" data-start="1150">
													<a href="/products.html?category_id%5B0%5D=36" class="button_blue big_btn">Виж повече</a>
												</div>
											</li>
											<!-- - - - - - - - - - - - - - End of Slide 3 - - - - - - - - - - - - - - - - -->
										</ul>
									</div><!--/ .rev_slider-->
								</div><!--/ .revolution_slider-->

								<!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->
							</div><!--/ [col]-->
							<!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->
							<!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->
							<div class="col-sm-3">
								<a href="#" class="banner" title="Покупка на стоки на изплащане">
									<img src="/images/banner_lizing.jpg" alt="Стоки на изплащане" style="border: 1px solid #A9A9A9;">
								</a>
								<a href="{{ route('product', ['id' => 1]) }}" class="banner">
									<img src="/images/cmr.png" alt="">
								</a>
							</div><!--/ [col]-->
							<!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->
						</div><!--/ .row-->
					</div><!--/ .section_offset -->
					<!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->
					<ul class="infoblocks_wrap section_offset six_items">
						<li class="animated transparent" data-animation="fadeInDown">
							<a class="infoblock type_1">
								<i class="icon-thumbs-up-1"></i>
								<span class="caption"><b>Най-добро качество</b></span>
							</a><!--/ .infoblock-->
						</li>
						<li class="animated transparent" data-animation="fadeInDown" data-animation-delay="100">
							<a class="infoblock type_1">
								<i class="icon-paper-plane"></i>
								<span class="caption"><b>Бърза доставка в страната</b></span>
							</a><!--/ .infoblock-->
						</li>
						<li class="animated transparent" data-animation="fadeInDown" data-animation-delay="200">
							<a class="infoblock type_1">
								<i class="icon-lock"></i>
								<span class="caption"><b>Политика на поверителност</b></span>
							</a><!--/ .infoblock-->
						</li>
						<li class="animated transparent" data-animation="fadeInDown" data-animation-delay="300">
							<a class="infoblock type_1">
								<i class="icon-diamond"></i>
								<span class="caption"><b>Големи отстъпки</b></span>
							</a><!--/ .infoblock-->
						</li>
						<li class="animated transparent" data-animation="fadeInDown" data-animation-delay="400">
							<a class="infoblock type_1">
								<i class="icon-money"></i>
								<span class="caption"><b>Гаранции за стоката</b></span>
							</a><!--/ .infoblock-->
						</li>
						<li class="animated transparent" data-animation="fadeInDown" data-animation-delay="500">
							<a class="infoblock type_1">
								<i class="icon-lifebuoy-1"></i>
								<span class="caption"><b>24/7 Поддръжка за клиенти</b></span>
							</a><!--/ .infoblock-->
						</li>
					</ul><!--/ .infoblocks_wrap.section_offset.clearfix-->

					<!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->
					<!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->
					<section class="section_offset animated transparent" data-animation="fadeInDown">
						<h3 class="offset_title section_title">Избрани продукти</h3>
						<div class="tabs type_3 products">
                            <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->
							<ul class="theme_menu tabs_nav clearfix">
                                @foreach ($root_categories as $item)
                                @php
                                    $category_ids = [];
                                    $category_ids[] = $item->id;
                                @endphp
								<li class="has_submenu"><a href="#tab-{{ $item->id }}">{{ $item->name }}</a></li>
                                @endforeach
                                <li class="has_submenu"><a href="{{ route('products') }}" class="all"><b>Виж всички</b></a></li>
							</ul>
							<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->
							<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->
							<div class="tab_containers_wrap">
                                @foreach ($root_categories as $item)
                                    <div id="tab-{{ $item->id }}" class="tab_container">
                                        @php
                                            // get random products by category
                                            $product_ids_by_category_get = ProductsCategories::where(['category_id' => $item->id])->get();
                                            $product_ids_by_category = [];
                                            foreach ($product_ids_by_category_get as $pitem) {
                                                $product_ids_by_category[] = $pitem->product_id;
                                            }
                                            $products_by_categories = Product::whereIn('id', $product_ids_by_category)->inRandomOrder()->take(5)->get();
                                        @endphp
                                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->
                                        <div class="owl_carousel carousel_in_tabs type_3">
                                            @foreach ($products_by_categories as $product_item)
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            @php
                                            $reviews = Review::where(['product_id' => $product_item->id])->get();
                                            $all_rev = 0;
                                            foreach ($reviews as $review){
                                                $all_rev += $review->price + $review->value + $review->quantity;
                                            }
                                            if ($reviews->count() > 0){
                                                $all_rev = floor($all_rev / $reviews->count() * 3);
                                            }
                                            @endphp
                                            <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap" style="min-height:200px;">
                                                        <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product_item->id }}_1.png" alt="{{ $product_item->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="{{ route('product', ['id' => $product_item->id]) }}" class="button_dark_grey middle_btn quick_view pb">Подробно</a>
                                                            </div><!--/ .centered_buttons -->
                                                        </div><!--/ .actions_wrap-->

                                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                                    </div><!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                    <div class="label_hot">Hot</div>
                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                                    <div class="description align_center">
                                                        <p style="min-height:40px;"><a href="{{ route('product', ['id' => $product_item->id]) }}">{{ $product_item->name }}</a></p>
                                                        <div class="clearfix product_info">
                                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                            <ul class="rating alignright">
                                                                <li @if ($all_rev> 0) class="active" @endif></li>
                                                                <li @if ($all_rev> 1) class="active" @endif></li>
                                                                <li @if ($all_rev> 2) class="active" @endif></li>
                                                                <li @if ($all_rev> 3) class="active" @endif></li>
                                                                <li @if ($all_rev> 4) class="active" @endif></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
                                                            <p class="product_price alignleft"><b>{{ $product_item->price }}</b>&nbsp;лв.</p>
                                                        </div><!--/ .clearfix.product_info-->
                                                        <button onclick="buyProduct('{{ $product_item->id }}');" class="button_blue middle_btn">Купи</button>
                                                        @auth
                                                        <ul class="bottombar">
                                                            <li><a href="#" onclick="clickBtnAddFavorite(event, {{ $product_item->id }})">Добави към любими</a></li>
                                                        </ul>
                                                        @endauth
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->
                                                </div><!--/ .product_item-->
                                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                            @endforeach
                                        </div><!--/ .owl_carousel-->

                                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->
                                    </div><!--/ #tab-1-->
                                @endforeach
							</div>
							<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->
						</div>
					</section>
					<!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->
					<!-- - - - - - - - - - - - - - Medicine & Health - - - - - - - - - - - - - - - - -->
					<section class="section_offset animated transparent" data-animation="fadeInDown">
						<h3 class="offset_title">Техническа поддръжка и ревюта</h3>
						<div class="tabs type_3 products">
							<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->
							<ul class="theme_menu tabs_nav clearfix">
								<li class="has_submenu"><a href="#gamings">Игрални компютри&nbsp;({{ $supports_gamings->count() }})</a></li>
								<li class="has_submenu"><a href="#offices">Офис компютри&nbsp;({{ $supports_offices->count() }})</a></li>
								<li class="has_submenu"><a href="#printers">Принтери и Копири&nbsp;({{ $supports_printers->count() }})</a></li>
								<li class="has_submenu"><a href="#instalations">Инсталация и настр.&nbsp;({{ $supports_instalations->count() }})</a></li>
								<li class="has_submenu"><a href="#networks">Локални Мрежи&nbsp;({{ $supports_networks->count() }})</a></li>
								<li class="has_submenu"><a href="#cameras">Камери и Охрана&nbsp;({{ $supports_cameras->count() }})</a></li>
								<li class="has_submenu"><a href="#softwares">Софтуер&nbsp;({{ $supports_softwares->count() }})</a></li>
                                <li class="has_submenu"><a href="{{ route('support.posts', ['id'=>'all']) }}" class="all"><b>Виж всички</b></a></li>
							</ul>
							<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->
							<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->
							<div class="tab_containers_wrap">
								<div id="gamings" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        @foreach ($supports_gamings as $support_gaming)
    										<div class="product_item">
                                                <div class="image_wrap">
                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_gaming->id }}.png" alt="{{ $support_gaming->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                </div><!--/. image_wrap-->
                                                <div class="description align_center">
                                                    <p>Игрални компютри</p>
                                                    <p>{{ $support_gaming->name }}</p>
                                                    <br />
                                                    <a href="{{ route('support.software', ['id'=>$support_gaming->id]) }}" class="button_blue middle_btn">Виж подробно</a>
                                                </div>
                                            </div><!--/ .product_item-->
                                        @endforeach
    								</div><!--/ #tab-1-->
                                </div>

                                <div id="offices" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        @foreach ($supports_offices as $support_office)
    										<div class="product_item">
                                                <div class="image_wrap">
                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_office->id }}.png" alt="{{ $support_office->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                </div><!--/. image_wrap-->
                                                <div class="description align_center">
                                                    <p>Офис компютри</p>
                                                    <p>{{ $support_office->name }}</p>
                                                    <br />
                                                    <a href="{{ route('support.software', ['id'=>$support_office->id]) }}" class="button_blue middle_btn">Виж подробно</a>
                                                </div>
                                            </div><!--/ .product_item-->
                                        @endforeach
									</div><!--/ .owl_carousel-->
								</div><!--/ #tab-2-->

                                <div id="printers" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        @foreach ($supports_printers as $support_printer)
    										<div class="product_item">
                                                <div class="image_wrap">
                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_printer->id }}.png" alt="{{ $support_printer->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                </div><!--/. image_wrap-->
                                                <div class="description align_center">
                                                    <p>Принтери и Копири</p>
                                                    <p>{{ $support_printer->name }}</p>
                                                    <br />
                                                    <a href="{{ route('support.software', ['id'=>$support_printer->id]) }}" class="button_blue middle_btn">Виж подробно</a>
                                                </div>
                                            </div><!--/ .product_item-->
                                        @endforeach
									</div><!--/ .owl_carousel-->
								</div><!--/ #tab-3-->

                                <div id="instalations" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        @foreach ($supports_instalations as $support_instalation)
    										<div class="product_item">
                                                <div class="image_wrap">
                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_instalation->id }}.png" alt="{{ $support_instalation->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                </div><!--/. image_wrap-->
                                                <div class="description align_center">
                                                    <p>Инсталация и настройка</p>
                                                    <p>{{ $support_instalation->name }}</p>
                                                    <br />
                                                    <a href="{{ route('support.software', ['id'=>$support_instalation->id]) }}" class="button_blue middle_btn">Виж подробно</a>
                                                </div>
                                            </div><!--/ .product_item-->
                                        @endforeach
									</div><!--/ .owl_carousel-->
								</div><!--/ #tab-4-->

                                <div id="networks" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        @foreach ($supports_networks as $support_network)
    										<div class="product_item">
                                                <div class="image_wrap">
                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_network->id }}.png" alt="{{ $support_network->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                </div><!--/. image_wrap-->
                                                <div class="description align_center">
                                                    <p>Локални мрежи</p>
                                                    <p>{{ $support_network->name }}</p>
                                                    <br />
                                                    <a href="{{ route('support.software', ['id'=>$support_network->id]) }}" class="button_blue middle_btn">Виж подробно</a>
                                                </div>
                                            </div><!--/ .product_item-->
                                        @endforeach
									</div><!--/ .owl_carousel-->
								</div><!--/ #tab-5-->

                                <div id="cameras" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        @foreach ($supports_cameras as $support_camera)
    										<div class="product_item">
                                                <div class="image_wrap">
                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_camera->id }}.png" alt="{{ $support_camera->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                </div><!--/. image_wrap-->
                                                <div class="description align_center">
                                                    <p>Камери и Охрана</p>
                                                    <p>{{ $support_camera->name }}</p>
                                                    <br />
                                                    <a href="{{ route('support.software', ['id'=>$support_camera->id]) }}" class="button_blue middle_btn">Виж подробно</a>
                                                </div>
                                            </div><!--/ .product_item-->
                                        @endforeach
									</div><!--/ .owl_carousel-->
								</div><!--/ #tab-6-->

                                <div id="softwares" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        @foreach ($supports_softwares as $support_software)
    										<div class="product_item">
                                                <div class="image_wrap">
                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support_software->id }}.png" alt="{{ $support_software->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                </div><!--/. image_wrap-->
                                                <div class="description align_center">
                                                    <p>Софтуер</p>
                                                    <p style="min-height:60px;">{{ $support_software->name }}</p>
                                                    <br />
                                                    <a href="{{ route('support.software', ['id'=>$support_software->id]) }}" class="button_blue middle_btn">Виж подробно</a>
                                                </div>
                                            </div><!--/ .product_item-->
                                        @endforeach
									</div><!--/ .owl_carousel-->
								</div><!--/ #tab-7-->

                            </div>
							<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->
						</div>
					</section>
					<!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->
					<!-- - - - - - - - - - - - - - Beauty - - - - - - - - - - - - - - - - -->
					<section class="section_offset animated transparent" data-animation="fadeInDown">
						<h3 class="offset_title">Разработен и внедрен от нас софтуер</h3>
						<div class="tabs type_3 products">
							<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->
							<ul class="theme_menu tabs_nav clearfix">
								<li class="has_submenu"><a href="#web-projects">WEB Проекти</a></li>
								<li class="has_submenu"><a href="#desktop">Десктоп софтуер</a></li>
								<li class="has_submenu"><a href="#web">WEB Модули</a></li>
								<li class="has_submenu"><a href="#web-soft">WEB Софтуер</a></li>
								<li class="has_submenu"><a href="#web-service">WEB Услуги</a></li>
								<li class="has_submenu"><a href="#mobile">Мобилен софтуер</a></li>
								<li class="has_submenu"><a href="#industry">Софтуер за индустрията</a></li>
							</ul>
							<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->
							<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->
							<div class="tab_containers_wrap">

                                <div id="web-projects" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        @foreach ($webprojects as $webproject)
    										<div class="product_item">
                                                <div class="image_wrap">
                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/projects/project_{{ $webproject->id }}.png" alt="{{ $webproject->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                                </div><!--/. image_wrap-->
                                                <hr /><br />
                                                <div class="description align_center">
                                                    <p>WEB проект</p>
                                                    <p><a target="_blank" href="{{ $webproject->url }}">{{ $webproject->name }}</a></p>
                                                </div>
                                            </div><!--/ .product_item-->
                                        @endforeach
									</div><!--/ .owl_carousel-->
								</div><!--/ #tab-15-->

                                <div id="desktop" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
										<div class="product_item">
											<div class="image_wrap">
												<img src="/images/desktop/if_28_3319616-300x300.png" alt="ПРОГРАМА ЗА РЕГИСТРИРАНЕ НА ДЕЙНОСТТА ПО ПРОДАЖБА И ОБМЕН НА ВАЛУТА">
											</div><!--/. image_wrap-->
											<div class="description align_center">
                                                <p><a href="{{ route('desktop.maxtrade_change') }}">Maxtrade Change</a></p>
                                                <p><a href="{{ route('desktop.maxtrade_change') }}">Програма за регистриране на дейността по продажба и обмен на валута</a></p>
											</div>
										</div><!--/ .product_item-->
										<div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/desktop/if_Delivery_3387313-300x300.png" alt="Програма за съхранение и печат на митнически товарителници (ЧМР)">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('desktop.maxtrade_cmr') }}">Maxtrade CMR</a></p>
                                                <p><a href="{{ route('desktop.maxtrade_cmr') }}">Програма за съхранение и печат на митнически товарителници (ЧМР)</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
										<div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/desktop/if_Umbrella_2974391-300x300.png" alt="Програма за управление на дейността на Служба по трудова медицина">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('desktop.maxtrade_ctm') }}">Maxtrade CTM</a></p>
                                                <p><a href="{{ route('desktop.maxtrade_ctm') }}">Програма за управление на дейността на Служба по трудова медицина</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
										<div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/desktop/if_tube-lab-science-school_2824437-300x300.png" alt="Програма за управление на дейността на Лаборатория">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('desktop.maxtrade_lab') }}">Maxtrade LAB</a></p>
                                                <p><a href="{{ route('desktop.maxtrade_lab') }}">Програма за управление на дейността на Лаборатория</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
										<div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/desktop/if_icon_animal_cachorro_3316536-300x300.png" alt="Програма за управление на дейността на Ловно Рибарско Дружество">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('desktop.maxtrade_slr') }}">Maxtrade SLR</a></p>
                                                <p><a href="{{ route('desktop.maxtrade_slr') }}">Програма за управление на дейността на Ловно Рибарско Дружество</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
										<div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/desktop/if_Asset_93_3298612-300x272.png" alt="Програма за управление на документите от Система по качеството">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('desktop.maxtrade_smdc') }}">Maxtrade SMDC</a></p>
                                                <p><a href="{{ route('desktop.maxtrade_smdc') }}">Програма за управление на документите от Система по качеството</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                    </div><!--/ .owl_carousel-->
								</div><!--/ #tab-16-->

                                <div id="web" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web/woocommerce.png" alt="Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web.cc_woocommerce') }}">Кредитен Калкулатор Woocommerce</a></p>
                                                <p><a href="{{ route('web.cc_woocommerce') }}">Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web/opencart.png" alt="Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web.cc_opencart') }}">Кредитен Калкулатор OpenCart</a></p>
                                                <p><a href="{{ route('web.cc_opencart') }}">Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web/magento.png" alt="Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web.cc_magento') }}">Кредитен Калкулатор Magento</a></p>
                                                <p><a href="{{ route('web.cc_magento') }}">Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web/prestashop.png" alt="Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web.cc_prestashop') }}">Кредитен Калкулатор PrestaShop</a></p>
                                                <p><a href="{{ route('web.cc_prestashop') }}">Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                    </div><!--/ .owl_carousel-->
								</div><!--/ #tab-17-->

                                <div id="web-soft" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web-soft/if_General_Office_62_3592835-300x300.png" alt="Maxtrade Store – Програма за подпомагане дейността на хладилен склад">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web-soft.maxtrade_store') }}">Maxtrade Store</a></p>
                                                <p><a href="{{ route('web-soft.maxtrade_store') }}">Програма за подпомагане дейността на хладилен склад</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web-soft/if_32_3319612-300x300.png" alt="Maxtrade StoreERP Складово Стопанство – програма за следене на виртуалните движения на стоки в склад">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web-soft.maxtrade_storeerp') }}">Maxtrade StoreERP</a></p>
                                                <p><a href="{{ route('web-soft.maxtrade_storeerp') }}">Складово Стопанство – програма за следене на виртуалните движения на стоки в склад</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web-soft/if_6_3319634-300x300.png" alt="Maxtrade INS, програма за регистриране на дейността на Застрахователна агенция">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web-soft.maxtrade_ins') }}">Maxtrade INS</a></p>
                                                <p><a href="{{ route('web-soft.maxtrade_ins') }}">Програма за регистриране на дейността на Застрахователна агенция</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web-soft/AVAMB-logiciel-300x226.png" alt="Програма организатор за малък, среден, а защо не и голям бизнес">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web-soft.avamb') }}">AVAMB</a></p>
                                                <p><a href="{{ route('web-soft.avamb') }}">Програма организатор за малък, среден, а защо не и голям бизнес</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                    </div><!--/ .owl_carousel-->
								</div><!--/ #tab-18-->

                                <div id="web-service" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web-service/support.jpg" alt="Изграждане на Стандартен уеб сайт по поръчка на клиента с информация предоставена ни от него">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web-service.website') }}">Стандартен уеб сайт</a></p>
                                                <p><a href="{{ route('web-service.website') }}">Изграждане на Стандартен уеб сайт по поръчка на клиента с информация предоставена ни от него</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web-service/support.jpg" alt="Изграждане на стандартен онлайн магазин по поръчка на клиента с информация предоставена ни от него">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web-service.onlineshop') }}">Онлайн магазин</a></p>
                                                <p><a href="{{ route('web-service.onlineshop') }}">Изграждане на стандартен онлайн магазин по поръчка на клиента с информация предоставена ни от него</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/web-service/support.jpg" alt="WEB услуги, инсталации, поддръжка">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('web-service.webservice') }}">WEB услуги</a></p>
                                                <p><a href="{{ route('web-service.webservice') }}">WEB услуги, инсталации, поддръжка</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                    </div><!--/ .owl_carousel-->
								</div><!--/ #tab-19-->

                                <div id="mobile" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/mobile/AVAMB-logiciel-300x226.png" alt="AVAMB mobile">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('mobile.avambmobile') }}">AVAMB mobile</a></p>
                                                <p><a href="{{ route('mobile.avambmobile') }}">AVAMB mobile</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
									</div><!--/ .owl_carousel-->
								</div><!--/ #tab-20-->

                                <div id="industry" class="tab_container">
									<div class="owl_carousel carousel_in_tabs type_3">
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/industry/if_Blog-pencil-website-web-browser-gear-setup_2992650-300x300.png" alt="Maxtrade IKUNK – SCADA софтуер за мониторинг и управление на ИКУНК">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('industry.ikunk') }}">Maxtrade IKUNK</a></p>
                                                <p><a href="{{ route('industry.ikunk') }}">SCADA софтуер за мониторинг и управление на ИКУНК</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                        <div class="product_item">
                                            <div class="image_wrap">
                                                <img src="/images/industry/if_resolutions-01_897222-300x300.png" alt="Maxtrade KNTR. Изработване на софтуер за отчитане, съхранение и обработване на данните от електронен авто кантар">
                                            </div><!--/. image_wrap-->
                                            <div class="description align_center">
                                                <p><a href="{{ route('industry.kantar') }}">Maxtrade KNTR</a></p>
                                                <p><a href="{{ route('industry.kantar') }}">Изработване на софтуер за отчитане, съхранение и обработване на данните от електронен авто кантар</a></p>
                                            </div>
                                        </div><!--/ .product_item-->
                                    </div><!--/ .owl_carousel-->
								</div><!--/ #tab-21-->

                            </div>
							<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->
						</div>
					</section>
					<!-- - - - - - - - - - - - - - End of Beauty - - - - - - - - - - - - - - - - -->
				</div><!--/ .container-->
			</div><!--/ .page_wrapper-->

			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

            <!-- За вмъкване в началната страница на магазина -->
		    @php
            /* ######################### Зареждане на параметри ######################## */
            $credittbi_unicid = '9ac3191c-d67c-47f3-aed0-135cc2d1f9cf';// Уникален идентификатор на магазина, получен от TBI Контролния Панел
            /* ######################### Зареждане на параметри ######################## */
            @endphp
            <style>
                *{padding:0;margin:0;}

                /* tbi float */
                .tbi-label-container{
                    z-index:999;
                    position:fixed;
                    top:calc(100% / 2 - 130px);
                    left:67px;
                    display:table;
                    visibility: hidden;
                }
                .tbi-label-text{
                    width:410px;
                    height:260px;
                    color:#696969;
                    background:#f5f5f5;
                    display:table-cell;
                    vertical-align:top;
                    padding-left:5px;
                    border:1px solid #f18900;
                    border-radius:3px;
                }
                .tbi-label-text-a{
                    text-align:center;
                }
                .tbi-label-text-a a{
                    color:#b73607;
                }
                .tbi-label-text-a a:hover{
                    color:#672207;
                    text-decoration:underline;
                }
                .tbi-label-arrow{
                    display:table-cell;
                    vertical-align:middle;
                    color:#f5f5f5;
                    opacity:1;
                }
                .tbi_float{
                    z-index:999;
                    position:fixed;
                    width:60px;
                    height:60px;
                    top:calc(100% / 2 - 30px);
                    left:0px;
                    background-color:#ffffff;
                    border-top:1px solid #f18900;
                    border-right:1px solid #f18900;
                    border-bottom:1px solid #f18900;
                    color:#FFF;
                    border-top-right-radius:8px;
                    border-bottom-right-radius:8px;
                    text-align:center;
                    box-shadow: 2px 2px 3px #999;
                    cursor:pointer;
                }
                .tbi-my-float{
                    margin-top:12px;
                }
            </style>
            @php
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, 'https://api.tbibank.support/function/getparameters.php?cid='.$credittbi_unicid);
            $paramstbi=json_decode(curl_exec($ch), true);
            curl_close($ch);

            //detect mobile
            $useragent=$_SERVER['HTTP_USER_AGENT'];
            if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
                $deviceis = "mobile";
            }else{
                $deviceis = "pc";
            }

            //test 0%
            if ($paramstbi['tbi_purcent_default'] == 2 || $paramstbi['tbi_purcent_default'] == 3 || $paramstbi['tbi_purcent_default'] == 4){
                $tbi_picture = 'https://api.tbibank.support/calculators/assets/img/tbim10.png';
            }else{
                $tbi_picture = 'https://api.tbibank.support/calculators/assets/img/tbim' . $paramstbi['tbi_container_reklama'] . '.png';
            }
            @endphp

            @if ($paramstbi['tbi_container_status'] == 'Yes')
                @if ($deviceis == 'pc')
                    <div class="tbi_float" onclick="tbiChangeContainer();">
                        <img src="https://tbibank.support/dist/img/tbi_logo.png" class="tbi-my-float">
                    </div>
                @else
                <div class="tbi_float" onclick="tbipaymentGoTo();">
                    <img src="https://tbibank.support/dist/img/tbi_logo.png" class="tbi-my-float">
                </div>
                @endif
                <div class="tbi-label-container">
                    <div class="tbi-label-text">
                        <div style="padding-bottom:5px;"></div>
                        <img src="{{$tbi_picture}}">
                        <div style="font-size:16px;padding-top:3px;">{{$paramstbi['tbi_container_txt1']}}</div>
                        <p style="font-size:14px;">{{$paramstbi['tbi_container_txt2']}}</p>
                        <div class="tbi-label-text-a"><a href="{{$paramstbi['tbi_backurl']}}" target="_blank" alt="ИНФОРМАЦИЯ ЗА ОНЛАЙН ПАЗАРУВАНЕ НА КРЕДИТ!">ИНФОРМАЦИЯ ЗА ОНЛАЙН ПАЗАРУВАНЕ НА КРЕДИТ!</a></div>
                    </div>
                </div>
               <script type="application/javascript">
                    function tbiChangeContainer(){
                        var tbi_label_container = document.getElementsByClassName("tbi-label-container")[0];
                        if (tbi_label_container.style.visibility == 'visible'){
                            tbi_label_container.style.visibility = 'hidden';
                            tbi_label_container.style.opacity = 0;
                            tbi_label_container.style.transition = 'visibility 0s, opacity 0.5s ease';
                        }else{
                            tbi_label_container.style.visibility = 'visible';
                            tbi_label_container.style.opacity = 1;
                        }
                    }
                    function tbipaymentGoTo(url){
                        window.open('{{$paramstbi['tbi_backurl']}}','_blank');
                    }
                </script>
            @endif
    <!-- За вмъкване в началната страница на магазина -->
@endsection

@section('scripts')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function buyProduct(product_id){
    $.ajax({
        url: '/product/add-to-cart.html',
        type: 'POST',
        data: {
            product_id: product_id,
            product_quantity: '1'
        },
        dataType: 'JSON',
        success: function (data) {
            // add to mini cart
            window.alert('Успешно добавихте продукта във Вашата продуктова кошница.');
            window.location.reload();
        }
    });
};

function clickBtnAddFavorite(e, id){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'/add-favorite.html',
        data:{id:id},
        success:function(data){
            if (data.result == "new"){
                alert("Успешно добавихте този продукт към Любите си продукти.");
            }else{
                alert("Вече сте добавили този продукт в Любимите си продукти.");
            }
        }
    });
};
</script>
@endsection
