@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                @if(session()->has('message'))
                    <div class="alert_box success">
                        {{ session()->get('message') }}
                        <button class="close"></button>
                    </div>
                @endif
                <span>Ако вече имате регистрация в магазина ни, можете да използвате формата в ляво за директно влизане във вашия профил. Ако все още нямате регистрация можете да си направите такава, използвайки формата в дясно. Възползвайте се от всички възможности, които Ви предлага регистрацията при нас.</span>
                <!-- Content section Start -->
                <div class="theme_box">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Вече имам регистрация</h3>
                            <form class="login-form" id="login_form" name="login_form" action="{{ route('user-login') }}" method="post">
                                @csrf
                                <ul>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="login_email">E-mail</label>
                                            <div class="form_el">
                                                <input type="email" id="login_email" class="form-control" name="login_email" placeholder="Потребителски e-mail">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="login_password">Парола</label>
                                            <div class="form_el">
                                                <input type="password" id="login_password" name="login_password" class="form-control" placeholder="Парола">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <div class="form_el">
                                                <a class="forgetpassword" href="{{ route('password-reset') }}">Забравена парола?</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <div class="form_el">
                                                <div style="display:flex;flex-derection:column;justify-content:space-between;">
                                                    <button type="submit" class="button_dark_grey middle_btn">Вход</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                            <hr />
                            <a type="button" href="{{ route('login-github') }}" class="button_dark_grey middle_btn">Facebook</a>
                        </div>

                        <div class="col-sm-6">
                            <h3>Създай регистрация</h3>
                            <form class="login-form" id="register_form" name="register_form" action="{{ route('user-register') }}" method="post">
                                @csrf
                                <ul>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="register_name">Име</label>
                                            <div class="form_el">
                                                <input type="text" id="register_name" class="form-control" name="register_name" placeholder="Име">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="register_email">E-mail</label>
                                            <div class="form_el">
                                                <input type="email" id="register_email" class="form-control" name="register_email" placeholder="Потребителски e-mail">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="register_password">Парола</label>
                                            <div class="form_el">
                                                <input type="password" id="register_password" name="register_password" class="form-control" placeholder="Парола">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="register_password_again">Повтори паролата</label>
                                            <div class="form_el">
                                                <input type="password" id="register_password_again" name="register_password_again" class="form-control" placeholder="Повтори паролата">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <div class="form_el">
                                                <input type="checkbox" class="custom-control-input" id="checkedall" name="checkedall">
                                                <label for="checkedall">Регистрирайки се Вие приемате нашите <a href="{{ route('terms') }}" target="_blank">Общи условия</a></label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12" style="padding-top:10px;">
                                            @if(env('GOOGLE_RECAPTCHA_KEY'))
                                            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                                            </div>
                                            @endif
                                        </div>
                                        <!--/ [col]-->
                                    </li>
                                    <!--/ .row -->
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <div class="form_el">
                                                <button type="submit" class="button_dark_grey middle_btn">Регистрация</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Content section End -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection