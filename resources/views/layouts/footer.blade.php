			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
			<footer id="footer">
				<!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->
				<div class="footer_section_2">
					<div class="container">
						
						<div class="row">
							
							<!-- - - - - - - - - - - - - - Newsletter - - - - - - - - - - - - - - - - -->
							<div class="col-md-6 col-sm-7">
								<section class="streamlined_type_2">
								
									<h4 class="streamlined_title">Запиши се за новини</h4>
									<form class="newsletter" enctype="multipart/form-data" name="news_subscribe" method="POST" action="{{ route('news-subscribe') }}">
                                        <input type="email" name="sc_email" placeholder="Въведете Вашия email адрес">
                                        @csrf
										<button class="button_blue def_icon_btn" type="submit"></button>
									</form>
								</section><!--/ .streamlined-->
							</div><!--/ [col]-->
							
							<!-- - - - - - - - - - - - - - End newsletter - - - - - - - - - - - - - - - - -->
							<!-- - - - - - - - - - - - - - Follow us - - - - - - - - - - - - - - - - -->
							<div class="col-md-6 col-sm-5">
								<section class="streamlined">
								
									<h4 class="streamlined_title">Последвайте ни в социалните мрежи</h4>
									<!-- - - - - - - - - - - - - - Social icon's list - - - - - - - - - - - - - - - - -->
									<ul class="social_btns">
										<li>
											<a href="https://www.facebook.com/AvalonLtd" target="_blank" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a>
										</li>
										<li>
											<a href="https://www.youtube.com/channel/UCk_GQ6HDBdWHoK2SaVfkuwA" target="_blank" class="icon_btn middle_btn social_youtube tooltip_container"><i class="icon-youtube"></i><span class="tooltip top">Youtube</span></a>
										</li>
									</ul>
									
									<!-- - - - - - - - - - - - - - End social icon's list - - - - - - - - - - - - - - - - -->
								</section><!--/ .streamlined-->
							
							</div><!--/ [col]-->
							
							<!-- - - - - - - - - - - - - - End follow us - - - - - - - - - - - - - - - - -->
						</div><!--/ .row-->
					</div><!--/ .container-->
				</div><!--/ .footer_section_2-->
				<!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->
				<hr>
				<!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->
				<div class="footer_section">
					<div class="container">
						
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!-- - - - - - - - - - - - - - Blog widget - - - - - - - - - - - - - - - - -->
								<section class="widget">
									<h4>Новини</h4>
									<ul class="list_of_entries">
                                        @php
                                            use App\News; 
                                            $news = News::inRandomOrder()->take(3)->get();
                                        @endphp
                                        @foreach ($news as $novina_item)
										<!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
										    <li>
                                                <article class="entry">
                                                    <div class="wrapper">
                                                        <h6 class="entry_title"><a href="{{ route('news.post', ['id'=>$novina_item->id]) }}">{{ $novina_item->name }}</a></h6>
                                                        <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->
                                                        <div class="entry_meta">
                                                            @php
                                                                $date = new DateTime($novina_item->created_at);
                                                            @endphp
                                                            <span><i class="icon-calendar"></i> {{ $date->format('d.m.Y H:i:s') }}</span>
                                                        </div><!--/ .entry_meta-->
                                                        <!-- - - - - - - - - - - - - - End of byline - - - - - - - - - - - - - - - - -->
                                                    </div><!--/ .wrapper-->
                                                </article><!--/ .clearfix-->
                                            </li>
                                        <!-- - - - - - - - - - - - - - End of entry - - - - - - - - - - - - - - - - -->                                                
                                        @endforeach
									</ul>
								</section><!--/ .widget-->
								<!-- - - - - - - - - - - - - - End of blog widget - - - - - - - - - - - - - - - - -->
							</div><!--/ [col]-->
							<div class="col-md-3 col-sm-6">
								<!-- - - - - - - - - - - - - - Information widget - - - - - - - - - - - - - - - - -->
								<section class="widget">
                                    <h4>Категории продукти</h4>
                                    <ul class="list_of_links">
                                        @php
                                            use App\Category; 
                                            $categories_random = Category::inRandomOrder()->take(7)->get();
                                        @endphp
                                        @foreach ($categories_random as $category_random)
                                        <li><a href="{{ route('products', ['category_id'=>$category_random->id]) }}">{{ $category_random->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </section><!--/ .widget-->
                                <!-- - - - - - - - - - - - - - End information widget - - - - - - - - - - - - - - - - -->
                            </div><!--/ [col]-->
							<div class="col-md-3 col-sm-6">
								<!-- - - - - - - - - - - - - - Information widget - - - - - - - - - - - - - - - - -->
								<section class="widget">
                                    <h4>Информация</h4>
                                    <ul class="list_of_links">
                                        <li><a href="{{ route('avalon.shop') }}">Магазин Горна Оряховица</a></li>
                                        <li><a href="{{ route('avalon.service') }}">Компютърен сервиз</a></li>
                                        <li><a href="{{ route('avalon.service-printeri') }}">Сервиз принтери</a></li>
                                        <li><a href="{{ route('avalon.mrezi') }}">Компютърни мрежи</a></li>
                                        <li><a href="{{ route('news.all') }}">Новини</a></li>
                                        <li><a href="{{ route('avalon.sitemap') }}">Карта на сайта</a></li>
                                        <li><a href="{{ route('faqs.all') }}">Често задавани въпроси</a>
                                    </ul>
                                </section><!--/ .widget-->
                                <!-- - - - - - - - - - - - - - End information widget - - - - - - - - - - - - - - - - -->
                            </div><!--/ [col]-->
							<div class="col-md-3 col-sm-6">
								<!-- - - - - - - - - - - - - - Contact Us widget - - - - - - - - - - - - - - - - -->
								<section class="widget">
                                    <h4>За контакт</h4>
                                    <ul class="c_info_list">
                                        <li class="c_info_location">гр. Горна Оряховица<br>ул. Патриарх Евтимий 27</li>
                                        <li class="c_info_phone">0619 22218</li>
                                        <li class="c_info_mail"><a href="mailto:home@avalonbg.com">home@avalonbg.com</a></li>
                                        <li class="c_info_schedule">
                                            <ul>
                                                <li>Понеделник-Петък: 8.00-18.00</li>
                                                <li>Събота: 9.00-15.00</li>
                                                <li>Неделя: затворено</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </section><!--/ .widget-->
                                <!-- - - - - - - - - - - - - - End of contact us widget - - - - - - - - - - - - - - - - -->
                            </div>
						</div><!--/ .row-->
					</div><!--/ .container-->
				</div><!--/ .footer_section_2-->
				<!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->
				<hr>
				<!-- - - - - - - - - - - - - - Footer section - - - - - - - - - - - - - - - - -->
				<div class="footer_section_3 align_center">
					<div class="container">
						<p class="footer_message">Авалон ООД работи в IT сферата повече от 15 години. Създава софтуер по поръчка на своите клиенти. Продажба и сервиз на компютърна техника. Продажба и възстановяване на консумативи.</p>
						<!-- - - - - - - - - - - - - - Payments - - - - - - - - - - - - - - - - -->
						<ul class="payments">
                            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/payment_1.png" alt=""></li>
                            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/payment_2.png" alt=""></li>
                            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/payment_3.png" alt=""></li>
                            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/payment_4.png" alt=""></li>
                            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/payment_5.png" alt=""></li>
                            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/payment_6.png" alt=""></li>
                            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/payment_7.png" alt=""></li>
                            <li><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                data-src="/images/payment_8.png" alt=""></li>
						</ul>
						
						<!-- - - - - - - - - - - - - - End of payments - - - - - - - - - - - - - - - - -->
						<!-- - - - - - - - - - - - - - Footer navigation - - - - - - - - - - - - - - - - -->
						<nav class="footer_nav">
							<ul class="bottombar">
                                <li><a href="{{ route('terms') }}">Общи условия</a></li>
                                <li><a href="{{ route('politika') }}">Политика на поверителност</a></li>
								<li><a href="{{ route('gdpr') }}">Инструкция за обработване на лични данни</a></li>
                                <li><a href="{{ route('dostavka') }}">Доставка и плащане</a></li>
                                <li><a href="{{ route('vrashtane') }}">Връщане на продукт</a></li>
                                <li><a href="{{ route('avalon.sitemap') }}">Карта на сайта</a></li>
							</ul>
						</nav>
						
						<!-- - - - - - - - - - - - - - End of footer navigation - - - - - - - - - - - - - - - - -->
                        <p class="copyright">&copy; 2019 <a href="{{ route('index') }}">Авалон ООД</a>. Всички права запазени.</p>
					</div><!--/ .container-->
				</div><!--/ .footer_section-->
				<!-- - - - - - - - - - - - - - End footer section - - - - - - - - - - - - - - - - -->
			</footer>
			
			<!-- - - - - - - - - - - - - - End Footer - - - - - - - - - - - - - - - - -->
		</div><!--/ [layout]-->
		
		<!-- - - - - - - - - - - - - - End Main Wrapper - - - - - - - - - - - - - - - - -->
		<!-- - - - - - - - - - - - - - Social feeds - - - - - - - - - - - - - - - - -->
		<ul class="social_feeds">
			<!-- - - - - - - - - - - - - - Facebook - - - - - - - - - - - - - - - - -->
			<li>
				<a href="https://www.facebook.com/AvalonLtd" class="icon_btn middle_btn social_facebook open_"><i class="icon-facebook-1"></i></a>
			</li>
			<!-- - - - - - - - - - - - - - End of Facebook - - - - - - - - - - - - - - - - -->
			<!-- - - - - - - - - - - - - - Contact us - - - - - - - - - - - - - - - - -->
			<li>
				<a href="{{ route('contact') }}" class="icon_btn middle_btn social_contact open_"><i class="icon-mail-8"></i></a>
			</li>
			<!-- - - - - - - - - - - - - - End contact us - - - - - - - - - - - - - - - - -->
			<!-- - - - - - - - - - - - - - Google map - - - - - - - - - - - - - - - - -->
			<li>
				<a href="{{ route('contact') }}" class="icon_btn middle_btn social_gmap open_"><i class="icon-location-4"></i></a>
			</li>
			<!-- - - - - - - - - - - - - - End google map - - - - - - - - - - - - - - - - -->
		</ul>
		<!-- - - - - - - - - - - - - - End Social feeds - - - - - - - - - - - - - - - - -->
