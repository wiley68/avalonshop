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
                            <li>Лични настройки</li>
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
                                        <li><a href="{{ route('edit-news') }}">Записване за новини</a></li>
                                        <li class="current"><a href="{{ route('person-settings') }}">Лични настройки</a></li>
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
                                <h1>Лични настройки</h1>
                                <section class="theme_box">
                                    <h4>Изтриване на профил</h4>
                                    <p>От тук можете да изтриете Вашия личен профил в нашия магазин. Моля отбележете полето за проверка за бот.</p>
                                </section>
                                <!--/ .theme_box -->
                                <!-- - - - - - - - - - - - - - Contact information - - - - - - - - - - - - - - - - -->
                                <section class="theme_box">
                                    <form enctype="multipart/form-data" action="{{ route('person-settings') }}" method="post" name="person_settings" id="person_settings">
                                        @csrf
                                        <ul>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    @if(env('GOOGLE_RECAPTCHA_KEY'))
                                                    <div class="g-recaptcha"
                                                         data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                                                    </div>
                                                    @endif                                                    
                                                </div><!--/ [col]-->
                                            </li><!--/ .row -->
            
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <button class="button_grey middle_btn">Изтрий профила</button>
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

@section('scripts')
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection