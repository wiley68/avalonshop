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
                            <li>Смяна на данните на текущия потребител</li>
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
                                        <li class="current"><a href="{{ route('change-data') }}">Промяна данни</a></li>
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
                                <h1>Промяна на данни</h1>
                                @if(session()->has('message'))
                                <div class="alert_box success">
                                    {{ session()->get('message') }}
                                    <button class="close"></button>
                                </div>
                                @endif
                                <section class="theme_box">
                                    <h4>{{ Auth::user()->name }}, моля въведете данните които желаете да промените:</h4>
                                    <p>Моля въвеждайте коректно новите си данни, за да можем да поддържаме правилна комуникация с Вас! Отбелязаните в червено полета са задължителни за попълване!</p>
                                </section>
                                <!--/ .theme_box -->
                                <!-- - - - - - - - - - - - - - Contact information - - - - - - - - - - - - - - - - -->
                                <section class="theme_box">
                                    <form class="login-form" id="data_form" name="data_form"
                                        action="{{ route('change-data') }}" method="POST">
                                        @csrf
                                        <ul>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_name" class="error">Име</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_name" name="user_name"
                                                            class="form-control" placeholder="Вашите имена" value="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_email">E-mail адрес</label>
                                                    <div class="form_el">
                                                        <input type="email" disabled id="user_email" name="user_email"
                                                            class="form-control" value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <div class="form_el">
                                                        <i>Данни за доставка на документи:</i><hr />
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_phone">Телефон</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_phone" name="user_phone"
                                                            class="form-control" value="{{ Auth::user()->phone }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_phone">Населено място</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_city" name="user_city"
                                                            class="form-control" value="{{ Auth::user()->city }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_postcode">Пощенски код</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_postcode" name="user_postcode"
                                                            class="form-control" value="{{ Auth::user()->postcode }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_phone">Адрес</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_address" name="user_address"
                                                            class="form-control" value="{{ Auth::user()->address }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <div class="form_el">
                                                        <i>Данни за доставка на стоката:</i><hr />
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_phone">Телефон</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_phone2" name="user_phone2"
                                                            class="form-control" value="{{ Auth::user()->phone2 }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_phone">Населено място</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_city2" name="user_city2"
                                                            class="form-control" value="{{ Auth::user()->city2 }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_postcode">Пощенски код</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_postcode2" name="user_postcode2"
                                                            class="form-control" value="{{ Auth::user()->postcode2 }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_phone">Адрес</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_address2" name="user_address2"
                                                            class="form-control" value="{{ Auth::user()->address2 }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <div class="form_el">
                                                        <i>Данни за издаване на документи на фирма:</i><hr />
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_firm">Име на фирма</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_firm" name="user_firm"
                                                            class="form-control" value="{{ Auth::user()->firm }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_eik">ЕИК / ДДС №</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_eik" name="user_eik"
                                                            class="form-control" value="{{ Auth::user()->eik }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <label for="user_mol">МОЛ</label>
                                                    <div class="form_el">
                                                        <input type="text" id="user_mol" name="user_mol"
                                                            class="form-control" value="{{ Auth::user()->mol }}">
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-xs-12">
                                                    <div class="form_el">
                                                        <hr />
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