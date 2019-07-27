<?php use App\Category; ?>		
		<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->
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
										<img src="/images/logo.png" alt="avalon logo" title="Проектиране и инсталиране на софтуер. Продажба на компютърна техника.">
									</a>
									<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->
								</div><!--/ [col]-->
								<div class="col-lg-6 col-md-5 col-sm-5">
									<!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->
									<div class="call_us">
										<span>За контакт:</span> <b>0619 / 22218</b>
									</div><!--/ .call_us-->
									<!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->
									<!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->
									<form class="clearfix search">
										<input type="text" name="" tabindex="1" placeholder="Търси..." class="alignleft">
										<button class="button_blue def_icon_btn alignleft"></button>
									</form><!--/ #search-->
									
									<!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->
								</div><!--/ [col]-->
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
										</div><!--/ .alignright.site_settings-->
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
										</div><!--/ .alignright.site_settings.currency-->
										<!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->
									</div><!--/ .clearfix-->
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
											<div class="login_box"><div class="login_box_inner">Потребител&nbsp;:&nbsp;<a href="#" data-modal-url="modals/login.html">Вход</a> - <a href="#">Регистрация</a></div></div>
										</li>
									</ul><!--/ .account_bar-->
									<!-- - - - - - - - - - - - - - End Loginbox & Wishlist & Compare - - - - - - - - - - - - - - - - -->
								</div><!--/ [col]-->
							</div><!--/ .main_header_row-->
						</div><!--/ .row-->
					</div><!--/ .container-->
				</div><!--/ .bottom_part -->
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
													<a href="{{ route('products', ['category_id'=>$category_ids]) }}">{{ $category->name }}</a>
													<div class="mega_menu clearfix">
														<div class="mega_menu_item">
															<ul class="list_of_links">
																@php
																	$categories = Category::where(['parent_id' => $category->id])->get();
																@endphp
																@foreach ($categories as $item)
																	<li><a href="#">{{ $item->name }}</a></li>																	
																@endforeach
															</ul>
														</div><!--/ .mega_menu_item-->
													</div><!--/ .mega_menu-->
												</li>													
											@endforeach
											
											<li class="has_megamenu animated_item"><a href="#" class="all"><b>Всички продукти</b></a></li>
										</ul>
										<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->
									</div><!--/ .nav_item-->
									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->
									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->
									<div class="nav_item">
										<nav class="main_navigation">
											<ul>
                                                <li><a href="{{ route('index') }}">Начало</a></li>
												<li><a href="{{ route('index') }}">Профил</a></li>
												<li><a href="{{ route('index') }}">Поръчка</a></li>
												<li class="has_submenu">
													<a href="{{ route('support.posts', ['id'=>'all']) }}">Поддръжка</a>
													<ul class="theme_menu submenu">
														<!--<li class="current" >-->
                                                        <li>
                                                            <a href="{{ route('support.posts', ['id'=>'gamings']) }}">Игрални компютри</a>
														</li>
														<li>
                                                            <a href="{{ route('support.posts', ['id'=>'offices']) }}">Офис компютри</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('support.posts', ['id'=>'printers']) }}">Принтери и Копири</a>
                                                        </li>
														<li>
                                                            <a href="{{ route('support.posts', ['id'=>'instalations']) }}">Инсталация и настройки</a>
                                                        </li>
														<li>
                                                            <a href="{{ route('support.posts', ['id'=>'networks']) }}">Локални Мрежи</a>
                                                        </li>
														<li>
                                                            <a href="{{ route('support.posts', ['id'=>'cameras']) }}">Камери и Охрана</a>
                                                        </li>
														<li>
                                                            <a href="{{ route('support.posts', ['id'=>'softwares']) }}">Софтуер</a>
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
                                                            <a href="{{ route('faqs.all') }}">Често задавани въпроси</a>
                                                        </li>
														<li>
                                                            <a href="{{ route('avalon.sitemap') }}">Карта на сайта</a>
                                                        </li>
													</ul>
													<!-- - - - - - - - - - - - - - End submenu (level 2) - - - - - - - - - - - - - - - - -->
												</li>
											</ul>
										</nav><!--/ .main_navigation-->
									</div>
									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->
									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->
									<div class="nav_item size_3">
										<button id="open_shopping_cart" class="open_button" data-amount="3">
											<b class="title">Кошница</b>
											<b class="total_price">999.00</b>
										</button>
										<!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->
										<div class="shopping_cart dropdown">
												<div class="animated_item">
													<p class="title">Последно добавени продукти</p>
													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
													<div class="clearfix sc_product">
														<a href="#" class="product_thumb"><img src="/images/sc_img_1.jpg" alt=""></a>
														<a href="#" class="product_name">Aenean Auctor Wisi Et Urna Ipsum...</a>
														<p>1 x $499.00</p>
														<button class="close"></button>
													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
												</div><!--/ .animated_item-->
												<div class="animated_item">
													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
													<div class="clearfix sc_product">
														<a href="#" class="product_thumb"><img src="/images/sc_img_2.jpg" alt=""></a>
														<a href="#" class="product_name">Lorem Ipsum Dolor Sit Amet...</a>
														<p>1 x $499.00</p>
														<button class="close"></button>
													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
												</div><!--/ .animated_item-->
												<div class="animated_item">
													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
													<div class="clearfix sc_product">
														<a href="#" class="product_thumb"><img src="/images/sc_img_3.jpg" alt=""></a>
														<a href="#" class="product_name">Nemo Enim Ipsam <br>Voluptatem 30 ea</a>
														<p>1 x $499.00</p>
														<button class="close"></button>
													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
												</div><!--/ .animated_item-->
												<div class="animated_item">
													<!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->
													<ul class="total_info">
														<li><span class="price">Tax:</span> $0.00</li>
														<li><span class="price">Discount:</span> $37.00</li>
														<li class="total"><b><span class="price">Total:</span> $999.00</b></li>
													</ul>
													
													<!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->
												</div><!--/ .animated_item-->
												<div class="animated_item">
													<a href="#" class="button_grey">Виж кошницата</a>
													<a href="#" class="button_blue">Купи</a>
												</div><!--/ .animated_item-->
											</div><!--/ .shopping_cart.dropdown-->
										
										<!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->
										
									</div><!--/ .nav_item-->
									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->
								</div><!--/ .sticky_inner -->
								<!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->
							</div><!--/ [col]-->
						</div><!--/ .row-->
                    </div><!--/ .container-->
				</div><!--/ .main_navigation_wrap-->
                <!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->
                
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
            </header>
			
			<!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->
