<?php use App\Product; ?>
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
                            <li>Моите отзиви</li>
                        </ul>
                        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->
                        <div class="row">
                            <aside class="col-md-3 col-sm-4">
                                <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Профил</h3>
                                    <ul class="theme_menu">
                                        <li><a href="{{ route('home') }}">Потребителски профил</a></li>
                                        <li><a href="{{ route('change-password') }}">Промяна на
                                                парола</a></li>
                                        <li><a href="{{ route('change-data') }}">Промяна данни</a></li>
                                        <li><a href="{{ route('show-orders') }}">Моите поръчки</a></li>
                                        <li class="current"><a href="{{ route('show-reviews') }}">Моите отзиви</a></li>
                                        <li><a href="{{ route('show-favorites') }}">Любими продукти</a></li>
                                        <li><a href="{{ route('edit-news') }}">Записване за новини</a></li>
                                        <li><a href="{{ route('person-settings') }}">Лични настройки</a></li>
                                    </ul>
                                </section>
                                <!--/ .section_offset -->
                                <!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">
                                        <img src="images/banner_img_10.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                            </aside>
                            <!--/ [col]-->
                            <main class="col-md-9 col-sm-8">
                                <h1>Моите отзиви</h1>
                                <section class="theme_box">
                                    <h4>Oтзиви за продукти: {{ $reviews->count() }}</h4>
                                    <p>Можете да прегледате всички Ваши отзиви.</p>
                                </section>
                                <!--/ .theme_box -->
                                <!-- - - - - - - - - - - - - - Contact information - - - - - - - - - - - - - - - - -->
                                <section class="theme_box">
                                    <table class="table_type_1 wishlist_table">
                                        <thead>
                                            <tr>
                                                <th class="product_image_col">Снимка</th>
                                                <th class="product_price_col">Дата</th>
                                                <th class="product_qty_col">Цена</th>
                                                <th class="product_qty_col">Функционалност</th>
                                                <th class="product_qty_col">Качество</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reviews as $review)
                                            @php
                                                $product = Product::where(['id' => $review->product_id])->first(); 
                                            @endphp
                                            <tr>
                                                <td data-title="Снимка">
                                                    <a title="{{ $product->name }}" href="{{ route('product', ['id' => $product->code]) }}"><img src="{{ Config::get('settings.backend') }}/dist/img/products/product_{{ $product->id }}_1.png" alt="{{ $product->name }}" onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.png'"></a>
                                                </td>
                                                @php
                                                    $newDate = date("d.m.Y H:i:s", strtotime($review->created_at));
                                                @endphp
                                                <td data-title="Дата">{{ $newDate }}</td>
                                                <td data-title="Цена">{{ $review->price }}</td>
                                                <td data-title="Функционалност">{{ $review->value }}</td>
                                                <td data-title="Качество">{{ $review->quantity }}</td>
                                            </tr>                                                
                                            @endforeach
                                        </tbody>
                                    </table>    
                                </section>
                                <!--/ .theme_box -->
                            </main>
                            <!--/ [col]-->
                        </div>
                        <!--/ .row-->
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