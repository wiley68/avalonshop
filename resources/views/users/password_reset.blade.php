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
                            <h3>Забравена парола</h3>
                            <form class="reset-form" id="reset_form" name="reset_form" action="{{ route('password-reset') }}" method="post">
                                @csrf
                                <ul>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <label for="reset_email">E-mail</label>
                                            <div class="form_el">
                                                <input type="email" id="reset_email" class="form-control" name="reset_email" placeholder="Потребителски e-mail">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="col-xs-12">
                                            <div class="form_el">
                                                <div style="display:flex;flex-derection:column;justify-content:space-between;">
                                                    <button type="submit" class="button_dark_grey middle_btn">Изпрати</button>
                                                </div>
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