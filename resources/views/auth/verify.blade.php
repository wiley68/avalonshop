@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Потвърдете Вашия Email адрес</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Беше Ви изпратен нов линк за потвърждение.
                        </div>
                    @endif

                    Преди да продължите моля проверете Вашия Email адрес за потвърждаващ линк.
                    Ако все още не сте получили Email, <a href="{{ route('verification.resend') }}">изберете линка за да Ви изпратим нов</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
