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
                            <li><a href="{{ route('news.all') }}">Новини</a>
                            </li>
                            <li>{{ $news->name }}</li>
                        </ul>
                        <div class="row">
                            <main class="col-md-12 col-sm-12">
                                <section class="section_offset">
                                    <h1>{{ $news->name }}</h1>
                                    <!-- - - - - - - - - - - - - - Entry - - - - - - - - - - - - - - - - -->

                                    <article class="entry single">
                                        <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->
                                        <div class="entry_meta">
                                            <div class="alignleft">
                                                @php
                                                $date = new DateTime($news->created_at);
                                                @endphp
                                                <span><i class="icon-calendar"></i>
                                                    {{ $date->format('d.m.Y H:i:s') }}</span>
                                                <span><i class="icon-user-8"></i> от {{ $news->username }}</span>
                                            </div>
                                            <div class="alignright">
                                                брой посещения: {{ $news->visits }}
                                            </div>
                                        </div>
                                        <!--/ .entry_meta-->
                                        <!-- - - - - - - - - - - - - - End of entry meta - - - - - - - - - - - - - - - - -->
                                        <h4 class="entry_title"><a href="#">{{ $news->name }}</a></h4>
                                        <p>{!! html_entity_decode($news->description) !!}</p>
                                        <!--/ .v_centered-->
                                    </article>
                                </section>
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