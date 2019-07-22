@extends('layouts.design')
@section('content')
<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
               <div class="secondary_page_wrapper">
                    <div class="container">
                        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('index') }}">Начало</a></li>
                            <li>Филтър за продукти</li>
                        </ul>
                        <div class="row">
                            <aside class="col-md-3 col-sm-4 has_mega_menu">
                                <!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Филтър продукти</h3>
                                    <form class="type_2">
                                        <div class="table_layout list_view">
                                            <div class="table_row">
                                                <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
                                                <div class="table_cell">
                                                    <fieldset>
                                                        <legend>Категории</legend>
                                                        <ul class="checkboxes_list">
                                                            <li>
                                                                <input type="checkbox" checked name="manufacturer"
                                                                    id="manufacturer_1">
                                                                <label for="manufacturer_1">Manufacturer 1</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="manufacturer"
                                                                    id="manufacturer_2">
                                                                <label for="manufacturer_2">Manufacturer 2</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="manufacturer"
                                                                    id="manufacturer_3">
                                                                <label for="manufacturer_3">Manufacturer 3</label>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                                <!--/ .table_cell -->
                                                <!-- - - - - - - - - - - - - - End Category filter - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                                <div class="table_cell">
                                                    <fieldset>
                                                        <legend>Price</legend>
                                                        <div class="range">
                                                            Range :
                                                            <span class="min_val"></span> -
                                                            <span class="max_val"></span>
                                                            <input type="hidden" name="" class="min_value">
                                                            <input type="hidden" name="" class="max_value">
                                                        </div>
                                                        <div id="slider"></div>
                                                    </fieldset>
                                                </div>
                                                <!--/ .table_cell -->
                                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                                <div class="table_cell">
                                                    <fieldset>
                                                        <legend>Color</legend>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <ul class="simple_vertical_list">
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_1">
                                                                        <label for="color_btn_1"
                                                                            class="color_btn green">Green</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_2">
                                                                        <label for="color_btn_2"
                                                                            class="color_btn yellow">Yellow</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_3">
                                                                        <label for="color_btn_3"
                                                                            class="color_btn red">Red</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul class="simple_vertical_list">
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_4">
                                                                        <label for="color_btn_4"
                                                                            class="color_btn blue">Blue</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_5">
                                                                        <label for="color_btn_5"
                                                                            class="color_btn grey">Grey</label>
                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox" name="" id="color_btn_6">
                                                                        <label for="color_btn_6"
                                                                            class="color_btn orange">Orange</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <!--/ .table_cell -->
                                                <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->
                                            </div>
                                            <!--/ .table_row -->
                                        </div>
                                        <!--/ .table_layout -->
                                        <footer class="bottom_box">
                                            <div class="buttons_row">
                                                <button type="submit" class="button_blue middle_btn">Search</button>
                                                <button type="reset"
                                                    class="button_grey middle_btn filter_reset">Reset</button>
                                            </div>
                                        </footer>
                                    </form>
                                </section>
                                <!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">
                                        <img src="images/banner_img_10.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Already viewed products - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Already Viewed Products</h3>
                                    <ul class="products_list_widget">
                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                        <li>
                                            <a href="#" class="product_thumb">
                                                <img src="images/product_thumb_4.jpg" alt="">
                                            </a>
                                            <div class="wrapper">
                                                <a href="#" class="product_title">Aenean auctor wisi et urna...</a>
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
                                    </ul>
                                    <!--/ .list_of_products-->
                                </section>
                                <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Compare products - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Compare Products</h3>
                                    <ul class="products_list_widget">
                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                        <li>
                                            <a href="#" class="product_thumb">
                                                <img src="images/product_thumb_10.jpg" alt="">
                                            </a>
                                            <div class="wrapper">
                                                <a href="#" class="product_title">Integer rutrum ante eu lacus...</a>
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
                                                <a href="#" class="product_title">Vestibulum ante ipsum primis in...</a>
                                                <div class="clearfix product_info">
                                                    <p class="product_price alignleft"><b>$13.99</b></p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                    </ul>
                                    <!--/ .list_of_products-->
                                    <footer class="bottom_box">
                                        <a href="shop_product_comparison.html" class="button_grey middle_btn">Go to
                                            Compare</a>
                                    </footer>
                                </section>
                                <!-- - - - - - - - - - - - - - End of compare products - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Tags - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Tags</h3>
                                    <div class="tags_container">
                                        <ul class="tags_cloud">
                                            <li><a href="#" class="button_grey">allergy</a></li>
                                            <li><a href="#" class="button_grey">baby</a></li>
                                            <li><a href="#" class="button_grey">beauty</a></li>
                                            <li><a href="#" class="button_grey">ear care</a></li>
                                            <li><a href="#" class="button_grey">for her</a></li>
                                            <li><a href="#" class="button_grey">for him</a></li>
                                            <li><a href="#" class="button_grey">first aid</a></li>
                                            <li><a href="#" class="button_grey">gift sets</a></li>
                                            <li><a href="#" class="button_grey">spa</a></li>
                                            <li><a href="#" class="button_grey">hair care</a></li>
                                            <li><a href="#" class="button_grey">herbs</a></li>
                                            <li><a href="#" class="button_grey">medicine</a></li>
                                            <li><a href="#" class="button_grey">natural</a></li>
                                            <li><a href="#" class="button_grey">oral care</a></li>
                                            <li><a href="#" class="button_grey">pain</a></li>
                                            <li><a href="#" class="button_grey">pedicure</a></li>
                                            <li><a href="#" class="button_grey">personal care</a></li>
                                            <li><a href="#" class="button_grey">probiotics</a></li>
                                        </ul>
                                        <!--/ .tags_cloud-->
                                    </div>
                                    <!--/ .tags_container-->
                                </section>
                                <!-- - - - - - - - - - - - - - End of tags - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">
                                        <img src="images/banner_img_11.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                            </aside>

                            <main class="col-md-9 col-sm-8">
                                <div class="section_offset">
                                    <header class="top_box on_the_sides">
                                        <div class="left_side clearfix v_centered">
                                            <!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->
                                            <div class="v_centered">
                                                <span>Подреди по:</span>
                                                <div class="custom_select sort_select">
                                                    <select name="">
                                                        <option value="Default">Въвеждане</option>
                                                        <option value="Price">Цена</option>
                                                        <option value="Name">Име</option>
                                                        <option value="Date">Дата</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->
                                            <div class="v_centered">
                                                <span>Show:</span>
                                                <div class="custom_select">
                                                    <select name="">
                                                        <option value="15">15</option>
                                                        <option value="12">12</option>
                                                        <option value="9">9</option>
                                                        <option value="6">6</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of number of products shown - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <div class="right_side">
                                            <!-- - - - - - - - - - - - - - Product layout type - - - - - - - - - - - - - - - - -->
                                            <div class="layout_type buttons_row"
                                                data-table-container="#products_container">
                                                <a href="#" data-table-layout="grid_view"
                                                    class="button_grey middle_btn icon_btn active tooltip_container"><i
                                                        class="icon-th"></i><span class="tooltip top">Grid
                                                        View</span></a>
                                                <a href="#" data-table-layout="list_view list_view_products"
                                                    class="button_grey middle_btn icon_btn tooltip_container"><i
                                                        class="icon-th-list"></i><span class="tooltip top">List
                                                        View</span></a>
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product layout type - - - - - - - - - - - - - - - - -->
                                        </div>
                                    </header>
                                    <div class="table_layout" id="products_container">
                                        <div class="table_row">
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_7.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Sed ut perspiciatis unde, Liqui-gels 24 capsules</a>
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
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Sed ut perspiciatis unde,
                                                            Liqui-gels 24 capsules</a>
                                                        <a href="#" class="product_category">Beauty Clearance</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                            <ul class="rating">
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li><a href="#">3 Review(s)</a></li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$5.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a></li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_8.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_bestseller">Bestseller</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Nemo enim ipsam voluptatem quia, 4.25 fl oz
                                                            (126ml)</a>
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
                                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Nemo enim ipsam voluptatem
                                                            quia, 4.25 fl oz (126ml)</a>
                                                        <a href="#" class="product_category">Bath &amp; Spa</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                            <ul class="rating">
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li><a href="#">3 Review(s)</a></li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$8.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: $11.24/piece</li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a></li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_9.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Quis autem vel eum iure reing elit, 2mg</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$76.99</b></p>
                                                        </div>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Quis autem vel eum iure reing
                                                            elit, 2mg</a>
                                                        <a href="#" class="product_category">Beauty Clearance</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li>0 Review(s)</li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$76.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a></li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .table_row -->
                                        <div class="table_row">
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_6.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_new">New</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Aliquam congue fermentum nisl, 100mg, Softgels 120
                                                            ea</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$75.39</b></p>
                                                        </div>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Aliquam congue fermentum nisl,
                                                            100mg, Softgels 120 ea</a>
                                                        <a href="#" class="product_category">Beauty Clearance</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li>0 Review(s)</li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$75.39</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: $16.63/piece</li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a></li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_14.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_offer percentage">
                                                            <div>30%</div>OFF
                                                        </div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Praesent justo dolor, Vcaps 60 ea</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><s>$99.99</s>
                                                                <b>$79.99</b></p>
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
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Praesent justo dolor, Vcaps 60
                                                            ea</a>
                                                        <a href="#" class="product_category">Gift Sets</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                            <ul class="rating">
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li>0 Review(s)</li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold"><s>$99.99</s> $79.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a></li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_15.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_new">New</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Donec sagittis euismod purus, 12 ea</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$24.99</b></p>
                                                        </div>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Donec sagittis euismod purus,
                                                            12 ea</a>
                                                        <a href="#" class="product_category">Hair Care</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li>0 Review(s)</li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$24.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a></li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .table_row -->
                                        <div class="table_row">
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/tabs_img_1.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_new">New</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Suspendisse sollicitudin velit sed leo, Softgels 120
                                                            ea</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$44.99</b></p>
                                                        </div>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Suspendisse sollicitudin velit
                                                            sed leo, Softgels 120 ea</a>
                                                        <a href="#" class="product_category">Hair Care</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li>0 Review(s)</li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$44.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: $5.00/piece</li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a></li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/tabs_img_2.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_soldout">Sold Out</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Quisque diam lorem, interdum vitae</a>
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
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Quisque diam lorem, interdum
                                                            vitae</a>
                                                        <a href="#" class="product_category">Beauty Clearance</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                            <ul class="rating">
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li><a href="#">5 Review(s)</a></li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$39.39</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="out_of_stock">out of
                                                                    stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/tabs_img_3.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_hot">Hot</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Vestibulum iaculis lacinia est, 2.5 fl oz (75ml)</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$44.99</b></p>
                                                        </div>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Vestibulum iaculis lacinia
                                                            est, 2.5 fl oz (75ml)</a>
                                                        <a href="#" class="product_category">Makeup &amp;
                                                            Accessories</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li>5 Review(s)</li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$44.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .table_row -->
                                        <div class="table_row">
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_10.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_bestseller">Bestseller</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Ut pharetra augue nec augue, Capsules 90 ea</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$35.99</b></p>
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
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Ut pharetra augue nec augue,
                                                            Capsules 90 ea</a>
                                                        <a href="#" class="product_category">Makeup &amp;
                                                            Accessories</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                            <ul class="rating">
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li><a href="#">1 Review(s)</a></li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$35.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="out_of_stock">out of
                                                                    stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_16.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_bestseller">Bestseller</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Praesent justo dolor, lobortis quis</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$8.79</b></p>
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
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Praesent justo dolor, lobortis
                                                            quis</a>
                                                        <a href="#" class="product_category">Beauty Clearance</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                            <ul class="rating">
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li><a href="#">4 Review(s)</a></li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$8.79</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_17.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_bestseller">Bestseller</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Sed ut perspiciatis, 250mg, Chewable Soft Gel Caps,
                                                            Berry 90 ea</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$12.99</b></p>
                                                        </div>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Sed ut perspiciatis, 250mg,
                                                            Chewable Soft Gel Caps, Berry 90 ea</a>
                                                        <a href="#" class="product_category">Makeup &amp;
                                                            Accessories</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li>0 Review(s)</li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$12.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .table_row -->
                                        <div class="table_row">
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_3.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                                        <div class="label_new">New</div>
                                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/. image_wrap-->
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Lorem ipsum dolor sit amet, 750mg, Softgels 120
                                                            ea</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$44.99</b></p>
                                                        </div>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Lorem ipsum dolor sit amet,
                                                            750mg, Softgels 120 ea</a>
                                                        <a href="#" class="product_category">Hair Care</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li>0 Review(s)</li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$44.99</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_4.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Mauris fermentum dictum magna, Caramel Chocolate
                                                            Crunch 5 ea</a>
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
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Mauris fermentum dictum magna,
                                                            Caramel Chocolate Crunch 5 ea</a>
                                                        <a href="#" class="product_category">Makeup &amp;
                                                            Accessories</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                                            <ul class="rating">
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li><a href="#">8 Review(s)</a></li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$9.59</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                            <div class="table_cell">
                                                <div class="product_item">
                                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <div class="image_wrap">
                                                        <img src="images/product_img_5.jpg" alt="">
                                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                                        <div class="actions_wrap">
                                                            <div class="centered_buttons">
                                                                <a href="#"
                                                                    class="button_dark_grey middle_btn quick_view"
                                                                    data-modal-url="modals/quick_view.html">Quick
                                                                    View</a>
                                                                <a href="#"
                                                                    class="button_blue middle_btn add_to_cart">Add to
                                                                    Cart</a>
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
                                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                                    <div class="description">
                                                        <a href="#">Quisque diam lorem, Lemon 4 fl oz (118ml)</a>
                                                        <div class="clearfix product_info">
                                                            <p class="product_price alignleft"><b>$8.99</b></p>
                                                        </div>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="full_description">
                                                        <a href="#" class="product_title">Quisque diam lorem, Lemon 4 fl
                                                            oz (118ml)</a>
                                                        <a href="#" class="product_category">Makeup &amp;
                                                            Accessories</a>
                                                        <div class="v_centered product_reviews">
                                                            <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                                            <ul class="topbar">
                                                                <li>0 Review(s)</li>
                                                                <li><a href="#">Add Your Review</a></li>
                                                            </ul>
                                                            <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim
                                                            adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit
                                                            amet, euismod in, auctor ut, ligula.</p>
                                                        <a href="#" class="learn_more">Learn More</a>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                    <div class="actions">
                                                        <p class="product_price bold">$8.59</p>
                                                        <ul class="seller_stats">
                                                            <li>Shipping: <span class="success">Free Shipping</span>
                                                            </li>
                                                            <li>Availability: <span class="success">in stock</span></li>
                                                            <li class="seller_info_wrap">
                                                                Seller: <span class="seller_name">johnsmith</span>
                                                                <div class="seller_info_dropdown">
                                                                    <ul class="seller_stats">
                                                                        <li>
                                                                            <ul class="topbar">
                                                                                <li>China (Mainland)</li>
                                                                                <li><a href="#">Contact Details</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><span class="bold">99.8%</span> Positive
                                                                            Feedback</li>
                                                                    </ul>
                                                                    <div class="v_centered">
                                                                        <a href="#" class="button_blue mini_btn">Contact
                                                                            Seller</a>
                                                                        <a href="#" class="small_link">Chat Now</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="buttons_col">
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-heart-5"></i>Add to Wishlist</a>
                                                            </li>
                                                            <li><a href="#" class="icon_link"><i
                                                                        class="icon-resize-small"></i>Add to Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .product_item-->
                                            </div>
                                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .table_row -->
                                    </div>
                                    <!--/ .table_layout -->
                                    <footer class="bottom_box on_the_sides">
                                        <div class="left_side">
                                            <p>Showing 1 to 3 of 45 (15 Pages)</p>
                                        </div>
                                        <div class="right_side">
                                            <ul class="pags">
                                                <li><a href="#"></a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </footer>
                                </div>
                                <!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->
                            </main>
                        </div>
                        <!--/ .row -->
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
            </div>
        </div>
    </div>
    @endsection