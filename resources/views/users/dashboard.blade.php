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
                            <li>Потребителски профил</li>
                        </ul>
                        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->
                        <div class="row">
                            <aside class="col-md-3 col-sm-4">
                                <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Профил</h3>
                                    <ul class="theme_menu">
                                        <li class="current"><a href="{{ route('home') }}">Потребителски профил</a></li>
                                        <li><a href="{{ route('change-password') }}">Промяна на парола</a></li>
                                        <li><a href="{{ route('change-data') }}">Промяна данни</a></li>
                                        <li><a href="{{ route('show-orders') }}">Моите поръчки</a></li>
                                        <li><a href="{{ route('show-reviews') }}">Моите отзиви</a></li>
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
                                <h1>Потребителски профил</h1>
                                @if(session()->has('message'))
                                <div class="alert_box success">
                                    {{ session()->get('message') }}
                                    <button class="close"></button>
                                </div>
                                @endif
                                <section class="theme_box">
                                    <h4>Здравейте, {{ Auth::user()->name }}!</h4>
                                    <p>От Вашия Панел на потребителски профил, Вие ще имате възможност да следите
                                        историята на Вашите поръчки, да променяте всички ваши лични данни, и да
                                        управлявате Вашия профил.</p>
                                </section>
                                <!--/ .theme_box -->
                                <!-- - - - - - - - - - - - - - Contact information - - - - - - - - - - - - - - - - -->
                                <section class="theme_box">
                                    <h4>Информация за контакт</h4>
                                    <p>{{ Auth::user()->name }}<br><a class="mail_to">{{ Auth::user()->email }}</a></p>
                                    <div class="buttons_row">
                                        <a href="{{ route('change-data') }}" class="button_grey middle_btn">Промяна на
                                            данни</a>
                                        <a href="{{ route('change-password') }}" class="button_grey middle_btn">Промяна
                                            на парола</a>
                                    </div>
                                </section>
                                <!--/ .theme_box -->
                                <!-- - - - - - - - - - - - - - End of contact information - - - - - - - - - - - - - - - - -->
                                <div class="table_layout">
                                    <div class="table_row">
                                        <div class="table_cell">
                                            <!-- - - - - - - - - - - - - - Newsletter - - - - - - - - - - - - - - - - -->
                                            <section>
                                                <h4>Съобщения</h4>
                                                <p>В момента не сте абониран за получаване на съобщения</p>
                                                <a href="{{ route('edit-news') }}" class="button_grey middle_btn">Промени абонамента</a>
                                            </section>
                                            <!-- - - - - - - - - - - - - - End of newsletter - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .table_cell -->
                                        <div class="table_cell">
                                            <!-- - - - - - - - - - - - - - Address book - - - - - - - - - - - - - - - - -->
                                            <section>
                                                <h4>Адресни данни</h4>
                                                <a href="{{ route('change-data') }}" class="button_grey middle_btn">Промени данните</a>
                                            </section>
                                            <!-- - - - - - - - - - - - - - End of address book - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .table_cell -->
                                    </div>
                                    <!--/ .table_row -->
                                    <div class="table_row">

                                        <div class="table_cell">
                                            <!-- - - - - - - - - - - - - - Default billing address - - - - - - - - - - - - - - - - -->
                                            <section>
                                                <h4>Адрес за изпращане на документи</h4>
                                                <p>{{ Auth::user()->city }},&nbsp;{{ Auth::user()->address }},&nbsp;{{ Auth::user()->phone }}
                                                </p>
                                                <a href="{{ route('change-data') }}" class="button_grey middle_btn">Промени адреса</a>
                                            </section>
                                            <!-- - - - - - - - - - - - - - End of default billing address - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .table_cell -->
                                        <div class="table_cell">
                                            <!-- - - - - - - - - - - - - - Default shipping address - - - - - - - - - - - - - - - - -->
                                            <section>
                                                <h4>Адрес за изпращане на стока</h4>
                                                <p>{{ Auth::user()->city2 }},&nbsp;{{ Auth::user()->address2 }},&nbsp;{{ Auth::user()->phone2 }}
                                                </p>
                                                <a href="{{ route('change-data') }}" class="button_grey middle_btn">Промени адреса</a>
                                            </section>
                                            <!-- - - - - - - - - - - - - - End of default shipping address - - - - - - - - - - - - - - - - -->
                                        </div>
                                        <!--/ .table_cell -->
                                    </div>
                                    <!--/ .table_row -->
                                </div>
                                <!--/ .table_layout -->
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