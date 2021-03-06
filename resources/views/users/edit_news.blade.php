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
                            <li>Записване за новини</li>
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
                                        <li><a href="{{ route('show-reviews') }}">Моите отзиви</a></li>
                                        <li><a href="{{ route('show-favorites') }}">Любими продукти</a></li>
                                        <li class="current"><a href="{{ route('edit-news') }}">Записване за новини</a></li>
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
                                <h1>Записване за новини</h1>
                                @if(session()->has('message'))
                                <div class="alert_box success">
                                    {{ session()->get('message') }}
                                    <button class="close"></button>
                                </div>
                                @endif
                                <section class="theme_box">
                                    <h4>Промяна в настройките за получаване на новини</h4>
                                    <p>От тук можете да променяте условието дали да Ви изпращаме дадена новина, свързана с нашите продукти.</p>
                                </section>
                                <!--/ .theme_box -->
                                <!-- - - - - - - - - - - - - - Contact information - - - - - - - - - - - - - - - - -->
                                <section class="theme_box">
                                    <form class="login-form" id="isnews_form" name="isnews_form"
                                    action="{{ route('edit-news') }}" method="post">
                                    @csrf
                                    <ul>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <div class="form_el">
                                                    <input @if(Auth::user()->isnews != 0)checked="checked"@endif type="checkbox" name="isnews" id="isnews">
                                                    <label for="isnews">Записване за новини</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <div class="form_el">
                                                    <button type="submit" class="button_dark_grey middle_btn">Запиши промените</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
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