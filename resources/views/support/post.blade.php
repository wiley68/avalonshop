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
                            <li>{{ $support->name }}</li>
                        </ul>
                        <div class="row">
                            <aside class="col-md-3 col-sm-4">
                                <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Категории</h3>
                                    <ul class="theme_menu">
                                        <li><a href="{{ route('support.posts', ['id'=>'gamings']) }}">Игрални
                                                компютри</a></li>
                                        <li><a href="{{ route('support.posts', ['id'=>'offices']) }}">Офис компютри</a>
                                        </li>
                                        <li><a href="{{ route('support.posts', ['id'=>'printers']) }}">Принтери и
                                                Копири</a></li>
                                        <li><a href="{{ route('support.posts', ['id'=>'instalations']) }}">Инсталация и
                                                настройки</a></li>
                                        <li><a href="{{ route('support.posts', ['id'=>'networks']) }}">Локални Мрежи</a>
                                        </li>
                                        <li><a href="{{ route('support.posts', ['id'=>'cameras']) }}">Камери и
                                                Охрана</a></li>
                                        <li><a href="{{ route('support.posts', ['id'=>'softwares']) }}">Софтуер</a></li>
                                        <li><a href="{{ route('support.posts', ['id'=>'all']) }}">Виж всички</a></li>
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
                                                <a href="{{ route('support.software', ['id'=>$best_support->id]) }}"
                                                    class="entry_thumb">
                                                    <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $best_support->id }}.png"
                                                        alt="{{ $best_support->name }}"
                                                        onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.jpg'">
                                                </a>
                                                <!-- - - - - - - - - - - - - - End of thumbnail - - - - - - - - - - - - - - - - -->
                                                <div class="wrapper">
                                                    <h6 class="entry_title"><a
                                                            href="{{ route('support.software', ['id'=>$best_support->id]) }}">{{ $best_support->name }}</a>
                                                    </h6>
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
                                            <li><a href="{{ route('support.posts', ['id'=>'all', 'tag'=>$all_tag->id]) }}"
                                                    class="button_grey">{{ $all_tag->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <!--/ .tags_cloud-->

                                    </div>
                                    <!--/ .tags_container-->
                                </section>
                            </aside>
                            <!--/ [col]-->
                            <main class="col-md-9 col-sm-8">
                                <section class="section_offset">
                                    <h1>{{ $support->name }}</h1>
                                    <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->

                                    <article class="entry single">
                                        <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->
                                        <div class="entry_meta">
                                            <div class="alignleft">
                                                @php
                                                $date = new DateTime($support->created_at);
                                                @endphp
                                                <span><i class="icon-calendar"></i>
                                                    {{ $date->format('d.m.Y H:i:s') }}</span>
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
                                                <span><i class="icon-folder-open-empty-1"></i> <a
                                                        href="{{ route('support.posts', ['id'=>$support->category_id]) }}">{{ $category_txt }}</a></span>
                                            </div>
                                            <div class="alignright">
                                                брой посещения: {{ $support->visits }}
                                            </div>
                                        </div>
                                        <!--/ .entry_meta-->
                                        <!-- - - - - - - - - - - - - - End of entry meta - - - - - - - - - - - - - - - - -->
                                        <h4 class="entry_title"><a href="#">{{ $support->name }}</a></h4>
                                        <p>{!! html_entity_decode($support->description) !!}</p>
                                        <!--/ .v_centered-->
                                    </article>
                                    <!-- - - - - - - - - - - - - - End of entry - - - - - - - - - - - - - - - - -->
                                    <footer class="bottom_box">
                                        Етикети:
                                        @for ($i = 0; $i < $tags->count(); $i++)
                                            @if ($i == $tags->count() - 1)
                                            <a
                                                href="{{ route('support.posts', ['id'=>'all', 'tag'=>$tags[$i]->id]) }}">{{ $tags[$i]->name }}</a>
                                            @else
                                            <a
                                                href="{{ route('support.posts', ['id'=>'all', 'tag'=>$tags[$i]->id]) }}">{{ $tags[$i]->name }}</a>,&nbsp;
                                            @endif
                                            @endfor
                                    </footer>
                                </section>
                                <!-- - - - - - - - - - - - - - Related posts - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">

                                    <h3>Близки теми</h3>
                                    <div class="table_layout related_posts">
                                        <div class="table_row">
                                            @foreach ($same_supports as $same_support)
                                            <div class="table_cell">
                                                    <article class="entry">
                                                        <a href="{{ route('support.software', ['id'=>$same_support->id]) }}" class="entry_thumb">
                                                            <img src="{{ Config::get('settings.backend') }}/dist/img/supports/support_{{ $same_support->id }}.png"
                                                            alt="{{ $same_support->name }}"
                                                            onerror="this.src='{{ Config::get('settings.backend') }}/dist/img/noimage.jpg'">
                                                        </a>
                                                        <!-- - - - - - - - - - - - - - End of thumbnail - - - - - - - - - - - - - - - - -->
                                                        <div class="wrapper">
                                                            <h6 class="entry_title"><a href="{{ route('support.software', ['id'=>$same_support->id]) }}">{{ $same_support->name }}</a></h6>
                                                            <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->
                                                            <div class="entry_meta">
                                                                @php
                                                                $date = new DateTime($same_support->created_at);
                                                                @endphp
                                                                <span><i class="icon-calendar"></i>
                                                                    {{ $date->format('d.m.Y') }}</span>
                                                            </div>
                                                            <div class="entry_meta">
                                                                <span>посещения:&nbsp;{{ $same_support->visits }}</span>
                                                            </div>
                                                            <!--/ .byline-->
                                                            <!-- - - - - - - - - - - - - - End of byline - - - - - - - - - - - - - - - - -->
                                                        </div>
                                                        <!--/ .wrapper-->
                                                    </article>
                                                    <!--/ .clearfix-->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                                <!-- - - - - - - - - - - - - - End related posts - - - - - - - - - - - - - - - - -->
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