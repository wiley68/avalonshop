@extends('layouts.design')
@section('content')
<!-- - - - - - - - - - - - - - Cookie Message - - - - - - - - - - - - - - - - -->

<div class="cookie_message">

    <div class="container">

        <div class="on_the_sides">

            <div class="left_side">Please note this website requires cookies in order to function correctly, they do not
                store any specific information about your personally.</div>

            <div class="right_side">

                <div class="buttons_row">

                    <a href="#" class="button_blue accept_cookie">Accept Cookies</a>

                    <a href="#" class="button_dark_grey">Read More</a>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- - - - - - - - - - - - - - End of Cookie Message - - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - Old ie alert message - - - - - - - - - - - - - - - - -->

<!--[if lt IE 9]>

			<div class="ie_alert_message">

				<div class="container">

					<div class="on_the_sides">

						<div class="left_side">

							<i class="icon-attention-5"></i> <span class="bold">Attention!</span> This page may not display correctly. You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</span>

						</div>
	
						<div class="right_side">

							<a target="_blank" href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_black">Update Now!</a>

						</div>

					</div>

				</div>

			</div>
				
		<![endif]-->

<!-- - - - - - - - - - - - - - End of old ie alert message - - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

<div class="wide_layout">

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="type_6">

        <!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

        <div class="top_part">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-7 col-sm-8">

                        <!-- - - - - - - - - - - - - - Login - - - - - - - - - - - - - - - - -->

                        <p>Welcom visitor <a href="#" data-modal-url="modals/login.html">Login</a> or <a
                                href="#">Register</a></p>

                        <!-- - - - - - - - - - - - - - End login - - - - - - - - - - - - - - - - -->

                    </div>
                    <!--/ [col]-->

                    <div class="col-lg-6 col-md-5 col-sm-4">

                        <div class="clearfix">

                            <!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->

                            <div class="alignright site_settings">

                                <span class="current open_"><img src="images/flag_en.jpg" alt="">English</span>

                                <ul class="dropdown site_setting_list language">

                                    <li class="animated_item"><a href="#"><img src="images/flag_en.jpg" alt="">
                                            English</a></li>
                                    <li class="animated_item"><a href="#"><img src="images/flag_g.jpg" alt="">
                                            German</a></li>
                                    <li class="animated_item"><a href="#"><img src="images/flag_s.jpg" alt="">
                                            Spanish</a></li>

                                </ul>

                            </div>
                            <!--/ .alignright.site_settings-->

                            <!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->

                            <div class="alignright site_settings currency">

                                <span class="current open_">USD</span>

                                <ul class="dropdown site_setting_list">

                                    <li class="animated_item"><a href="#">USD</a></li>
                                    <li class="animated_item"><a href="#">EUR</a></li>
                                    <li class="animated_item"><a href="#">GBP</a></li>

                                </ul>

                            </div>
                            <!--/ .alignright.site_settings.currency-->

                            <!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->

                        </div>
                        <!--/ .clearfix-->

                    </div>
                    <!--/ [col]-->

                </div>
                <!--/ .row-->

            </div>
            <!--/ .container -->

        </div>
        <!--/ .top_part -->

        <!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

        <hr>

        <!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

        <div class="bottom_part">

            <div class="container">

                <div class="row">

                    <div class="main_header_row">

                        <div class="col-sm-3">

                            <!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

                            <a href="index.html" class="logo">

                                <img src="images/logo.png" alt="">

                            </a>

                            <!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

                        </div>
                        <!--/ [col]-->

                        <div class="col-sm-3">

                            <!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->

                            <div class="call_us">

                                <span>Call us toll free:</span> <b>+1888 234 5678</b>

                            </div>
                            <!--/ .call_us-->

                            <!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

                        </div>
                        <!--/ [col]-->

                        <div class="col-sm-6">

                            <!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

                            <form class="clearfix search">

                                <input type="text" name="" tabindex="1" placeholder="Search..." class="alignleft">

                                <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                                <div class="search_category alignleft">

                                    <div class="open_categories">All Categories</div>

                                    <ul class="categories_list dropdown">

                                        <li class="animated_item"><a href="#">Medicine &amp; Health</a></li>
                                        <li class="animated_item"><a href="#">Beauty</a></li>
                                        <li class="animated_item"><a href="#">Personal Care</a></li>
                                        <li class="animated_item"><a href="#">Vitamins &amp; Supplements</a></li>
                                        <li class="animated_item"><a href="#">Baby Needs</a></li>
                                        <li class="animated_item"><a href="#">Diet &amp; Fitness</a></li>
                                        <li class="animated_item"><a href="#">Sexual Well-being</a></li>

                                    </ul>

                                </div>
                                <!--/ .search_category.alignleft-->

                                <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                                <button class="button_blue def_icon_btn alignleft"></button>

                            </form>
                            <!--/ #search-->

                            <!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

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

                            <div class="nav_item size_4">

                                <button class="open_menu"></button>

                                <!-- - - - - - - - - - - - - - Main navigation - - - - - - - - - - - - - - - - -->

                                <ul class="theme_menu cats dropdown">

                                    <li class="has_megamenu animated_item">

                                        <a href="#">Medicine &amp; Health (1375)</a>

                                        <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                        <div class="mega_menu clearfix">

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item">

                                                <ul class="list_of_links">

                                                    <li><a href="#">Allergy &amp; Sinus</a></li>
                                                    <li><a href="#">Children's Healthcare</a></li>
                                                    <li><a href="#">Cough, Cold &amp; Flu</a></li>
                                                    <li><a href="#">Diabetes Management</a></li>
                                                    <li><a href="#">Digestion &amp; Nausea</a></li>
                                                    <li><a href="#">Eye Care</a></li>
                                                    <li><a href="#">First Aid</a></li>
                                                    <li><a href="#">Foot Care</a></li>
                                                    <li><a href="#">Health Clearance</a></li>

                                                </ul>

                                            </div>
                                            <!--/ .mega_menu_item-->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item">

                                                <ul class="list_of_links">

                                                    <li><a href="#">Home Health Care</a></li>
                                                    <li><a href="#">Home Tests</a></li>
                                                    <li><a href="#">Incontinence Aids</a></li>
                                                    <li><a href="#">Natural &amp; Homeopathic</a></li>
                                                    <li><a href="#">Pain &amp; Fever Relief</a></li>
                                                    <li><a href="#">Skin Condition Treatments</a></li>
                                                    <li><a href="#">Sleep &amp; Snoring aids</a></li>
                                                    <li><a href="#">Stop Smoking Aids</a></li>
                                                    <li><a href="#">Support &amp; Braces</a></li>

                                                </ul>

                                            </div>
                                            <!--/ .mega_menu_item-->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .mega_menu-->

                                        <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                                    </li>
                                    <li class="has_megamenu animated_item">

                                        <a href="#">Beauty (1687)</a>

                                        <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                        <div class="mega_menu type_2 clearfix">

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item">

                                                <h6><b>By Category</b></h6>

                                                <ul class="list_of_links">

                                                    <li><a href="#">Bath &amp; Spa</a></li>
                                                    <li><a href="#">Beauty Clearance</a></li>
                                                    <li><a href="#">Gift Sets</a></li>
                                                    <li><a href="#">Hair Care</a></li>
                                                    <li><a href="#">Makeup &amp; Accessories</a></li>
                                                    <li><a href="#">Skin Care</a></li>
                                                    <li><a href="#">Tools &amp; Accessories</a></li>
                                                    <li><a href="#" class="all">View All Categories</a></li>

                                                </ul>

                                            </div>
                                            <!--/ .mega_menu_item-->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item">

                                                <h6><b>By Brand</b></h6>

                                                <ul class="list_of_links">

                                                    <li><a href="#">Abibas</a></li>
                                                    <li><a href="#">Agedir</a></li>
                                                    <li><a href="#">Aldan</a></li>
                                                    <li><a href="#">Biomask</a></li>
                                                    <li><a href="#">Gamman</a></li>
                                                    <li><a href="#">Pallona</a></li>
                                                    <li><a href="#">Pure Care</a></li>
                                                    <li><a href="#" class="all">View All Brands</a></li>

                                                </ul>

                                            </div>
                                            <!--/ .mega_menu_item-->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item">

                                                <a href="#">
                                                    <img src="images/mega_menu_img_1.jpg" alt="">
                                                </a>

                                            </div>
                                            <!--/ .mega_menu_item-->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .mega_menu-->

                                        <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                                    </li>
                                    <li class="has_megamenu animated_item">

                                        <a href="#">Personal Care (1036)</a>

                                        <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                        <div class="mega_menu type_3 clearfix">

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item">

                                                <ul class="list_of_links">

                                                    <li><a href="#">Oral Care</a></li>
                                                    <li><a href="#">Shaving &amp; Hair Removal</a></li>
                                                    <li><a href="#">Men's</a></li>
                                                    <li><a href="#">Sun Care</a></li>
                                                    <li><a href="#">Clearance</a></li>
                                                    <li><a href="#">Feminine Care</a></li>
                                                    <li><a href="#">Gift Sets</a></li>
                                                    <li><a href="#">Soaps &amp; Bodywash</a></li>
                                                    <li><a href="#">Massage &amp; Relaxation</a></li>
                                                    <li><a href="#">Foot Care</a></li>
                                                    <li><a href="#" class="all">View All Categories</a></li>

                                                </ul>

                                            </div>
                                            <!--/ .mega_menu_item -->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item products_in_mega_menu">

                                                <h6 class="widget_title"><b>Today's Deals</b></h6>

                                                <div class="row">

                                                    <div class="col-sm-4">

                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                        <div class="product_item">

                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                            <div class="image_wrap">

                                                                <img src="images/product_img_11.jpg" alt="">

                                                            </div>
                                                            <!--/. image_wrap-->

                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                            <div class="label_offer percentage">

                                                                <div>30%</div>OFF

                                                            </div>

                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                            <div class="description">

                                                                <p><a href="#">Ivory Body Wash, Original 24 fl oz</a>
                                                                </p>

                                                                <div class="clearfix product_info">

                                                                    <p class="product_price alignleft"><s>$9.99</s>
                                                                        <b>$5.99</b></p>

                                                                </div>
                                                                <!--/ .clearfix.product_info-->

                                                            </div>

                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                        </div>
                                                        <!--/ .product_item-->

                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                    </div>
                                                    <!--/ [col]-->

                                                    <div class="col-sm-4">

                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                        <div class="product_item">

                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                            <div class="image_wrap">

                                                                <img src="images/product_img_12.jpg" alt="">

                                                            </div>
                                                            <!--/. image_wrap-->

                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                            <div class="label_offer percentage">

                                                                <div>25%</div>OFF

                                                            </div>

                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                            <div class="description">

                                                                <p><a href="#">Luvs with Leakguards, Size 4 Diapers 29
                                                                        ea</a></p>

                                                                <div class="clearfix product_info">

                                                                    <p class="product_price alignleft"><s>$16.99</s>
                                                                        <b>$14.99</b></p>

                                                                </div>
                                                                <!--/ .clearfix.product_info-->

                                                            </div>

                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                        </div>
                                                        <!--/ .product_item-->

                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                    </div>
                                                    <!--/ [col]-->

                                                    <div class="col-sm-4">

                                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                        <div class="product_item">

                                                            <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                            <div class="image_wrap">

                                                                <img src="images/product_img_13.jpg" alt="">

                                                            </div>
                                                            <!--/. image_wrap-->

                                                            <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                            <div class="label_offer percentage">

                                                                <div>40%</div>OFF

                                                            </div>

                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                            <div class="description">

                                                                <p><a href="#">Doctor's Best Curcumin C3 Complex
                                                                        with...</a></p>

                                                                <div class="clearfix product_info">

                                                                    <p class="product_price alignleft"><s>$103.99</s>
                                                                        <b>$73.99</b></p>

                                                                </div>
                                                                <!--/ .clearfix.product_info-->

                                                            </div>

                                                            <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                        </div>
                                                        <!--/ .product_item-->

                                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                                    </div>
                                                    <!--/ [col]-->

                                                </div>
                                                <!--/ .row-->

                                                <hr>

                                                <a href="#" class="button_grey">View All Deals</a>

                                            </div>
                                            <!--/ .mega_menu_item-->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .mega_menu-->

                                        <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                                    </li>
                                    <li class="has_megamenu animated_item">

                                        <a href="#">Vitamins &amp; Supplements (202)</a>

                                        <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                        <div class="mega_menu type_4 clearfix">

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item">

                                                <h6><b>By Condition</b></h6>

                                                <ul class="list_of_links">

                                                    <li><a href="#">Aches &amp; Pains</a></li>
                                                    <li><a href="#">Acne Solutions</a></li>
                                                    <li><a href="#">Allergy &amp; Sinus</a></li>
                                                    <li><a href="#" class="all">View All</a></li>

                                                </ul>

                                            </div>
                                            <!--/ .mega_menu_item-->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item">

                                                <h6><b>Multivitamins</b></h6>

                                                <ul class="list_of_links">

                                                    <li><a href="#">50+ Multivitamins</a></li>
                                                    <li><a href="#">Children's Multivitamins</a></li>
                                                    <li><a href="#">Men's Multivitamins</a></li>
                                                    <li><a href="#" class="all">View All</a></li>

                                                </ul>

                                            </div>
                                            <!--/ .mega_menu_item-->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_item">

                                                <h6><b>Herbs</b></h6>

                                                <ul class="list_of_links">

                                                    <li><a href="#">Aloe Vera</a></li>
                                                    <li><a href="#">Ashwagandha</a></li>
                                                    <li><a href="#">Astragalus</a></li>
                                                    <li><a href="#" class="all">View All</a></li>

                                                </ul>

                                            </div>
                                            <!--/ .mega_menu_item-->

                                            <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                                            <div class="mega_menu_banner">

                                                <a href="#">
                                                    <img src="images/mega_menu_img_2.jpg" alt="">
                                                </a>

                                            </div>
                                            <!--/ .mega_menu_banner-->

                                            <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .mega_menu-->

                                        <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                                    </li>
                                    <li class="has_megamenu animated_item"><a href="#">Baby Needs (525)</a></li>
                                    <li class="has_megamenu animated_item"><a href="#">Diet &amp; Fitness (135)</a></li>
                                    <li class="has_megamenu animated_item"><a href="#">Sexuall Well-being (298)</a></li>
                                    <li class="has_megamenu animated_item"><a href="#" class="all"><b>All
                                                Categories</b></a></li>

                                </ul>

                                <!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .nav_item-->

                            <!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

                            <div class="nav_item">

                                <nav class="main_navigation">

                                    <ul>

                                        <li class="current"><a href="index.html">Home</a></li>
                                        <li><a href="shop_my_account.html">My Account</a></li>
                                        <li><a href="shop_shopping_cart.html">Shopping Cart</a></li>
                                        <li><a href="shop_checkout.html">Checkout</a></li>
                                        <li><a href="blog_v1.html">Blog</a></li>
                                        <li><a href="additional_page_contact.html">Contact Us</a></li>

                                        <li class="has_submenu">

                                            <a href="index.html">Pages</a>

                                            <!-- - - - - - - - - - - - - - Submenu (level 2) - - - - - - - - - - - - - - - - -->

                                            <ul class="theme_menu submenu">

                                                <li class="has_submenu current">

                                                    <a href="index.html">Homepage Layouts</a>

                                                    <!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                    <ul class="theme_menu submenu">

                                                        <li class="current"><a href="index.html">Home 1</a></li>
                                                        <li><a href="home_v2.html">Home 2</a></li>
                                                        <li><a href="home_v3.html">Home 3</a></li>
                                                        <li><a href="home_v4.html">Home 4</a></li>
                                                        <li><a href="home_v5.html">Home 5</a></li>
                                                        <li><a href="home_v6.html">Home 6</a></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                </li>

                                                <li class="has_submenu">

                                                    <a href="category_page_v1.html">Category Page Layouts</a>

                                                    <!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                    <ul class="theme_menu submenu">

                                                        <li><a href="category_page_v1.html">Category page 1</a></li>
                                                        <li><a href="category_page_v2.html">Category page 2</a></li>
                                                        <li><a href="category_page_v3.html">Category page 3</a></li>
                                                        <li><a href="category_page_v4.html">Category page 4</a></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                </li>

                                                <li class="has_submenu">

                                                    <a href="product_page_v1.html">Product Page Layouts</a>

                                                    <!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                    <ul class="theme_menu submenu">

                                                        <li><a href="product_page_v1.html">Product page 1</a></li>
                                                        <li><a href="product_page_v2.html">Product page 2</a></li>
                                                        <li><a href="product_page_v3.html">Product page 3</a></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                </li>

                                                <li class="has_submenu">

                                                    <a href="shop_shopping_cart.html">Other Shop Pages</a>

                                                    <!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                    <ul class="theme_menu submenu">

                                                        <li><a href="shop_shopping_cart.html">Shopping cart</a></li>
                                                        <li><a href="shop_checkout.html">Checkout</a></li>
                                                        <li><a href="shop_wishlist.html">Wishlist</a></li>
                                                        <li><a href="shop_product_comparison.html">Product
                                                                Comparison</a></li>
                                                        <li><a href="shop_my_account.html">My Account</a></li>
                                                        <li><a href="shop_manufacturers.html">Manufacturers</a></li>
                                                        <li><a href="shop_manufacturer_page.html">Manufacturer Page</a>
                                                        </li>
                                                        <li><a href="shop_orders_list.html">Order List</a></li>
                                                        <li><a href="shop_order_page.html">Order Page</a></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                </li>

                                                <li class="has_submenu">

                                                    <a href="additional_page_about.html">Additional Pages</a>

                                                    <!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                    <ul class="theme_menu submenu">

                                                        <li><a href="additional_page_about.html">About Us</a></li>
                                                        <li><a href="additional_page_contact.html">Contact Us</a></li>
                                                        <li><a href="additional_page_faq.html">FAQ</a></li>
                                                        <li><a href="additional_page_404.html">404 Page</a></li>
                                                        <li><a href="additional_page_sitemap.html">Sitemap</a></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                </li>

                                                <li class="has_submenu">

                                                    <a href="extra_stuff_elements.html">Extra Stuff</a>

                                                    <!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                    <ul class="theme_menu submenu">

                                                        <li><a href="extra_stuff_elements.html">Elements</a></li>
                                                        <li><a href="extra_stuff_typography.html">Typography</a></li>
                                                        <li><a href="extra_stuff_columns.html">Columns</a></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                </li>

                                                <li class="has_submenu">

                                                    <a href="blog_v1.html">Blog Pages</a>

                                                    <!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

                                                    <ul class="theme_menu submenu">

                                                        <li><a href="blog_v1.html">Blog v1</a></li>
                                                        <li><a href="blog_v2.html">Blog v2</a></li>
                                                        <li><a href="blog_v3.html">Blog v3</a></li>
                                                        <li><a href="blog_post_v1.html">Blog Post v1</a></li>
                                                        <li><a href="blog_post_v2.html">Blog Post v2</a></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

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

                            <div class="nav_item size_4">

                                <a href="#" class="wishlist_button" data-amount="7"></a>

                            </div>
                            <!--/ .nav_item-->

                            <!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

                            <div class="nav_item size_4">

                                <a href="#" class="compare_button" data-amount="3"></a>

                            </div>
                            <!--/ .nav_item-->

                            <!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

                            <div class="nav_item size_3">

                                <button id="open_shopping_cart" class="open_button" data-amount="3">
                                    <b class="title">My Cart</b>
                                    <b class="total_price">$999.00</b>
                                </button>

                                <!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

                                <div class="shopping_cart dropdown">

                                    <div class="animated_item">

                                        <p class="title">Recently added item(s)</p>

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="clearfix sc_product">

                                            <a href="#" class="product_thumb"><img src="images/sc_img_1.jpg" alt=""></a>

                                            <a href="#" class="product_name">Natural Factors PGX Daily Ultra
                                                Matrix...</a>

                                            <p>1 x $499.00</p>

                                            <button class="close"></button>

                                        </div>
                                        <!--/ .clearfix.sc_product-->

                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .animated_item-->

                                    <div class="animated_item">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="clearfix sc_product">

                                            <a href="#" class="product_thumb"><img src="images/sc_img_2.jpg" alt=""></a>

                                            <a href="#" class="product_name">Oral-B Glide Pro-Health Floss...</a>

                                            <p>1 x $499.00</p>

                                            <button class="close"></button>

                                        </div>
                                        <!--/ .clearfix.sc_product-->

                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .animated_item-->

                                    <div class="animated_item">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="clearfix sc_product">

                                            <a href="#" class="product_thumb"><img src="images/sc_img_3.jpg" alt=""></a>

                                            <a href="#" class="product_name">Culturelle Kids! Probi-<br>otic Packets 30
                                                ea</a>

                                            <p>1 x $499.00</p>

                                            <button class="close"></button>

                                        </div>
                                        <!--/ .clearfix.sc_product-->

                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .animated_item-->

                                    <div class="animated_item">

                                        <!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

                                        <ul class="total_info">

                                            <li><span class="price">Tax:</span> $0.00</li>

                                            <li><span class="price">Discount:</span> $37.00</li>

                                            <li class="total"><b><span class="price">Total:</span> $999.00</b></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .animated_item-->

                                    <div class="animated_item">

                                        <a href="#" class="button_grey">View Cart</a>

                                        <a href="#" class="button_blue">Checkout</a>

                                    </div>
                                    <!--/ .animated_item-->

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

    </header>

    <!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="page_wrapper">

        <div class="container">

            <div class="row">

                <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

                <aside class="col-md-3 col-sm-4 has_mega_menu">

                    <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3 class="widget_title">Today's Deals</h3>

                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel widgets_carousel">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_1.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                        <a href="#"
                                            class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#"
                                            class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                class="tooltip left">Add to Compare</span></a>

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>30%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15"
                                    data-minutes="0" data-seconds="0"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Lorem Body Wash, Original 24 fl oz</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                    </div>
                                    <!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_2.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                        <a href="#"
                                            class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#"
                                            class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                class="tooltip left">Add to Compare</span></a>

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>25%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10"
                                    data-minutes="30" data-seconds="30"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Ipsum with Ultra Dolor, Size 4 Diapers 29 ea</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                    </div>
                                    <!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_3.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                        <a href="#"
                                            class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#"
                                            class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                class="tooltip left">Add to Compare</span></a>

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>40%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10"
                                    data-minutes="30" data-seconds="30"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Ut Tellus Dolor, Dapibus Eget, 1000mg, Tablets, 120 ea</a></p>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                    </div>
                                    <!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_4.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                        <a href="#"
                                            class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#"
                                            class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                class="tooltip left">Add to Compare</span></a>

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>15%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18"
                                    data-minutes="40" data-seconds="40"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Nulla Facilisi Aenean Nec Eros Vestibulum, Deep Cleansing 1 each</a>
                                    </p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                    </div>
                                    <!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_5.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                        <a href="#"
                                            class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span
                                                class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#"
                                            class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span
                                                class="tooltip left">Add to Compare</span></a>

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>50%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11"
                                    data-minutes="10" data-seconds="10"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Nam Elit Agna Endrerit Sit Amet, Chocolate Milk 4 ea</a></p>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                    </div>
                                    <!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div>
                        <!--/ .widgets_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Deals</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->

                    </section>
                    <!--/ .section_offset.animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Categories</h3>

                        <ul class="theme_menu cats">

                            <li class="has_megamenu">

                                <a href="#">Medicine &amp; Health (1375)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <ul class="list_of_links">

                                            <li><a href="#">Allergy &amp; Sinus</a></li>
                                            <li><a href="#">Children's Healthcare</a></li>
                                            <li><a href="#">Cough, Cold &amp; Flu</a></li>
                                            <li><a href="#">Diabetes Management</a></li>
                                            <li><a href="#">Digestion &amp; Nausea</a></li>
                                            <li><a href="#">Eye Care</a></li>
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Foot Care</a></li>
                                            <li><a href="#">Health Clearance</a></li>

                                        </ul>

                                    </div>
                                    <!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <ul class="list_of_links">

                                            <li><a href="#">Home Health Care</a></li>
                                            <li><a href="#">Home Tests</a></li>
                                            <li><a href="#">Incontinence Aids</a></li>
                                            <li><a href="#">Natural &amp; Homeopathic</a></li>
                                            <li><a href="#">Pain &amp; Fever Relief</a></li>
                                            <li><a href="#">Skin Condition Treatments</a></li>
                                            <li><a href="#">Sleep &amp; Snoring aids</a></li>
                                            <li><a href="#">Stop Smoking Aids</a></li>
                                            <li><a href="#">Support &amp; Braces</a></li>

                                        </ul>

                                    </div>
                                    <!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu">

                                <a href="#">Beauty (1687)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu type_2 clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>By Category</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Bath &amp; Spa</a></li>
                                            <li><a href="#">Beauty Clearance</a></li>
                                            <li><a href="#">Gift Sets</a></li>
                                            <li><a href="#">Hair Care</a></li>
                                            <li><a href="#">Makeup &amp; Accessories</a></li>
                                            <li><a href="#">Skin Care</a></li>
                                            <li><a href="#">Tools &amp; Accessories</a></li>
                                            <li><a href="#" class="all">View All Categories</a></li>

                                        </ul>

                                    </div>
                                    <!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>By Brand</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Abibas</a></li>
                                            <li><a href="#">Agedir</a></li>
                                            <li><a href="#">Aldan</a></li>
                                            <li><a href="#">Biomask</a></li>
                                            <li><a href="#">Gamman</a></li>
                                            <li><a href="#">Pallona</a></li>
                                            <li><a href="#">Pure Care</a></li>
                                            <li><a href="#" class="all">View All Brands</a></li>

                                        </ul>

                                    </div>
                                    <!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <a href="#">
                                            <img src="images/mega_menu_img_1.jpg" alt="">
                                        </a>

                                    </div>
                                    <!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu">

                                <a href="#">Personal Care (1036)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu type_3 clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <ul class="list_of_links">

                                            <li><a href="#">Oral Care</a></li>
                                            <li><a href="#">Shaving &amp; Hair Removal</a></li>
                                            <li><a href="#">Men's</a></li>
                                            <li><a href="#">Sun Care</a></li>
                                            <li><a href="#">Clearance</a></li>
                                            <li><a href="#">Feminine Care</a></li>
                                            <li><a href="#">Gift Sets</a></li>
                                            <li><a href="#">Soaps &amp; Bodywash</a></li>
                                            <li><a href="#">Massage &amp; Relaxation</a></li>
                                            <li><a href="#">Foot Care</a></li>
                                            <li><a href="#" class="all">View All Categories</a></li>

                                        </ul>

                                    </div>
                                    <!--/ .mega_menu_item -->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item products_in_mega_menu">

                                        <h6 class="widget_title"><b>Today's Deals</b></h6>

                                        <div class="row">

                                            <div class="col-sm-4">

                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                <div class="product_item">

                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                    <div class="image_wrap">

                                                        <img src="images/product_img_11.jpg" alt="">

                                                    </div>
                                                    <!--/. image_wrap-->

                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                    <div class="label_offer percentage">

                                                        <div>30%</div>OFF

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                    <div class="description">

                                                        <p><a href="#">Ivory Body Wash, Original 24 fl oz</a></p>

                                                        <div class="clearfix product_info">

                                                            <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b>
                                                            </p>

                                                        </div>
                                                        <!--/ .clearfix.product_info-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                </div>
                                                <!--/ .product_item-->

                                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/ [col]-->

                                            <div class="col-sm-4">

                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                <div class="product_item">

                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                    <div class="image_wrap">

                                                        <img src="images/product_img_12.jpg" alt="">

                                                    </div>
                                                    <!--/. image_wrap-->

                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                    <div class="label_offer percentage">

                                                        <div>25%</div>OFF

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                    <div class="description">

                                                        <p><a href="#">Luvs with Leakguards, Size 4 Diapers 29 ea</a>
                                                        </p>

                                                        <div class="clearfix product_info">

                                                            <p class="product_price alignleft"><s>$16.99</s>
                                                                <b>$14.99</b></p>

                                                        </div>
                                                        <!--/ .clearfix.product_info-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                </div>
                                                <!--/ .product_item-->

                                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/ [col]-->

                                            <div class="col-sm-4">

                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                <div class="product_item">

                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                    <div class="image_wrap">

                                                        <img src="images/product_img_13.jpg" alt="">

                                                    </div>
                                                    <!--/. image_wrap-->

                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                    <div class="label_offer percentage">

                                                        <div>40%</div>OFF

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                    <div class="description">

                                                        <p><a href="#">Doctor's Best Curcumin C3 Complex with...</a></p>

                                                        <div class="clearfix product_info">

                                                            <p class="product_price alignleft"><s>$103.99</s>
                                                                <b>$73.99</b></p>

                                                        </div>
                                                        <!--/ .clearfix.product_info-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                </div>
                                                <!--/ .product_item-->

                                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/ [col]-->

                                        </div>
                                        <!--/ .row-->

                                        <hr>

                                        <a href="#" class="button_grey">View All Deals</a>

                                    </div>
                                    <!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu">

                                <a href="#">Vitamins &amp; Supplements (202)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu type_4 clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>By Condition</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Aches &amp; Pains</a></li>
                                            <li><a href="#">Acne Solutions</a></li>
                                            <li><a href="#">Allergy &amp; Sinus</a></li>
                                            <li><a href="#" class="all">View All</a></li>

                                        </ul>

                                    </div>
                                    <!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>Multivitamins</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">50+ Multivitamins</a></li>
                                            <li><a href="#">Children's Multivitamins</a></li>
                                            <li><a href="#">Men's Multivitamins</a></li>
                                            <li><a href="#" class="all">View All</a></li>

                                        </ul>

                                    </div>
                                    <!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>Herbs</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Aloe Vera</a></li>
                                            <li><a href="#">Ashwagandha</a></li>
                                            <li><a href="#">Astragalus</a></li>
                                            <li><a href="#" class="all">View All</a></li>

                                        </ul>

                                    </div>
                                    <!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_banner">

                                        <a href="#">
                                            <img src="images/mega_menu_img_2.jpg" alt="">
                                        </a>

                                    </div>
                                    <!--/ .mega_menu_banner-->

                                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu"><a href="#">Baby Needs (525)</a></li>
                            <li class="has_megamenu"><a href="#">Diet &amp; Fitness (135)</a></li>
                            <li class="has_megamenu"><a href="#">Sexuall Well-being (298)</a></li>
                            <li class="has_megamenu"><a href="#" class="all"><b>All Categories</b></a></li>

                        </ul>

                    </section>
                    <!--/ .animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset animated transparent" data-animation="fadeInDown">

                        <a href="#">

                            <img src="images/banner_img_10.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Testimonials - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Testimonials</h3>

                        <!-- - - - - - - - - - - - - - Carousel of testimonials - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel widgets_carousel">

                            <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

                            <blockquote>

                                <div class="author_info"><b>Alan, Los Angeles</b></div>

                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean wisi et
                                    urna. Aliquam erat volutpat. Duis ac turpis.</p>

                            </blockquote>

                            <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

                            <blockquote>

                                <div class="author_info"><b>Tracy, New York</b></div>

                                <p>Donec sit amet eros. Lorem ipsum dolor sit amet elit. Mauris amet fermentum dictum
                                    magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</p>

                            </blockquote>

                            <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

                            <blockquote>

                                <div class="author_info"><b>Nikki, Boston</b></div>

                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean auctor
                                    wisi et urna. Aliquam erat volutpat.</p>

                            </blockquote>

                            <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

                        </div>
                        <!--/ .widgets_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of testimonials - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all testimonials - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Testimonials</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all testimonials - - - - - - - - - - - - - - - - -->

                    </section>
                    <!--/ .section_offset.animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of testimonials - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Bestseller Products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Bestseller Products</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_4.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Fusce Euismod Consequat Ante...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$5.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_5.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$8.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_6.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Ut Tellus Dolor Dapibus Eget...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$76.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </ul>
                        <!--/ .list_of_products-->

                        <!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All</a>

                        </footer>

                        <!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->

                    </section>

                    <!-- - - - - - - - - - - - - - End of Bestseller Products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset animated transparent" data-animation="fadeInDown">

                        <a href="#">

                            <img src="images/banner_img_11.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - On Sale Products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>On Sale Products</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_10.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Fusce Euismod Consequat Ante...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$29.99</s> <b>$21.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_11.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_12.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </ul>
                        <!--/ .list_of_products-->

                        <!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All</a>

                        </footer>

                        <!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->

                    </section>

                    <!-- - - - - - - - - - - - - - End of On Sale Products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Sign Up to Our Newsletter</h3>

                        <div class="theme_box">

                            <p class="form_caption">Sing up to our newsletter and get exclusive deals you wont find any-
                                where else straight to your inbox!</p>

                            <form class="newsletter subscribe clearfix" novalidate>

                                <input type="email" name="sc_email" placeholder="Enter your email address">

                                <button class="button_blue def_icon_btn"></button>

                            </form>

                        </div>
                        <!--/ .theme_box-->

                    </section>

                    <!-- - - - - - - - - - - - - - End of Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

                </aside>
                <!--/ [col]-->

                <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->

                <main class="col-md-9 col-sm-8">

                    <div class="section_offset animated transparent" data-animation="fadeInDown">

                        <!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->

                        <div class="revolution_slider">

                            <div class="rev_slider">

                                <ul>

                                    <!-- - - - - - - - - - - - - - Slide 1 - - - - - - - - - - - - - - - - -->

                                    <li data-transition="papercut" data-slotamount="7">

                                        <img src="images/home_slide_4.jpg" alt="">

                                        <div class="caption sfl stl layer_1" data-x="left" data-hoffset="60" data-y="90"
                                            data-easing="easeOutBack" data-speed="600" data-start="900">Best Quality
                                        </div>

                                        <div class="caption sfl stl layer_2" data-x="left" data-y="138"
                                            data-hoffset="60" data-easing="easeOutBack" data-speed="600"
                                            data-start="1000">Medications</div>

                                        <div class="caption sfl stl layer_3" data-x="left" data-y="190"
                                            data-hoffset="60" data-easing="easeOutBack" data-speed="600"
                                            data-start="1100">at Low Prices</div>

                                        <div class="caption sfb stb" data-x="left" data-y="245" data-hoffset="60"
                                            data-easing="easeOutBack" data-speed="700" data-start="1100">
                                            <a href="#" class="button_blue big_btn">Shop Now!</a>
                                        </div>

                                    </li>

                                    <!-- - - - - - - - - - - - - - End of Slide 1 - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Slide 2 - - - - - - - - - - - - - - - - -->

                                    <li data-transition="papercut" data-slotamount="7" class="align_center">

                                        <img src="images/home_slide_5.jpg" alt="">

                                        <div class="caption sfl stl layer_5" data-x="center" data-y="77"
                                            data-easing="easeOutBack" data-speed="600" data-start="900">Have A Question?
                                        </div>

                                        <div class="caption sfl stl layer_6" data-x="center" data-y="135"
                                            data-easing="easeOutBack" data-speed="600" data-start="1050">
                                            <small>Our</small> Pharmacists<br><small>Are</small> Ready <small>to</small>
                                            Help You!</div>

                                        <div class="caption sfb stb" data-x="center" data-y="260"
                                            data-easing="easeOutBack" data-speed="700" data-start="1150">
                                            <a href="#" class="button_blue big_btn">Contact Us Now!</a>
                                        </div>

                                    </li>

                                    <!-- - - - - - - - - - - - - - End of Slide 2 - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Slide 3 - - - - - - - - - - - - - - - - -->

                                    <li data-transition="papercut" data-slotamount="7">

                                        <img src="images/home_slide_6.jpg" alt="">

                                        <div class="caption sfl stl layer_8" data-x="right" data-y="73"
                                            data-hoffset="-60" data-easing="easeOutBack" data-speed="600"
                                            data-start="900">Get 10% Off</div>

                                        <div class="caption sfl stl layer_9" data-x="right" data-y="122"
                                            data-hoffset="-60" data-easing="easeOutBack" data-speed="600"
                                            data-start="1000">For Reorders</div>

                                        <div class="caption sfl stl layer_10" data-x="right" data-y="178"
                                            data-hoffset="-60" data-easing="easeOutBack" data-speed="600"
                                            data-start="1100">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla
                                            facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</div>

                                        <div class="caption sfb stb" data-x="right" data-hoffset="-60" data-y="262"
                                            data-easing="easeOutBack" data-speed="700" data-start="1150">
                                            <a href="#" class="button_blue big_btn">Read More</a>
                                        </div>

                                    </li>

                                    <!-- - - - - - - - - - - - - - End of Slide 3 - - - - - - - - - - - - - - - - -->

                                </ul>

                            </div>
                            <!--/ .rev_slider-->

                        </div>
                        <!--/ .revolution_slider-->

                        <!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->

                    </div>
                    <!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <div class="row">

                            <div class="col-sm-6">

                                <a href="#" class="banner animated transparent" data-animation="fadeInDown">

                                    <img src="images/banner_img_1.jpg" alt="">

                                </a>

                            </div>
                            <!--/ [col]-->

                            <div class="col-sm-6">

                                <a href="#" class="banner animated transparent" data-animation="fadeInDown"
                                    data-animation-delay="150">

                                    <img src="images/banner_img_2.jpg" alt="">

                                </a>

                            </div>
                            <!--/ [col]-->

                        </div>
                        <!--/ .row-->

                    </div>
                    <!--/ .section_offset-->

                    <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Medicine & Health - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Medicine &amp; Health</h3>

                        <!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

                        <div class="tabs type_2 products">

                            <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                            <ul class="tabs_nav clearfix">

                                <li><a href="#tab-1">Allergy &amp; Sinus</a></li>
                                <li><a href="#tab-2">Cough, Cold &amp; Flu</a></li>
                                <li><a href="#tab-3">Diabets Management</a></li>
                                <li><a href="#tab-4">First Aid</a></li>
                                <li><a href="#tab-5">Skin Treatments</a></li>

                            </ul>

                            <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                            <div class="tab_containers_wrap">

                                <div id="tab-1" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120
                                                    ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>

                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>

                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Consectetuer Adipiscing 15, middle_btn
                                                    2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120
                                                    ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-1-->

                                <div id="tab-2" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Amet Consectetuer Adipiscing 15,
                                                    middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-2-->

                                <div id="tab-3" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of hot products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer, middle_btn 2.5 fl
                                                    oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 180</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of hot products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-3-->

                                <div id="tab-4" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 100 af</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing,
                                                    middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-4-->

                                <div id="tab-5" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of sale products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem Quia 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer, middle_btn 2.5 fl
                                                    oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of sale products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-5-->

                            </div>

                            <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

                        </div>
                        <!--/ .tabs.section_offset-->

                        <!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

                    </section>
                    <!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Beauty - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3 class="offset_title">Beauty</h3>

                        <!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_7.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Mauris Fermentum Dictum Magna, Liqui-gels 24 capsules</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$5.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                            class="tooltip top">Add to Wishlist</span></button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                            class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_8.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_bestseller">Bestseller</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer, Ipsum &amp; Amet 4.25 fl oz
                                        (126ml)</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$8.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                            class="tooltip top">Add to Wishlist</span></button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                            class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_9.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Mauris Fermentum Dictum Magna, 2mg, White Ice Mint 160 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$76.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                            class="tooltip top">Add to Wishlist</span></button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                            class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/tabs_img_1.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Nam Elit Agna Endrerit Sit Amet 750mg, Softgels 120 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$44.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                            class="tooltip top">Add to Wishlist</span></button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                            class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                        </div>
                        <!--/ .sh_container-->

                        <!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Products</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                    </section>
                    <!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of Beauty - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Personal Care - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Personal Care</h3>

                        <!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

                        <div class="tabs type_2 products">

                            <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                            <ul class="tabs_nav clearfix">

                                <li><a href="#tab-6">Oral Care</a></li>
                                <li><a href="#tab-7">Hair Care</a></li>
                                <li><a href="#tab-8">Men's</a></li>
                                <li><a href="#tab-9">Soap &amp; Bodywash</a></li>
                                <li><a href="#tab-10">Sun Care</a></li>
                                <li><a href="#tab-11">Feminine Care</a></li>
                                <li><a href="#tab-12">Foot Care</a></li>

                            </ul>

                            <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                            <div class="tab_containers_wrap">

                                <div id="tab-6" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/product_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nam Elit Agna Endrerit Sit Amet 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/product_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem, Caramel Chocolate Crunch 5
                                                    ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$9.59</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/product_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem, Lemon 4 fl oz (120ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$8.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-6-->

                                <div id="tab-7" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 15, middle_btn 2.5
                                                    fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-7-->

                                <div id="tab-8" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of hot products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing 15,
                                                    middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna Lorem 750mg, Softgels 120
                                                    ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of hot products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-8-->

                                <div id="tab-9" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">NMauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 30, middle_btn 2.5
                                                    fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget Lorem 750mg, Softgels 120
                                                    ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-9-->

                                <div id="tab-10" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of sale products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120
                                                    ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing,
                                                    middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Dolor Sit Amet Consectetuer Adipiscing 750mg, Softgels 120
                                                    ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of sale products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-10-->

                                <div id="tab-11" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ipsum Dolor Sit Amet Consectetuer Adipiscing 750mg, Softgels
                                                    120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Dolor Sit Amet Consectetuer Adipiscing 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing 15,
                                                    middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-11-->

                                <div id="tab-12" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Adipiscing 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Dolor Sit Amet Consectetuer Adipiscing 30</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                    <ul class="rating alignright">

                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing,
                                                    middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view"
                                                            data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div>
                                                    <!--/ .centered_buttons -->

                                                </div>
                                                <!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div>
                                            <!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ipsum Dolor Consectetuer Adipiscing 750mg, Softgels 120
                                                    ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                                        class="tooltip top">Add to Wishlist</span></button>
                                                <button
                                                    class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                                        class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div>
                                    <!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ #tab-12-->

                            </div>

                            <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

                        </div>
                        <!--/ .tabs.section_offset-->

                        <!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

                    </section>
                    <!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of Personal Care - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Vitamins & Supplements - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3 class="offset_title">Vitamins &amp; Supplements</h3>

                        <!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_6.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Lorem Ipsum Dolor, 100mg, Softgels 120 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$5.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                            class="tooltip top">Add to Wishlist</span></button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                            class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_14.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Lorem Ipsum Dolor Adipiscing, Vcaps 60 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$79.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                            class="tooltip top">Add to Wishlist</span></button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                            class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_15.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Sit Amet Consectetuer, Peanut Butter Fudge 12 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$24.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                            class="tooltip top">Add to Wishlist</span></button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                            class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/tabs_img_1.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view"
                                                data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div>
                                        <!--/ .centered_buttons -->

                                    </div>
                                    <!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Lorem Ipsum Dolor Sit Amet Adipiscing 750mg, Softgels 120 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$44.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span
                                            class="tooltip top">Add to Wishlist</span></button>
                                    <button
                                        class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span
                                            class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div>
                            <!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                        </div>
                        <!--/ .sh_container-->

                        <!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Products</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                    </section>
                    <!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of Vitamins & Supplements - - - - - - - - - - - - - - - - -->

                </main>
                <!--/ [col]-->

                <!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->

            </div>
            <!--/ .row-->

        </div>
        <!--/ .container-->

    </div>
    <!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

    <footer id="footer">

        <div class="container">

            <!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->

            <div class="infoblocks_container">

                <ul class="infoblocks_wrap">

                    <li>
                        <a href="#" class="infoblock type_1">

                            <i class="icon-paper-plane"></i>
                            <span class="caption"><b>Fast &amp; Free Delivery</b></span>

                        </a>
                        <!--/ .infoblock-->
                    </li>

                    <li>
                        <a href="#" class="infoblock type_1">

                            <i class="icon-lock"></i>
                            <span class="caption"><b>Safe &amp; Secure Payment</b></span>

                        </a>
                        <!--/ .infoblock-->
                    </li>

                    <li>
                        <a href="#" class="infoblock type_1">

                            <i class="icon-money"></i>
                            <span class="caption"><b>100% Money back Guaranted</b></span>

                        </a>
                        <!--/ .infoblock-->
                    </li>

                </ul>
                <!--/ .infoblocks_wrap.section_offset.clearfix-->

            </div>
            <!--/ .infoblocks_container -->

            <!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->

        </div>
        <!--/ .container -->

        <!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->

        <div class="footer_section">

            <div class="container">

                <div class="row">

                    <div class="col-md-3 col-sm-6">

                        <!-- - - - - - - - - - - - - - About us widget- - - - - - - - - - - - - - - - -->

                        <section class="widget">

                            <h4>About Us</h4>

                            <p class="about_us">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet.
                                Nulla venenatis. In pede mi, aliquet sit amet, euis- mod in auctor ut, ligula. Aliquam
                                dapibus tincidunt metus.</p>

                            <!-- - - - - - - - - - - - - - Social icon's list - - - - - - - - - - - - - - - - -->

                            <ul class="social_btns">

                                <li>
                                    <a href="#" class="icon_btn middle_btn social_facebook tooltip_container"><i
                                            class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a>
                                </li>

                                <li>
                                    <a href="#" class="icon_btn middle_btn  social_twitter tooltip_container"><i
                                            class="icon-twitter"></i><span class="tooltip top">Twitter</span></a>
                                </li>

                                <li>
                                    <a href="#" class="icon_btn middle_btn social_googleplus tooltip_container"><i
                                            class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a>
                                </li>

                                <li>
                                    <a href="#" class="icon_btn middle_btn social_pinterest tooltip_container"><i
                                            class="icon-pinterest-3"></i><span class="tooltip top">Pinterest</span></a>
                                </li>

                                <li>
                                    <a href="#" class="icon_btn middle_btn social_flickr tooltip_container"><i
                                            class="icon-flickr-1"></i><span class="tooltip top">Flickr</span></a>
                                </li>

                                <li>
                                    <a href="#" class="icon_btn middle_btn social_youtube tooltip_container"><i
                                            class="icon-youtube"></i><span class="tooltip top">Youtube</span></a>
                                </li>

                                <li>
                                    <a href="#" class="icon_btn middle_btn social_vimeo tooltip_container"><i
                                            class="icon-vimeo-2"></i><span class="tooltip top">Vimeo</span></a>
                                </li>

                                <li>
                                    <a href="#" class="icon_btn middle_btn social_instagram tooltip_container"><i
                                            class="icon-instagram-4"></i><span class="tooltip top">Instagram</span></a>
                                </li>

                                <li>
                                    <a href="#" class="icon_btn middle_btn social_linkedin tooltip_container"><i
                                            class="icon-linkedin-5"></i><span class="tooltip top">LinkedIn</span></a>
                                </li>

                            </ul>

                            <!-- - - - - - - - - - - - - - End social icon's list - - - - - - - - - - - - - - - - -->

                        </section>

                        <!-- - - - - - - - - - - - - - End of about us widget - - - - - - - - - - - - - - - - -->

                    </div>
                    <!--/ [col]-->

                    <div class="col-md-2 col-sm-6">

                        <!-- - - - - - - - - - - - - - Information widget - - - - - - - - - - - - - - - - -->

                        <section class="widget">

                            <h4>Information</h4>

                            <ul class="list_of_links">

                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">FAQ</a></li>

                            </ul>

                        </section>
                        <!--/ .widget-->

                        <!-- - - - - - - - - - - - - - End of information widget - - - - - - - - - - - - - - - - -->

                    </div>
                    <!--/ [col]-->

                    <div class="col-md-2 col-sm-6">

                        <!-- - - - - - - - - - - - - - Extras widget - - - - - - - - - - - - - - - - -->

                        <section class="widget">

                            <h4>Extras</h4>

                            <ul class="list_of_links">

                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Deals</a></li>

                            </ul>

                        </section>
                        <!--/ .widget-->

                        <!-- - - - - - - - - - - - - - End of extras widget - - - - - - - - - - - - - - - - -->

                    </div>
                    <!--/ [col]-->

                    <div class="col-md-2 col-sm-6">

                        <!-- - - - - - - - - - - - - - My account widget - - - - - - - - - - - - - - - - -->

                        <section class="widget">

                            <h4>My Account</h4>

                            <ul class="list_of_links">

                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>

                            </ul>

                        </section>
                        <!--/ .widget-->

                        <!-- - - - - - - - - - - - - - End my account widget - - - - - - - - - - - - - - - - -->

                    </div>

                    <div class="col-md-3 col-sm-6">

                        <!-- - - - - - - - - - - - - - Blog widget - - - - - - - - - - - - - - - - -->

                        <section class="widget">

                            <h4>Latest News</h4>

                            <ul class="list_of_entries">

                                <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->

                                <li>

                                    <article class="entry">

                                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                        <a href="#" class="entry_thumb">

                                            <img src="images/latest_news_thumb_1.jpg" alt="">

                                        </a>

                                        <!-- - - - - - - - - - - - - - End of thumbnail - - - - - - - - - - - - - - - - -->

                                        <div class="wrapper">

                                            <h6 class="entry_title"><a href="#">Vestibulum sed ante</a></h6>

                                            <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->

                                            <div class="entry_meta">

                                                <span><i class="icon-calendar"></i> 2014-08-05 07:01:49</span>

                                            </div>
                                            <!--/ .entry_meta-->

                                            <!-- - - - - - - - - - - - - - End of byline - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .wrapper-->

                                    </article>
                                    <!--/ .clearfix-->

                                </li>

                                <!-- - - - - - - - - - - - - - End of entry - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->

                                <li>

                                    <article class="entry">

                                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                        <a href="#" class="entry_thumb">

                                            <img src="images/latest_news_thumb_2.jpg" alt="">

                                        </a>

                                        <!-- - - - - - - - - - - - - - End of thumbnail - - - - - - - - - - - - - - - - -->

                                        <div class="wrapper">

                                            <h6 class="entry_title"><a href="#">Nulla venenatis</a></h6>

                                            <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->

                                            <div class="entry_meta">

                                                <span><i class="icon-calendar"></i> 2014-08-05 07:01:49</span>

                                            </div>
                                            <!--/ .entry_meta-->

                                            <!-- - - - - - - - - - - - - - End of byline - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .wrapper-->

                                    </article>
                                    <!--/ .clearfix-->

                                </li>

                                <!-- - - - - - - - - - - - - - End of entry - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->

                                <li>

                                    <article class="entry">

                                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                        <a href="#" class="entry_thumb">

                                            <img src="images/latest_news_thumb_3.jpg" alt="">

                                        </a>

                                        <!-- - - - - - - - - - - - - - End of thumbnail - - - - - - - - - - - - - - - - -->

                                        <div class="wrapper">

                                            <h6 class="entry_title"><a href="#">Pellentesque sed dolor</a></h6>

                                            <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->

                                            <div class="entry_meta">

                                                <span><i class="icon-calendar"></i> 2014-08-05 07:01:49</span>

                                            </div>
                                            <!--/ .entry_meta-->

                                            <!-- - - - - - - - - - - - - - End of byline - - - - - - - - - - - - - - - - -->

                                        </div>
                                        <!--/ .wrapper-->

                                    </article>
                                    <!--/ .clearfix-->

                                </li>

                                <!-- - - - - - - - - - - - - - End of entry - - - - - - - - - - - - - - - - -->

                            </ul>

                        </section>
                        <!--/ .widget-->

                        <!-- - - - - - - - - - - - - - End of blog widget - - - - - - - - - - - - - - - - -->

                    </div>
                    <!--/ [col]-->

                </div>
                <!--/ .row-->

            </div>
            <!--/ .container -->

        </div>
        <!--/ .footer_section_2-->

        <!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->

        <hr>

        <!-- - - - - - - - - - - - - - Footer section - - - - - - - - - - - - - - - - -->

        <div class="footer_section_3 align_center">

            <div class="container">

                <!-- - - - - - - - - - - - - - Payments - - - - - - - - - - - - - - - - -->

                <ul class="payments">

                    <li><img src="images/payment_1.png" alt=""></li>
                    <li><img src="images/payment_2.png" alt=""></li>
                    <li><img src="images/payment_3.png" alt=""></li>
                    <li><img src="images/payment_4.png" alt=""></li>
                    <li><img src="images/payment_5.png" alt=""></li>
                    <li><img src="images/payment_6.png" alt=""></li>
                    <li><img src="images/payment_7.png" alt=""></li>
                    <li><img src="images/payment_8.png" alt=""></li>

                </ul>

                <!-- - - - - - - - - - - - - - End of payments - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Footer navigation - - - - - - - - - - - - - - - - -->

                <nav class="footer_nav">

                    <ul class="bottombar">

                        <li><a href="#">Medicine &amp; Health</a></li>
                        <li><a href="#">Beauty</a></li>
                        <li><a href="#">Personal Care</a></li>
                        <li><a href="#">Vitamins &amp; Supplements</a></li>
                        <li><a href="#">Baby Needs</a></li>
                        <li><a href="#">Diet &amp; Fitness</a></li>
                        <li><a href="#">Sexual Well-being</a></li>

                    </ul>

                </nav>

                <!-- - - - - - - - - - - - - - End of footer navigation - - - - - - - - - - - - - - - - -->

                <p class="copyright">&copy; 2015 <a href="index.html">Shopme</a>. All Rights Reserved.</p>

            </div>
            <!--/ .container -->

        </div>
        <!--/ .footer_section-->

        <!-- - - - - - - - - - - - - - End footer section - - - - - - - - - - - - - - - - -->

    </footer>

    <!-- - - - - - - - - - - - - - End Footer - - - - - - - - - - - - - - - - -->

</div>
<!--/ [layout]-->

<!-- - - - - - - - - - - - - - End Main Wrapper - - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - Social feeds - - - - - - - - - - - - - - - - -->

<ul class="social_feeds">

    <!-- - - - - - - - - - - - - - Facebook - - - - - - - - - - - - - - - - -->

    <li>

        <button class="icon_btn middle_btn social_facebook open_"><i class="icon-facebook-1"></i></button>


        <section class="dropdown">

            <div class="animated_item">

                <h3 class="title">Join Us on Facebook</h3>

            </div>
            <!--/ .animated_item-->

            <div class="animated_item">

                <iframe
                    src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fthemeforest&amp;width=235&amp;height=345&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266"
                    style="border:none; overflow:hidden; width:235px; height:345px;"></iframe>

            </div>
            <!--/ .animated_item-->

        </section>
        <!--/ .dropdown-->

    </li>

    <!-- - - - - - - - - - - - - - End of Facebook - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Twitter - - - - - - - - - - - - - - - - -->

    <li>

        <button class="icon_btn middle_btn social_twitter open_"><i class="icon-twitter"></i></button>

        <section class="dropdown">

            <div class="animated_item">

                <h3 class="title">Latest Tweets</h3>

            </div>
            <!--/ .animated_item-->

            <div class="tweet_list_wrap"></div>

            <footer class="animated_item bottom_box">

                <a href="#" class="button_grey middle_btn twitter_follow">Follow Us</a>

            </footer>
            <!--/ .animated_item-->

        </section>
        <!--/ .dropdown-->

    </li>

    <!-- - - - - - - - - - - - - - End of Twitter - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Contact us - - - - - - - - - - - - - - - - -->

    <li>

        <button class="icon_btn middle_btn social_contact open_"><i class="icon-mail-8"></i></button>

        <section class="dropdown">

            <div class="animated_item">

                <h3 class="title">Contact Us</h3>

            </div>
            <!--/ .animated_item-->

            <div class="animated_item">

                <p class="form_caption">Lorem ipsum dolor sit amet, adipis mauris accumsan.</p>

                <form class="contactform" novalidate>

                    <ul>

                        <li class="row">

                            <div class="col-xs-12">

                                <input type="text" required title="Name" name="cf_name" placeholder="Your name">

                            </div>

                        </li>

                        <li class="row">

                            <div class="col-xs-12">

                                <input type="email" required title="Email" name="cf_email" placeholder="Your address">

                            </div>

                        </li>

                        <li class="row">

                            <div class="col-xs-12">

                                <textarea placeholder="Message" required title="Message" name="cf_message"
                                    rows="6"></textarea>

                            </div>

                        </li>

                        <li class="row">

                            <div class="col-xs-12">

                                <button class="button_grey middle_btn">Send</button>

                            </div>

                        </li>

                    </ul>

                </form>

            </div>
            <!--/ .animated_item-->

        </section>
        <!--/ .dropdown-->

    </li>

    <!-- - - - - - - - - - - - - - End contact us - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Google map - - - - - - - - - - - - - - - - -->

    <li>

        <button class="icon_btn middle_btn social_gmap open_"><i class="icon-location-4"></i></button>

        <!--Location-->

        <section class="dropdown">

            <div class="animated_item">

                <h3 class="title">Store Location</h3>

            </div>
            <!--/ .animated_item-->

            <div class="animated_item">

                <p class="c_info_location">8901 Marmora Road,<br>Glasgow, D04 89GR.</p>

                <div class="proportional_frame">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3024.238131852431!2d-74.006059!3d40.712773999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fda88cefb3%3A0x7f1e88758d210007!2z0J3RjNGOLdC50L7RgNC60YHQutC40Lkg0KHQuNGC0Lgt0YXQvtC70Ls!5e0!3m2!1sru!2sua!4v1415946524959"
                        style="border:0"></iframe>

                </div>

                <ul class="c_info_list">

                    <li class="c_info_phone">800-599-65-80</li>
                    <li class="c_info_mail"><a href="mailto:#">info@companyname.com</a></li>
                    <li class="c_info_schedule">

                        <ul>

                            <li>Monday-Friday: 8.00-20.00</li>
                            <li>Saturday: 9.00-15.00</li>
                            <li>Sunday: closed</li>

                        </ul>

                    </li>

                </ul>

            </div>
            <!--/ .animated_item-->

        </section>
        <!--/ .dropdown-->

    </li>

    <!-- - - - - - - - - - - - - - End google map - - - - - - - - - - - - - - - - -->

</ul>

<!-- - - - - - - - - - - - - - End Social feeds - - - - - - - - - - - - - - - - -->

@endsection