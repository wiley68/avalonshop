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
                            <li>Продуктова кошница</li>
                        </ul>
                        <section class="section_offset">
                            <h1>Продуктова кошница</h1>
                            <!-- - - - - - - - - - - - - - Shopping cart table - - - - - - - - - - - - - - - - -->
                            <div class="table_wrap">
                                <table class="table_type_1 shopping_cart_table">
                                    <thead>
                                        <tr>
                                            <th class="product_image_col">Снимка</th>
                                            <th class="product_title_col">Продукт</th>
                                            <th>Код</th>
                                            <th>Ед. цена</th>
                                            <th class="product_qty_col">Количество</th>
                                            <th>Обща цена</th>
                                            <th class="product_actions_col">Управление</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty((Session::get('cart_session'))['items']))
                                        @foreach ((Session::get('cart_session'))['items'] as $item)
                                        <tr>
                                            <td class="product_image_col" data-title="Product Image">
                                                <a href="#"><img style="max-width:80px;" src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $item['product_id'] }}_1.png" style="max-width:200px;" alt="{{ $item['product_name'] }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'"></a>
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->
                                            <td data-title="Product Name">
                                                <a href="#" class="product_title">Adipiscing aliquet sed in lacus,
                                                    Liqui-gels 24</a>
                                                <ul class="sc_product_info">
                                                    <li>Size: Big</li>
                                                    <li>Color: Red</li>
                                                </ul>
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of product name - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - SKU - - - - - - - - - - - - - - - - -->
                                            <td data-title="SKU">
                                                PS01
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of SKU - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                            <td class="subtotal" data-title="Price">

                                                $5.99
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of Price - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->
                                            <td data-title="Quantity">
                                                <div class="qty min clearfix">
                                                    <button class="theme_button" data-direction="minus">&#45;</button>
                                                    <input type="text" name="" value="1">
                                                    <button class="theme_button" data-direction="plus">&#43;</button>
                                                </div>
                                                <!--/ .qty.min.clearfix-->
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Total - - - - - - - - - - - - - - - - -->
                                            <td class="total" data-title="Total">
                                                $5.99
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of total - - - - - - - - - - - - - - - - -->
                                            <!-- - - - - - - - - - - - - - Action - - - - - - - - - - - - - - - - -->
                                            <td data-title="Action">
                                                <a href="#" class="button_dark_grey icon_btn edit_product"><i
                                                        class="icon-pencil"></i></a>
                                                <a href="#" class="button_dark_grey icon_btn remove_product"><i
                                                        class="icon-cancel-2"></i></a>
                                            </td>
                                            <!-- - - - - - - - - - - - - - End of action - - - - - - - - - - - - - - - - -->
                                        </tr>
                                        @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                            <!--/ .table_wrap -->
                            <footer class="bottom_box on_the_sides">
                                <div class="left_side">
                                    <a href="#" class="button_blue middle_btn">Continue Shopping</a>
                                </div>
                                <div class="right_side">
                                    <a href="#" class="button_grey middle_btn">Clear Shopping Cart</a>
                                </div>
                            </footer>
                            <!--/ .bottom_box -->
                            <!-- - - - - - - - - - - - - - End of shopping cart table - - - - - - - - - - - - - - - - -->
                        </section>
                        <!--/ .section_offset -->
                        <div class="section_offset">
                            <div class="row">
                                <section class="col-sm-4">
                                    <h3>Discount Codes</h3>
                                    <div class="theme_box">
                                        <p class="form_caption">Enter your coupon code if you have one.</p>
                                        <form id="discount_code">
                                            <ul>
                                                <li class="row">
                                                    <div class="col-xs-12">
                                                        <input type="text" name="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <!--/ .theme_box -->
                                    <footer class="bottom_box">
                                        <button type="submit" form="discount_code" class="button_grey middle_btn">Apply
                                            Coupon</button>
                                    </footer>
                                </section>
                                <!--/ [col] -->
                                <section class="col-sm-4">
                                    <h3>Estimate Shipping and Tax</h3>
                                    <div class="theme_box">
                                        <p class="form_caption">Enter your destination to get a shipping estimate.</p>
                                        <form id="estimate_shipping" class="type_2">
                                            <ul>
                                                <li class="row">

                                                    <div class="col-xs-12">
                                                        <label>Country</label>
                                                        <div class="custom_select">
                                                            <select>

                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Canada">Canada</option>
                                                                <option selected value="USA">USA</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="row">

                                                    <div class="col-lg-7 col-md-6">
                                                        <label>State/Province</label>
                                                        <div class="custom_select">
                                                            <select>
                                                                <option value="Alabama">Alabama</option>
                                                                <option value="Illinois">Illinois</option>
                                                                <option value="Kansas">Kansas</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--/ [col] -->
                                                    <div class="col-lg-5 col-md-6">
                                                        <label for="postal_code">Zip/Postal Code</label>
                                                        <input type="text" name="" id="postal_code">
                                                    </div>
                                                    <!--/ [col] -->
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <!--/ .theme_box -->
                                    <footer class="bottom_box">
                                        <button type="submit" form="estimate_shipping"
                                            class="button_grey middle_btn">Get a Quote</button>
                                    </footer>
                                    <!--/ .bottom_box -->
                                </section>
                                <!--/ [col] -->
                                <section class="col-sm-4">
                                    <h3>Total</h3>
                                    <div class="table_wrap">
                                        <table class="zebra">
                                            <tfoot>
                                                <tr>

                                                    <td>Subtotal</td>
                                                    <td>$146.78</td>
                                                </tr>
                                                <tr class="total">

                                                    <td>Total</td>
                                                    <td>$146.78</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <footer class="bottom_box">
                                        <a class="button_blue middle_btn" href="#">Proceed to Checkout</a>
                                        <div class="single_link_wrap">
                                            <a href="#">Checkout with Multiple Addresses</a>
                                        </div>
                                    </footer>
                                </section><!-- / [col] -->
                            </div>
                            <!--/ .row -->
                        </div>
                        <!--/ .section_offset -->
                        <section class="section_offset">
                            <h3 class="offset_title">You Might Also Like</h3>
                            <!-- - - - - - - - - - - - - - Carousel of you might also like - - - - - - - - - - - - - - - - -->
                            <div class="owl_carousel six_items">

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="images/product_img_18.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
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
                                        <p><a href="#">Metus nulla facilisi, Original 24 fl oz</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><s>$9.99</s> <b>$5.99</b></p>
                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                            <ul class="rating">
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>
                                            </ul>
                                            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .clearfix.product_info-->
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->
                                </div>
                                <!--/ .product_item-->

                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                    <div class="image_wrap">
                                        <img src="images/product_img_19.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
                                                    class="tooltip left">Add to Compare</span></a>
                                        </div>
                                        <!--/ .actions_wrap-->

                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <p><a href="#">Tincidunt ac viverra nam elit agna endrerit 29 ea</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><b>$14.99</b></p>
                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                            <ul class="rating">
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                            </ul>
                                            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
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
                                        <img src="images/product_img_20.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
                                                    class="tooltip left">Add to Compare</span></a>
                                        </div>
                                        <!--/ .actions_wrap-->

                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                    <div class="label_new">New</div>
                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <p><a href="#">Lorem ipsum dolor sit amet...</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><b>$73.99</b></p>
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
                                        <img src="images/product_img_21.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
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
                                        <p><a href="#">Etiam cursus leo vel metus nulla facilisi...</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><s>$5.99</s> <b>$2.99</b></p>
                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                            <ul class="rating">
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
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
                                        <img src="images/product_img_22.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
                                                    class="tooltip left">Add to Compare</span></a>
                                        </div>
                                        <!--/ .actions_wrap-->

                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <p><a href="#">Ut pharetra augue nec augue...</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$13.99</b></p>
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
                                        <img src="images/product_img_23.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
                                                    class="tooltip left">Add to Compare</span></a>
                                        </div>
                                        <!--/ .actions_wrap-->

                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                    <div class="label_hot">Hot</div>
                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <p><a href="#">Integer rutrum ante eu lacus vestibulum...</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><b>$21.99</b></p>
                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                            <ul class="rating">
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>
                                            </ul>
                                            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
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
                                        <img src="images/product_img_18.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
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
                                        <p><a href="#">Metus nulla facilisi, Original 24 fl oz</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><s>$9.99</s> <b>$5.99</b></p>
                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                            <ul class="rating">
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>
                                            </ul>
                                            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .clearfix.product_info-->
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->
                                </div>
                                <!--/ .product_item-->

                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                    <div class="image_wrap">
                                        <img src="images/product_img_19.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
                                                    class="tooltip left">Add to Compare</span></a>
                                        </div>
                                        <!--/ .actions_wrap-->

                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <p><a href="#">Tincidunt ac viverra nam elit agna endrerit 29 ea</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><b>$14.99</b></p>
                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                            <ul class="rating">
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                            </ul>
                                            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
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
                                        <img src="images/product_img_20.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
                                                    class="tooltip left">Add to Compare</span></a>
                                        </div>
                                        <!--/ .actions_wrap-->

                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                    <div class="label_new">New</div>
                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <p><a href="#">Lorem ipsum dolor sit amet...</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><b>$73.99</b></p>
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
                                        <img src="images/product_img_21.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
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
                                        <p><a href="#">Etiam cursus leo vel metus nulla facilisi...</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><s>$5.99</s> <b>$2.99</b></p>
                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                            <ul class="rating">
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
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
                                        <img src="images/product_img_22.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
                                                    class="tooltip left">Add to Compare</span></a>
                                        </div>
                                        <!--/ .actions_wrap-->

                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <p><a href="#">Ut pharetra augue nec augue...</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$13.99</b></p>
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
                                        <img src="images/product_img_23.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey quick_view"
                                                    data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue add_to_cart">Add to Cart</a>
                                            </div>
                                            <!--/ .centered_buttons -->
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span
                                                    class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#"
                                                class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span
                                                    class="tooltip left">Add to Compare</span></a>
                                        </div>
                                        <!--/ .actions_wrap-->

                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                    <div class="label_hot">Hot</div>
                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <p><a href="#">Integer rutrum ante eu lacus vestibulum...</a></p>
                                        <div class="clearfix product_info">
                                            <p class="product_price"><b>$21.99</b></p>
                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                            <ul class="rating">
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>
                                            </ul>
                                            <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .clearfix.product_info-->
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->
                                </div>
                                <!--/ .product_item-->

                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                            </div>
                            <!--/ .owl_carousel-->

                            <!-- - - - - - - - - - - - - - End of you might also like - - - - - - - - - - - - - - - - -->
                        </section>
                    </div>
                    <!--/ .container-->
                </div>
                <!--/ .page_wrapper-->

                <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            </div>
        </div>
    </div>
</div>

@endsection