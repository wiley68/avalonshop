@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                    <h4>Maxtrade INS</h4>
                    <p>Maxtrade INS, програма за регистриране на дейността на Застрахователна агенция.<br />Автоматизира работата на агенцията.<br />Води досиета на застраховките.<br />Води досиета на всички застраховани.<br />Разпределя начина на плащане на застраховките.<br />Позволява работа с разсрочено плащане на сумите.<br />Следи за навременното плащане на сумите по застраховките.<br />Позволява работа с множество застрахователни компании.<br />Генерира многобройни справки за дейността на агенцията.<br />Предупреждава при изтичащи застраховки.<br />Запазва всички детайли по дадени застраховки в база данни.<br />Позволява съхранява на базата данни за неограничено време.<br />Позволява възстановяване на данни от базата данни.<br />Разработе с помоща на платформата за разработки на PHP , Qcodo. <strong><a href="http://www.qcodo.com/" target="_blank" rel="noopener">Qcodo Development Framework</a>.</strong></p>
                    <div class="section_offset clearfix">
                    </div>
                    <div class="call_to_action">
                        <div class="on_the_sides">
                            <div class="left_side">
                                <div class="title">Maxtrade INS</div>
                                <p>Програма за регистриране на дейността на Застрахователна агенция</p>
                            </div>
                            <div class="right_side">
                                <a href="{{ route('product', ['id' => 10]) }}" class="button_blue huge_btn"><i class="icon-basket-1"></i>Купи сега! 499.00 лв.</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
