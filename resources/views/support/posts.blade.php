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
                                        @foreach ($best_supports as $best_support)
                                        <li>
                                                <article class="entry">
                                                    <a href="{{ route('support.software', ['id'=>$best_support->id]) }}" class="entry_thumb">
                                                        <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $best_support->id }}.png"
                                                        alt="{{ $best_support->name }}">
                                                    </a>
                                                    <!-- - - - - - - - - - - - - - End of thumbnail - - - - - - - - - - - - - - - - -->
                                                    <div class="wrapper">
                                                        <h6 class="entry_title"><a href="{{ route('support.software', ['id'=>$best_support->id]) }}">{{ $best_support->name }}</a></h6>
                                                        <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->
                                                        <div class="entry_meta">
                                                            @php
                                                            $date = new DateTime($best_support->created_at);
                                                            @endphp
                                                            <span><i class="icon-calendar"></i>
                                                                {{ $date->format('d.m.Y') }}
                                                            </span>
                                                        </div>
                                                        <div class="entry_meta">
                                                            <span>посещения:&nbsp;{{ $best_support->visits }}</span>
                                                        </div>
                                                        <!--/ .byline-->
                                                        <!-- - - - - - - - - - - - - - End of byline - - - - - - - - - - - - - - - - -->
                                                    </div>
                                                    <!--/ .wrapper-->
                                                </article>
                                                <!--/ .clearfix-->
                                            </li>
                                        @endforeach
                                    </ul>
                                </section>
                                <!--/ .section_offset -->
                                <!-- - - - - - - - - - - - - - End of popular posts - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Blog Tags - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Използвани етикети</h3>
                                    <div class="tags_container">
                                        <ul class="tags_cloud">
                                            @foreach ($all_tags as $all_tag)
                                                <li><a href="{{ route('support.posts', ['id'=>'all', 'tag'=>$all_tag->id]) }}" class="button_grey">{{ $all_tag->name }}</a></li>                                            
                                            @endforeach
                                        </ul>
                                        <!--/ .tags_cloud-->

                                    </div>
                                    <!--/ .tags_container-->
                                </section>
                            </aside>
                            <!--/ [col]-->
                            <main class="col-md-9 col-sm-8">
                                <h1>{{ $category_txt }}</h1>
                                <header class="top_box on_the_sides">
                                    <div class="left_side v_centered">
                                        <p>Покажи {{ $supports->firstItem() }} до {{ $supports->lastItem() }} от {{ $supports->total() }} ({{ $supports->lastPage() }} страници)</p>
                                    </div>
                                    <div class="right_side">
                                        <!-- Start Pagination -->
                                        {{ $supports->links("vendor.pagination.bootstrap-4") }}
                                        <!-- End Pagination -->
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
                                                alt="{{ $support->name }}">
                                            </a>
                                            <!-- - - - - - - - - - - - - - End of entry image - - - - - - - - - - - - - - - - -->
                                            <h4 class="entry_title"><a href="{{ route('support.software', ['id'=>$support->id]) }}">{{ $support->name }}</a></h4>
                                            <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->
                                            <div class="entry_meta">
                                                <div class="alignleft">
                                                    @php
                                                    $date = new DateTime($support->created_at);
                                                    @endphp
                                                    <span><i class="icon-calendar"></i>
                                                        {{ $date->format('d.m.Y H:i:s') }}</span>
                                                    <span>посещения:&nbsp;{{ $support->visits }}</span>
                                                    <span><i class="icon-user-8"></i> от {{ $support->username }}</span>
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
                                            </div>
                                            <!--/ .byline-->
                                            <!-- - - - - - - - - - - - - - End of entry meta - - - - - - - - - - - - - - - - -->
                                            <p>{!! html_entity_decode(HelpController::getExcerpt($support->description, 0, 500)) !!}</p>
                                            <a href="{{ route('support.software', ['id'=>$support->id]) }}" class="button_grey middle_btn">Виж подробно</a>
                                        </article>
                                        <!-- - - - - - - - - - - - - - End of entry - - - - - - - - - - - - - - - - -->
                                    </li>
                                    @endforeach
                                </ul>
                                <!-- - - - - - - - - - - - - - End of list of entries - - - - - - - - - - - - - - - - -->
                                <footer class="bottom_box on_the_sides">
                                    <div class="left_side">
                                        <p>Покажи {{ $supports->firstItem() }} до {{ $supports->lastItem() }} от {{ $supports->total() }} ({{ $supports->lastPage() }} страници)</p>
                                    </div>
                                    <div class="right_side">
                                        <!-- Start Pagination -->
                                        {{ $supports->links("vendor.pagination.bootstrap-4") }}
                                        <!-- End Pagination -->
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