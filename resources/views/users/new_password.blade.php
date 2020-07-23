@php
    $id = request()->route('id');
    $token = request()->route('token');
@endphp
@extends('layouts.design')

@section('content')
<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <!-- Content section Start -->
                <div class="theme_box">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Смяна на парола</h3>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="login-form" id="register_form" name="register_form"
                            action="{{ route('password-change',['id' => $id, 'token' => $token]) }}" method="post">
                            @csrf
                            <ul>
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
            </div>
                    </div>
                </div>
                <!-- Content section End -->
            </div>
        </div>
    </div>
</div>
@endsection
                                