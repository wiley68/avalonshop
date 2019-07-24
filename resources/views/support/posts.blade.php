<?php use App\Http\Controllers\HelpController;?>
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
                            <li><a href="{{ route('support.posts', ['id'=>'all']) }}">Техническа поддръжка и ревюта</a>
                            </li>
                            @php
                            switch ($category_id) {
                            case 'all':
                            $category_txt = "Всички теми";
                            break;
                            case 'gamings':
                            $category_txt = "Игрални компютри";
                            break;
                            case 'offices':
                            $category_txt = "Офис компютри";
                            break;
                            case 'printers':
                            $category_txt = "Принтери и Копири";
                            break;
                            case 'instalations':
                            $category_txt = "Инсталация и настройка";
                            break;
                            case 'networks':
                            $category_txt = "Локални Мрежи";
                            break;
                            case 'cameras':
                            $category_txt = "Камери и Охрана";
                            break;
                            case 'softwares':
                            $category_txt = "Софтуер";
                            break;
                            default:
                            $category_txt = "Всички теми";
                            break;
                            }
                            @endphp
                            <li>{{ $category_txt }}</li>
                        </ul>
                        <div class="row">
                            <aside class="col-md-3 col-sm-4">
                                <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Категории</h3>
                                    <ul class="theme_menu">
                                        <li @if ($category_id=='gamings' ) class="current" @endif><a
                                                href="{{ route('support.posts', ['id'=>'gamings']) }}">Игрални
                                                компютри</a></li>
                                        <li @if ($category_id=='offices' ) class="current" @endif><a
                                                href="{{ route('support.posts', ['id'=>'offices']) }}">Офис компютри</a>
                                        </li>
                                        <li @if ($category_id=='printers' ) class="current" @endif><a
                                                href="{{ route('support.posts', ['id'=>'printers']) }}">Принтери и
                                                Копири</a></li>
                                        <li @if ($category_id=='instalations' ) class="current" @endif><a
                                                href="{{ route('support.posts', ['id'=>'instalations']) }}">Инсталация и
                                                настройки</a></li>
                                        <li @if ($category_id=='networks' ) class="current" @endif><a
                                                href="{{ route('support.posts', ['id'=>'networks']) }}">Локални
                                                Мрежи</a>
                                        </li>
                                        <li @if ($category_id=='cameras' ) class="current" @endif><a
                                                href="{{ route('support.posts', ['id'=>'cameras']) }}">Камери и
                                                Охрана</a></li>
                                        <li @if ($category_id=='softwares' ) class="current" @endif><a
                                                href="{{ route('support.posts', ['id'=>'softwares']) }}">Софтуер</a>
                                        </li>
                                        <li @if ($category_id=='all' ) class="current" @endif><a
                                                href="{{ route('support.posts', ['id'=>'all']) }}">Виж всички</a></li>
                                    </ul>
                                </section>
                                <!--/ .section_offset -->
                                <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Popular posts - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Най-търсени теми</h3>
                                    <ul class="list_of_entries">
                                        <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                                        <li>

                                            <article class="entry">

                                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
                                                <a href="#" class="entry_thumb">
                                                    <img src="images/blog_thumb_4.jpg" alt="">
                                                </a>
                                                <!-- - - - - - - - - - - - - - End of thumbnail - - - - - - - - - - - - - - - - -->
                                                <div class="wrapper">
                                                    <h6 class="entry_title"><a href="#">Lorem ipsum dolor sit amet,
                                                            consecte- tuer adipis</a></h6>
                                                    <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->
                                                    <div class="entry_meta">
                                                        <span><i class="icon-calendar"></i> 2014-08-05</span>
                                                        <span><a href="#" class="comments"><i class="icon-comment"></i>
                                                                3</a></span>
                                                    </div>
                                                    <!--/ .byline-->
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
                                                    <img src="images/blog_thumb_5.jpg" alt="">
                                                </a>
                                                <!-- - - - - - - - - - - - - - End of thumbnail - - - - - - - - - - - - - - - - -->
                                                <div class="wrapper">
                                                    <h6 class="entry_title"><a href="#">Neque porro quis- quam est,
                                                            qui</a></h6>
                                                    <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->
                                                    <div class="entry_meta">
                                                        <span><i class="icon-calendar"></i> 2014-11-06</span>
                                                        <span><a href="#" class="comments"><i class="icon-comment"></i>
                                                                7</a></span>
                                                    </div>
                                                    <!--/ .byline-->
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
                                                    <img src="images/blog_thumb_6.jpg" alt="">
                                                </a>
                                                <!-- - - - - - - - - - - - - - End of thumbnail - - - - - - - - - - - - - - - - -->
                                                <div class="wrapper">
                                                    <h6 class="entry_title"><a href="#">Mauris fermentum dictum
                                                            magna</a></h6>
                                                    <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->
                                                    <div class="entry_meta">
                                                        <span><i class="icon-calendar"></i> 2014-03-12</span>
                                                        <span><a href="#" class="comments"><i class="icon-comment"></i>
                                                                4</a></span>
                                                    </div>
                                                    <!--/ .byline-->
                                                    <!-- - - - - - - - - - - - - - End of byline - - - - - - - - - - - - - - - - -->
                                                </div>
                                                <!--/ .wrapper-->
                                            </article>
                                            <!--/ .clearfix-->
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of entry - - - - - - - - - - - - - - - - -->
                                    </ul>
                                </section>
                                <!--/ .section_offset -->
                                <!-- - - - - - - - - - - - - - End of popular posts - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">

                                        <img src="images/banner_img_10.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Recent comments - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Последни коментари</h3>
                                    <ul class="recentcomments_list">
                                        <!-- - - - - - - - - - - - - - Comment - - - - - - - - - - - - - - - - -->
                                        <li class="recentcomment">

                                            <div class="posted_by">Posted by: <a href="#">admin</a>:</div>
                                            <a href="#">Lorem ipsum dolor sit amet, con- sectetuer adipis</a>
                                            <p class="comment">Fusce euismod consequat ante. Lorem ipsum dolor sit
                                                amet...</p>
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of comment - - - - - - - - - - - - - - - - -->
                                        <!-- - - - - - - - - - - - - - Comment - - - - - - - - - - - - - - - - -->
                                        <li class="recentcomment">

                                            <div class="posted_by">Posted by: <a href="#">admin</a>:</div>
                                            <a href="#">Neque porro quisquam est, qui</a>
                                            <p class="comment">Consectetuer adipis. Mauris accumsan nulla vel diam. Sed
                                                in...</p>
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of comment - - - - - - - - - - - - - - - - -->
                                        <!-- - - - - - - - - - - - - - Comment - - - - - - - - - - - - - - - - -->
                                        <li class="recentcomment">

                                            <div class="posted_by">Posted by: <a href="#">admin</a>:</div>
                                            <a href="#">Mauris fermentum dictum magna</a>
                                            <p class="comment">Vestibulum ante ipsum primis in faucibus orci luctus et
                                                ultrices...</p>
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of comment - - - - - - - - - - - - - - - - -->
                                    </ul>
                                </section>
                                <!-- - - - - - - - - - - - - - End recent comments - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Blog Tags - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Използвани етикети</h3>
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
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">

                                        <img src="images/banner_img_11.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="#" class="banner">

                                        <img src="images/banner_img_12.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                            </aside>
                            <!--/ [col]-->
                            <main class="col-md-9 col-sm-8">
                                <h1>{{ $category_txt }}</h1>
                                <header class="top_box on_the_sides">
                                    <div class="left_side v_centered">
                                        <a href="#" class="middle_btn icon_btn social_rss tooltip_container"><i
                                                class="icon-rss"></i><span class="tooltip top">RSS</span></a>
                                        <!-- - - - - - - - - - - - - - Blog layout type - - - - - - - - - - - - - - - - -->
                                        <div class="layout_type buttons_row" data-table-container="#main_blog_list">
                                            <a href="#" data-table-layout="grid_view"
                                                class="button_grey middle_btn icon_btn tooltip_container"><i
                                                    class="icon-th"></i><span class="tooltip top">Табличен
                                                    вид</span></a>
                                            <a href="#" data-table-layout="list_view"
                                                class="button_grey middle_btn icon_btn active tooltip_container"><i
                                                    class="icon-th-list"></i><span
                                                    class="tooltip top">Листинг</span></a>
                                        </div>
                                        <!-- - - - - - - - - - - - - - End of blog layout type - - - - - - - - - - - - - - - - -->
                                        <p>Покажи 1 до 3 от 45 (15 страници)</p>
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
                                </header>
                                <!-- - - - - - - - - - - - - - List of entries - - - - - - - - - - - - - - - - -->
                                <ul id="main_blog_list" class="list_of_entries list_view">
                                    @foreach ($supports as $support)
                                    <li>
                                        <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->
                                        <article class="entry">
                                            <!-- - - - - - - - - - - - - - Entry image - - - - - - - - - - - - - - - - -->
                                            <a href="{{ route('support.software', ['id'=>$support->id]) }}"
                                                class="thumbnail entry_image">
                                                <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $support->id }}.png"
                                                    alt="{{ $support->name }}"
                                                    onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.jpg'">
                                            </a>
                                            <!-- - - - - - - - - - - - - - End of entry image - - - - - - - - - - - - - - - - -->
                                            <h4 class="entry_title"><a href="#">{{ $support->name }}</a></h4>
                                            <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->
                                            <div class="entry_meta">
                                                <div class="alignleft">
                                                    @php
                                                    $date = new DateTime($support->created_at);
                                                    @endphp
                                                    <span><i class="icon-calendar"></i>
                                                        {{ $date->format('d.m.Y H:i:s') }}</span>
                                                    <span><a href="#" class="comments"><i class="icon-comment"></i>
                                                            3</a></span>
                                                    <span><i class="icon-user-8"></i> от <a
                                                            href="#">{{ $support->username }}</a></span>
                                                    @php
                                                    switch ($support->category_id) {
                                                    case 'gamings':
                                                    $category_txt = "Игрални компютри";
                                                    break;
                                                    case 'offices':
                                                    $category_txt = "Офис компютри";
                                                    break;
                                                    case 'printers':
                                                    $category_txt = "Принтери и Копири";
                                                    break;
                                                    case 'instalations':
                                                    $category_txt = "Инсталация и настройка";
                                                    break;
                                                    case 'networks':
                                                    $category_txt = "Локални Мрежи";
                                                    break;
                                                    case 'cameras':
                                                    $category_txt = "Камери и Охрана";
                                                    break;
                                                    case 'softwares':
                                                    $category_txt = "Софтуер";
                                                    break;
                                                    default:
                                                    $category_txt = "Игрални компютри";
                                                    break;
                                                    }
                                                    @endphp
                                                    <span><i class="icon-folder-open-empty-1"></i> <a href="{{ route('support.posts', ['id'=>$support->category_id]) }}">{{ $category_txt }}</a></span>
                                                </div>
                                                <div class="alignright">
                                                    дай оценка
                                                    <!-- - - - - - - - - - - - - - Entry rating - - - - - - - - - - - - - - - - -->
                                                    <ul class="rating">
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li class="active"></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of entry rating - - - - - - - - - - - - - - - - -->
                                                    (17 оценки)
                                                </div>
                                            </div>
                                            <!--/ .byline-->
                                            <!-- - - - - - - - - - - - - - End of entry meta - - - - - - - - - - - - - - - - -->
                                            <p>{!! html_entity_decode(HelpController::getExcerpt($support->description, 0, 1000)) !!}</p>
                                            <a href="{{ route('support.software', ['id'=>$support->id]) }}" class="button_grey middle_btn">Виж подробно</a>
                                        </article>
                                        <!-- - - - - - - - - - - - - - End of entry - - - - - - - - - - - - - - - - -->
                                    </li>
                                    @endforeach
                                </ul>
                                <!-- - - - - - - - - - - - - - End of list of entries - - - - - - - - - - - - - - - - -->
                                <footer class="bottom_box on_the_sides">
                                    <div class="left_side">
                                        <p>Показани 1 до 3 от 45 (15 страници)</p>
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