<?php use App\Attribute; ?>
<?php use App\AttributeValues; ?>
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
                            @php
                                $category_id = [];
                                $category_id[] = $product_category->id;
                            @endphp
                            <li><a href="{{ route('products', ['category_id' => $category_id]) }}">{{ $product_category->name }}</a></li>
                            <li>{{ $product->name }}</li>
                        </ul>
                        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->
                        <!-- - - - - - - - - - - - - - Product images & description - - - - - - - - - - - - - - - - -->
                        <section class="section_offset">
                            <div class="clearfix">
                                <!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->
                                <div class="single_product">
                                    <!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->
                                    <div class="image_preview_container">
                                        <img id="img_zoom" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png" src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png" alt="">
                                        <button class="button_grey_2 icon_btn middle_btn open_qv"><i class="icon-resize-full-6"></i></button>
                                    </div><!--/ .image_preview_container-->
                                    <!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Prodcut thumbs carousel - - - - - - - - - - - - - - - - -->
                                    <div class="product_preview">
                                        <div class="owl_carousel" id="thumbnails">
                                            <a href="#" data-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png" data-large-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png" alt="{{ $product->name }}-1" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            <a href="#" data-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_2.png" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_2.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_2.png" data-large-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_2.png" alt="{{ $product->name }}-2" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            <a href="#" data-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png" data-large-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png" alt="{{ $product->name }}-3" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                            <a href="#" data-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_4.png" data-zoom-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png" data-large-image="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_3.png" alt="{{ $product->name }}-3" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'">
                                            </a>
                                        </div><!--/ .owl-carousel-->
                                    </div><!--/ .product_preview-->
                                    <!-- - - - - - - - - - - - - - End of prodcut thumbs carousel - - - - - - - - - - - - - - - - -->
                                </div>
                                <!-- - - - - - - - - - - - - - End of product image column - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product description column - - - - - - - - - - - - - - - - -->
                                <div class="single_product_description">
                                    <h3 class="offset_title"><a href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a></h3>
                                    <!-- - - - - - - - - - - - - - Page navigation - - - - - - - - - - - - - - - - -->
                                    <div class="page-nav">
                                        <a href="#" class="page-prev"></a>
                                        <a href="#" class="page-next"></a>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of page navigation - - - - - - - - - - - - - - - - -->
                                    <div class="description_section v_centered">
                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
                                    
                                        <ul class="rating">
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                            
                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->
                                        <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->
                                        <ul class="topbar">
                                            <li>3 Отзив(а)</li>
                                            <li><a href="#">Добавете отзив</a></li>
                                            <li>{{ $product->visits }}&nbsp;посещения</li>
                                        </ul>
                                        <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->
                                    </div>
                                    <div class="description_section">
                                        <table class="product_info">
                                            <tbody>
                                                <tr>
                                                    <td>Производител: </td>
                                                    <td><a href="{{ route('products', ['manufacturer_id'=>$manufacturer_id]) }}">{{ $manufacturer_name }}</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Наличност: </td>
                                                    <td><span class="in_stock">{{ $product->instock }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Продуктов код: </td>
                                                    <td>{{ $product->code }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="description_section">
                                        <p>{!! $product->short_description !!}</p>
                                    </div>
                                    <hr>
                                    <p class="product_price"><b class="theme_color">{{ number_format($product->price, 2, ".", "") }}</b>&nbsp;лв.</p>
                                    <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->
                                    <div class="description_section_2 v_centered">
                                        
                                        <span class="title">Количество:</span>
                                        <div class="qty min clearfix">
                                            <button class="theme_button" data-direction="minus">&#45;</button>
                                            <input type="text" name="" value="1">
                                            <button class="theme_button" data-direction="plus">&#43;</button>
                                        </div>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                    <div class="buttons_row">
                                        <button class="button_blue middle_btn">Купи</button>
                                        <button class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip top">Добави към любими</span></button>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                </div>
                                <!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->
                            </div>
                        </section><!--/ .section_offset -->
                        <!-- - - - - - - - - - - - - - End of product images & description - - - - - - - - - - - - - - - - -->
                        <!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->
                        <div class="section_offset">
                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->
                                    <section class="infoblock type_3">
                                        <div class="clearfix">
                                            <i class="icon-thumbs-up-1"></i>
                                            <h4 class="caption">Най-добро качество</h4>
                                        </div>
                                        <p>Всички предлагани от нас продукти имат гаранция и са тествани и подбрани от нашия екип. Гарантираме за доброто им качество.</p>
                                    </section><!--/ .infoblock.type_3 -->
                                    <!-- - - - - - - - - - - - - - End of infoblock - - - - - - - - - - - - - - - - -->
                                </div><!--/ [col]-->
                                <div class="col-sm-4">
                                    <!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->
                                    <section class="infoblock type_3">
                                        <div class="clearfix">
                                            <i class="icon-money"></i>
                                            <h4 class="caption">Безплатна доставка</h4>
                                        </div>
                                        <p>Безплатна доставка в страната. Важи за закупени стоки над 400 лв. Доставя се до офис на куриер избран от клиента.</a></p>
                                    </section><!--/ .infoblock.type_3 -->
                                    <!-- - - - - - - - - - - - - - End of infoblock - - - - - - - - - - - - - - - - -->
                                </div><!--/ [col]-->
                                <div class="col-sm-4">
                                    <!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->
                                    <section class="infoblock type_3">
                                        <div class="clearfix">
                                            <i class="icon-lock"></i>
                                            <h4 class="caption">Поверителност</h4>
                                        </div>
                                        <p>Авалон ООД се задължава да използва получените от клиентите лични данни само за нуждите на доставка на продуктите.</p>
                                    </section><!--/ .infoblock.type_3 -->
                                    <!-- - - - - - - - - - - - - - End of infoblock - - - - - - - - - - - - - - - - -->
                                </div><!--/ [col]-->
                            </div><!--/ .row -->
                        </div><!--/ .section_offset -->
                        <!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->
                        <!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->
                        <div class="section_offset">
                            <div class="tabs type_2">
                                <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->
                                <ul class="tabs_nav clearfix">
                                    <li><a href="#tab-1">Описание</a></li>
                                    <li><a href="#tab-2">Спецификация</a></li>
                                    <li><a href="#tab-3">Отзиви (3)</a></li>
                                    <li><a href="#tab-4">Допълнителна информация</a></li>
                                </ul>
                                
                                <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->
                                <div class="tab_containers_wrap">
                                    <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->
                                    <div id="tab-1" class="tab_container">
                                        {!! html_entity_decode($product->description) !!}
                                    </div><!--/ #tab-1-->
                                    <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->
                                    <div id="tab-2" class="tab_container">
                                        <ul class="specifications">
                                            @foreach ($products_attributes as $product_attribute)
                                                <li><span>{{ Attribute::where(['id' => $product_attribute->attribute_id])->first()->name }} :</span>{{ AttributeValues::where(['id' => $product_attribute->attribute_value_id])->first()->value }}</li>                                            
                                            @endforeach
                                        </ul>
                                    </div><!--/ #tab-2-->
                                    <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->
                                    <div id="tab-3" class="tab_container">
                                        <section class="section_offset">
                                            <h3>Customer Reviews</h3>
                                            <ul class="reviews">
                                                <li>
                                                    <!-- - - - - - - - - - - - - - Review - - - - - - - - - - - - - - - - -->
                                                    
                                                    <article class="review">
                                                        <!-- - - - - - - - - - - - - - Rates - - - - - - - - - - - - - - - - -->
                                                        <ul class="review-rates">
                                                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                
                                                                <span class="name">Price</span>
                                                                <ul class="rating">
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li></li>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of price - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Value - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                
                                                                <span class="name">Value</span>
                                                                <ul class="rating">
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of value - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Quality - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                
                                                                <span class="name">Quality</span>
                                                                <ul class="rating">
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of quality - - - - - - - - - - - - - - - - -->
                                                        </ul>
                                                        <!-- - - - - - - - - - - - - - End of rates - - - - - - - - - - - - - - - - -->
                                                        <!-- - - - - - - - - - - - - - Review body - - - - - - - - - - - - - - - - -->
                                                        <div class="review-body">
                                                            <div class="review-meta">
                                                                
                                                                <h5 class="bold">Good Quality</h5>
                                                                Review by <a href="#" class="bold">Ivana Wrong</a> on 12/4/2014
                                                            </div>
                                                            <p>Aliquam Erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
                                                        </div>
                                                        <!-- - - - - - - - - - - - - - End of review body - - - - - - - - - - - - - - - - -->
                                                    </article>
                                                    <!-- - - - - - - - - - - - - - End of review - - - - - - - - - - - - - - - - -->
                                                </li>
                                                <li>
                                                    <!-- - - - - - - - - - - - - - Review - - - - - - - - - - - - - - - - -->
                                                    
                                                    <article class="review">
                                                        <!-- - - - - - - - - - - - - - Rates - - - - - - - - - - - - - - - - -->
                                                        <ul class="review-rates">
                                                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                
                                                                <span class="name">Price</span>
                                                                <ul class="rating">
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of price - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Value - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                
                                                                <span class="name">Value</span>
                                                                <ul class="rating">
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of value - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Quality - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                
                                                                <span class="name">Quality</span>
                                                                <ul class="rating">
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of quality - - - - - - - - - - - - - - - - -->
                                                        </ul>
                                                        <!-- - - - - - - - - - - - - - End of rates - - - - - - - - - - - - - - - - -->
                                                        <!-- - - - - - - - - - - - - - Review body - - - - - - - - - - - - - - - - -->
                                                        <div class="review-body">
                                                            <div class="review-meta">
                                                                
                                                                <h5 class="bold">Excelent</h5>
                                                                Review by <a href="#" class="bold">Bradley Grosh</a> on 26/3/2014
                                                            </div>
                                                            <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>
                                                        </div>
                                                        <!-- - - - - - - - - - - - - - End of review body - - - - - - - - - - - - - - - - -->
                                                    </article>
                                                    <!-- - - - - - - - - - - - - - End of review - - - - - - - - - - - - - - - - -->
                                                </li>
                                                <li>
                                                    <!-- - - - - - - - - - - - - - Review - - - - - - - - - - - - - - - - -->
                                                    
                                                    <article class="review">
                                                        <!-- - - - - - - - - - - - - - Rates - - - - - - - - - - - - - - - - -->
                                                        <ul class="review-rates">
                                                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                
                                                                <span class="name">Price</span>
                                                                <ul class="rating">
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li></li>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of price - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Value - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                
                                                                <span class="name">Value</span>
                                                                <ul class="rating">
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of value - - - - - - - - - - - - - - - - -->
                                                            <!-- - - - - - - - - - - - - - Quality - - - - - - - - - - - - - - - - -->
                                                            <li class="v_centered">
                                                                
                                                                <span class="name">Quality</span>
                                                                <ul class="rating">
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li class="active"></li>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <!-- - - - - - - - - - - - - - End of quality - - - - - - - - - - - - - - - - -->
                                                        </ul>
                                                        <!-- - - - - - - - - - - - - - End of rates - - - - - - - - - - - - - - - - -->
                                                        <!-- - - - - - - - - - - - - - Review body - - - - - - - - - - - - - - - - -->
                                                        <div class="review-body">
                                                            <div class="review-meta">
                                                                
                                                                <h5 class="bold">Fast Shipping</h5>
                                                                Review by <a href="#" class="bold">Alan Smith</a> on 4/3/2014
                                                            </div>
                                                            <p>Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>
                                                        </div>
                                                        <!-- - - - - - - - - - - - - - End of review body - - - - - - - - - - - - - - - - -->
                                                    </article>
                                                    <!-- - - - - - - - - - - - - - End of review - - - - - - - - - - - - - - - - -->
                                                </li>
                                            </ul>
                                            <a href="#" class="button_grey middle_btn">Show All</a>
                                        </section><!--/ .section_offset -->
                                        <section class="section_offset">
                                            <h3>Write Your Own Review</h3>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-6">
                                                    <p>You're reviewing: <a href="#">Metus nulla facilisi, Original 24 fl oz</a><br>How do you rate this product? *</p>
                                                    <!-- - - - - - - - - - - - - - Rate the - - - - - - - - - - - - - - - - -->
                                                    <div class="table_wrap rate_table">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                        
                                                                    <th></th>
                                                                    <th>1 Star</th>
                                                                    <th>2 Stars</th>
                                                                    <th>3 Stars</th>
                                                                    <th>4 Stars</th>
                                                                    <th>5 Stars</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    
                                                                    <td>Price</td>
                                                                    <td>
                                                                            
                                                                        <input checked type="radio" name="price_rate" id="rate_1">
                                                                        <label for="rate_1"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="price_rate" id="rate_2">
                                                                        <label for="rate_2"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="price_rate" id="rate_3">
                                                                        <label for="rate_3"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="price_rate" id="rate_4">
                                                                        <label for="rate_4"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="price_rate" id="rate_5">
                                                                        <label for="rate_5"></label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    
                                                                    <td>Value</td>
                                                                    <td>
                                                                            
                                                                        <input checked type="radio" name="value_rate" id="rate_6">
                                                                        <label for="rate_6"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="value_rate" id="rate_7">
                                                                        <label for="rate_7"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="value_rate" id="rate_8">
                                                                        <label for="rate_8"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="value_rate" id="rate_9">
                                                                        <label for="rate_9"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="value_rate" id="rate_10">
                                                                        <label for="rate_10"></label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    
                                                                    <td>Quality</td>
                                                                    <td>
                                                                            
                                                                        <input checked type="radio" name="quality_rate" id="rate_11">
                                                                        <label for="rate_11"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="quality_rate" id="rate_12">
                                                                        <label for="rate_12"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="quality_rate" id="rate_13">
                                                                        <label for="rate_13"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="quality_rate" id="rate_14">
                                                                        <label for="rate_14"></label>
                                                                    </td>
                                                                    <td>
                                                                            
                                                                        <input type="radio" name="quality_rate" id="rate_15">
                                                                        <label for="rate_15"></label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- - - - - - - - - - - - - - End of rate the - - - - - - - - - - - - - - - - -->
                                                </div><!--/ [col]-->
                                                <div class="col-lg-7 col-md-6">
                                                    <p class="subcaption">All fields are required.</p>
                                                    <!-- - - - - - - - - - - - - - Review form - - - - - - - - - - - - - - - - -->
                                                    <form class="type_2">
                                                        <ul>
                                                            <li class="row">
                                                                <div class="col-sm-6">
                                                                    
                                                                    <label for="nickname">Nickname</label>
                                                                    <input type="text" name="" id="nickname">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    
                                                                    <label for="summary">Summary of Your Review</label>
                                                                    <input type="text" name="" id="summary">
                                                                </div>
                                                            </li>
                                                            <li class="row">
                                                                <div class="col-xs-12">
                                                                    <label for="review_message">Review</label>
                                                                    <textarea rows="5" id="review_message"></textarea>
                                                                </div>
                                                            </li>
                                                            <li class="row">
                                                                <div class="col-xs-12">
                                                                
                                                                    <button class="button_dark_grey middle_btn">Submit Review</button>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </form>
                                                    <!-- - - - - - - - - - - - - - End of review form - - - - - - - - - - - - - - - - -->
                                                </div>
                                            </div><!--/ .row -->
                                        </section><!--/ .section_offset -->
                                    </div><!--/ #tab-3-->
                                    <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->
                                    <div id="tab-4" class="tab_container">
                                        <!-- - - - - - - - - - - - - - Youtube video - - - - - - - - - - - - - - - - -->
                                        <div class="video_wrap">
                                        </div><!--/ .video_wrap -->
                                        <!-- - - - - - - - - - - - - - End of youtube video - - - - - - - - - - - - - - - - -->
                                    </div><!--/ #tab-4-->
                                    <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->
                                </div><!--/ .tab_containers_wrap -->
                                <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->
                            </div><!--/ .tabs-->
                        </div><!--/ .section_offset -->
                        <!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->
                        <!-- - - - - - - - - - - - - - Related products - - - - - - - - - - - - - - - - -->
                        <section class="section_offset">
                            <h3 class="offset_title">Related Products</h3>
                            <!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->
                            <div class="owl_carousel five_items">
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_24.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                    <div class="label_new">New</div>
                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Leo vel metus nulla facilisi etiam cursus 750mg, Softgels 120 ea</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$44.99</b></p>
                                        </div>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_25.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Vestibulum libero nisl, porta vel 30</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$39.99</b></p>
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
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_26.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                    <div class="label_hot">Hot</div>
                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Nam elit agna, endrerit sit amet, tincidunt ac, viverra, 2.5 fl oz (75ml)</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$14.99</b></p>
                                        </div>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_27.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Dictum magna sed laoreet aliquam, Capsules 60 ea</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$27.99</b></p>
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
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_28.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Ut tellus dolor dapibus eget elementum ut tellus dolor 5 ea</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$11.99</b></p>
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
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_24.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                    <div class="label_new">New</div>
                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Leo vel metus nulla facilisi etiam cursus 750mg, Softgels 120 ea</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$44.99</b></p>
                                        </div>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_25.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Vestibulum libero nisl, porta vel 30</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$39.99</b></p>
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
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_26.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
                                    <div class="label_hot">Hot</div>
                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Nam elit agna, endrerit sit amet, tincidunt ac, viverra, 2.5 fl oz (75ml)</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$14.99</b></p>
                                        </div>
                                    </div>
                                    <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_27.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Dictum magna sed laoreet aliquam, Capsules 60 ea</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$27.99</b></p>
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
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                                <div class="product_item">
                                    <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->
                                    <div class="image_wrap">
                                        <img src="/images/product_img_28.jpg" alt="">
                                        <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                        <div class="actions_wrap">
                                            <div class="centered_buttons">
                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                                                <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>
                                            </div><!--/ .centered_buttons -->
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
                                            <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
                                        </div><!--/ .actions_wrap-->
                                        
                                        <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
                                    </div><!--/. image_wrap-->
                                    <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->
                                    <div class="description">
                                        <a href="#">Ut tellus dolor dapibus eget elementum ut tellus dolor 5 ea</a>
                                        <div class="clearfix product_info">
                                            <p class="product_price alignleft"><b>$11.99</b></p>
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
                                </div><!--/ .product_item-->
                                
                                <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                            </div><!--/ .owl_carousel.five_items-->
                            <!-- - - - - - - - - - - - - - End of featured products - - - - - - - - - - - - - - - - -->
                        </section><!--/ .section_offset-->
                        <!-- - - - - - - - - - - - - - End of related products - - - - - - - - - - - - - - - - -->
                    </div><!--/ .container-->
                </div><!--/ .page_wrapper-->
                <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->   
            </div>
        </div>
    </div>
</div>

@endsection