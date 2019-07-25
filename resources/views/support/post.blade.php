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
                                                        <span>{{ $best_support->visits }}</span>
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
                                            @foreach ($all_tags as $all_tag)
                                            <li><a href="{{ route('support.posts', ['id'=>'all', 'tag'=>$all_tag->id]) }}"
                                                    class="button_grey">{{ $all_tag->name }}</a></li>
                                            @endforeach
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
                                                <span><a href="#comments" class="comments"><i class="icon-comment"></i>
                                                        3</a></span>
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
                                        <div class="v_centered share">
                                            <span class="title">Споделете ни:</span>
                                            <div class="addthis_widget_container">
                                                <!-- AddThis Button BEGIN -->
                                                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                                    <a class="addthis_button_preferred_1"></a>
                                                    <a class="addthis_button_preferred_2"></a>
                                                    <a class="addthis_button_preferred_3"></a>
                                                    <a class="addthis_button_preferred_4"></a>
                                                    <a class="addthis_button_compact"></a>
                                                    <a class="addthis_counter addthis_bubble_style"></a>
                                                </div>
                                                <!-- AddThis Button END -->
                                            </div>
                                        </div>
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
                                                            <h6 class="entry_title"><a href="#">{{ $same_support->name }}</a></h6>
                                                            <!-- - - - - - - - - - - - - - Byline - - - - - - - - - - - - - - - - -->
                                                            <div class="entry_meta">
                                                                @php
                                                                $date = new DateTime($same_support->created_at);
                                                                @endphp
                                                                <span><i class="icon-calendar"></i>
                                                                    {{ $date->format('d.m.Y') }}</span>
                                                                <span>{{ $same_support->visits }}</span>
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
                                <!-- - - - - - - - - - - - - - Comments - - - - - - - - - - - - - - - - -->
                                <section class="section_offset" id="comments">

                                    <h3>Коментари</h3>
                                    <ol class="comments-list">
                                        <!-- - - - - - - - - - - - - - Comment (level 1) - - - - - - - - - - - - - - - - -->
                                        <li class="comment">
                                            <article>
                                                <!-- - - - - - - - - - - - - - Avatar - - - - - - - - - - - - - - - - -->

                                                <div class="avatar">
                                                    <img src="images/comment_author_photo.jpg" alt="">
                                                </div>
                                                <!-- - - - - - - - - - - - - - End of avatar - - - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Comment body - - - - - - - - - - - - - - - - -->
                                                <div class="comment-body">
                                                    <header class="comment-meta">
                                                        <h6 class="comment-author"><a href="#">John Smith</a></h6>,
                                                        2014-08-05
                                                    </header>
                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend,
                                                        elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac
                                                        turpis. Donec sit amet eros. Lorem ipsum dolor sit amet,
                                                        consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed
                                                        laoreet aliquam leo.</p>
                                                </div>
                                                <!-- - - - - - - - - - - - - - End of comment body - - - - - - - - - - - - - - - - -->
                                                <a href="#" class="button_grey icon_btn comment-reply-link"><i
                                                        class="icon-reply-4"></i></a>
                                            </article>
                                            <ol class="children">
                                                <!-- - - - - - - - - - - - - - Comment (level 2) - - - - - - - - - - - - - - - - -->
                                                <li class="comment">
                                                    <article>
                                                        <!-- - - - - - - - - - - - - - Avatar - - - - - - - - - - - - - - - - -->

                                                        <div class="avatar">
                                                            <img src="images/comment_author_photo.jpg" alt="">
                                                        </div>
                                                        <!-- - - - - - - - - - - - - - End of avatar - - - - - - - - - - - - - - - - -->
                                                        <!-- - - - - - - - - - - - - - Comment body - - - - - - - - - - - - - - - - -->
                                                        <div class="comment-body">
                                                            <header class="comment-meta">
                                                                <h6 class="comment-author"><a href="#">admin</a></h6>,
                                                                2014-08-05
                                                            </header>
                                                            <p>Ut tellus dolor, dapibus eget, elementum vel, cursus
                                                                eleifend, elit. Aenean auctor wisi et urna. Aliquam erat
                                                                volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
                                                            </p>
                                                        </div>
                                                        <!-- - - - - - - - - - - - - - End of comment body - - - - - - - - - - - - - - - - -->
                                                        <a href="#" class="button_grey icon_btn comment-reply-link"><i
                                                                class="icon-reply-4"></i></a>
                                                    </article>
                                                </li>
                                                <!-- - - - - - - - - - - - - - End of comment (level 2) - - - - - - - - - - - - - - - - -->
                                            </ol>
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of comment (level 1) - - - - - - - - - - - - - - - - -->
                                        <!-- - - - - - - - - - - - - - Comment (level 1) - - - - - - - - - - - - - - - - -->
                                        <li class="comment">
                                            <article>
                                                <!-- - - - - - - - - - - - - - Avatar - - - - - - - - - - - - - - - - -->

                                                <div class="avatar">
                                                    <img src="images/comment_author_photo.jpg" alt="">
                                                </div>
                                                <!-- - - - - - - - - - - - - - End of avatar - - - - - - - - - - - - - - - - -->
                                                <!-- - - - - - - - - - - - - - Comment body - - - - - - - - - - - - - - - - -->
                                                <div class="comment-body">
                                                    <header class="comment-meta">
                                                        <h6 class="comment-author"><a href="#">John Smith</a></h6>,
                                                        2014-08-05
                                                    </header>
                                                    <p>Vestibulum libero nisl, porta vel, scelerisque eget, malesuada
                                                        at, neque. Vivamus eget nibh.</p>
                                                </div>
                                                <!-- - - - - - - - - - - - - - End of comment body - - - - - - - - - - - - - - - - -->
                                                <a href="#" class="button_grey icon_btn comment-reply-link"><i
                                                        class="icon-reply-4"></i></a>
                                            </article>
                                        </li>
                                        <!-- - - - - - - - - - - - - - End of comment (level 1) - - - - - - - - - - - - - - - - -->
                                    </ol>
                                </section>
                                <!-- - - - - - - - - - - - - - End of comments - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Leave a comment - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Оставете коментар</h3>
                                    <div class="theme_box">
                                        <p class="form_caption">Make sure you enter the (<span class="prompt"></span>)
                                            required information where indicated. HTML code is not allowed.</p>
                                        <form class="type_2" id="leave_comment">
                                            <ul>
                                                <li class="row">

                                                    <div class="col-sm-6">
                                                        <label for="lc_name" class="required">Name</label>
                                                        <input type="text" name="" id="lc_name">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="lc_email" class="required">Email Address</label>
                                                        <input type="email" name="" id="lc_email">
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-xs-12">
                                                        <label for="lc_url">Website URL</label>
                                                        <input type="url" name="" id="lc_url">
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-xs-12">
                                                        <label for="lc_message">Message</label>
                                                        <textarea name="" id="lc_message" rows="6"></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <footer class="bottom_box">
                                        <button class="button_dark_grey middle_btn" form="leave_comment"
                                            type="submit">Submit</button>

                                    </footer>
                                </section>
                                <!-- - - - - - - - - - - - - - End leave a comment - - - - - - - - - - - - - - - - -->
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