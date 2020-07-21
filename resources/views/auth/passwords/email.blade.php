@php
    use App\Category;
    $root_categories = Category::where(['parent_id' => 0])->get();
    $title = "Вход или регистрация в електронния магазин' . ' | Авалон";
    $description = "Вход или регистрация в електронния магазин";
    $keywords = "вход, регистрация, онлайн магазин"; 
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
                            <h3>Забравена парола</h3>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="reset-form" id="reset_form" name="reset_form" method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Потребителски e-mail" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-xs-12">
                                        <div class="form_el">
                                            <div style="display:flex;flex-derection:column;justify-content:space-between;">
                                                <button type="submit" class="button_dark_grey middle_btn">Изпрати</button>
                                            </div>
                                        </div>
                                    </div>
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
