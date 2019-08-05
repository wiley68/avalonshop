@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
    		<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->
	    	<ul class="breadcrumbs">
                <li><a href="{{ route('index') }}">Начало</a></li>
                <li>Смяна на паролата на текущия потребител</li>
            </ul>
            <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->
            <div class="row">
                <h3>Смяна на паролата на текущия потребител: {{ Auth::user()->name }}</h3>
                <!-- Content section Start -->
                <div class="theme_box">
                    <div class="row">
                        <aside class="col-md-3 col-sm-4">
                            <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->
                            <section class="section_offset">
                                <h3>Профил</h3>
                                <ul class="theme_menu">
                                    <li><a href="{{ route('home') }}">Потребителски профил</a></li>
                                    <li class="current"><a href="{{ route('change-password') }}">Промяна на парола</a>
                                    </li>
                                    <li><a href="#">Промяна данни</a></li>
                                    <li><a href="#">Моите поръчки</a></li>
                                    <li><a href="#">Моите отзиви</a></li>
                                    <li><a href="#">Любими продукти</a></li>
                                    <li><a href="#">Записване за новини</a></li>
                                    <li><a href="#">Лични настройки</a></li>
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
                            <h1>Въведете данни за смяна на паролата:</h1>
                            <form class="login-form" id="register_form" name="register_form"
                                action="{{ route('change-password') }}" method="post">
                                @csrf
                                <ul>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="old_password">Стара Парола</label>
                                            <div class="form_el">
                                                <input type="password" id="old_password" name="old_password"
                                                    class="form-control" placeholder="Въведи парола">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="new_password">Нова Парола</label>
                                            <div class="form_el">
                                                <input type="password" id="new_password" name="new_password"
                                                    class="form-control" placeholder="Въведи парола">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="register_password_again">Повтори паролата</label>
                                            <div class="form_el">
                                                <input type="password" id="register_password_again"
                                                    name="register_password_again" class="form-control"
                                                    placeholder="Повтори паролата">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <div class="form_el">
                                                <button type="submit" class="button_dark_grey middle_btn">Смени
                                                    паролата</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </main>
                        <!--/ [col]-->
                    </div>
                </div>
                <!-- Content section End -->
            </div>
        </div>
    </div>
</div>

@endsection