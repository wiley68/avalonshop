@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <div class="secondary_page_wrapper">
                    <div class="container">
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('index') }}">Начало</a></li>
                            <li>Направена поръчка</li>
                        </ul>
                        <h1 class="page_title">Поръчка № {{ $order->id }}</h1>
                        <p>Благодарим Ви за направената поръчка!</p>
                        <p>Ще се свържем с Вас за уточняване и потвърждение на направената поръчка.</p>
                        @auth
                        <p>Междувременно можете да използвате следния линк за проследяване на състоянието на Вашата поръчка.&nbsp;<a href="{{ route('show-order', ['id' => $order->id]) }}">Към поръчката</a></p>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
