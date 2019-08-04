@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
            <h3>Ако вече имате регистрация в магазина ни, можете да използвате формата в ляво за директно влизане във вашия профил. Ако все още нямате регистрация можете да си направите такава, използвайки формата в дясно. Възползвайте се от всички възможности, които Ви предлага регистрацията при нас.</h3>
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
   										<label for="input_1">E-mail</label>
										<div class="form_el">
                                            <input type="email" id="login_email" class="form-control" name="login_email" placeholder="Потребителски e-mail">
										</div>
									</div>
								</li>
                                <li class="row">
                                    <div class="col-xs-12">
                                        <label for="input_1">Парола</label>
                                        <div class="form_el">
                                            <input type="password" id="login_password" name="login_password" class="form-control" placeholder="Парола">
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-xs-12">
                                        <div class="form_el">
                                            <a class="forgetpassword" href="#">Забравена парола?</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-xs-12">
                                        <div class="form_el">
                                            <button type="submit" class="button_dark_grey middle_btn">Вход</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            </form>
                        </div>

                        <div class="col-sm-6">
                            <h3>Създай регистрация</h3>
                            <form class="login-form" id="register_form" name="register_form" action="{{ route('user-register') }}" method="post">
                            @csrf
                            <ul>
                                <li class="row">
                                    <div class="col-xs-12">
                                        <label for="input_1">Име</label>
                                        <div class="form_el">
                                            <input type="text" id="register_name" class="form-control" name="register_name" placeholder="Име">
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-xs-12">
                                        <label for="input_1">E-mail</label>
                                        <div class="form_el">
                                            <input type="email" id="register_email" class="form-control" name="register_email" placeholder="Потребителски e-mail">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="lni-lock"></i>
                                <input type="password" id="register_password" name="register_password" class="form-control" placeholder="Парола">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="lni-lock"></i>
                                <input type="password" id="register_password_again" name="register_password_again" class="form-control" placeholder="Повтори паролата">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkedall">
                                <label class="custom-control-label" for="checkedall">Регистрирайки се Вие приемате нашите Правила за работа</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-common log-btn">Регистрация</button>
                        </div>
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
