@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <section class="section_offset">
                    @if (!empty($message))
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert_box success">
                                    {!! $message !!}
                                    <button class="close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <h3>Връщане на продукти</h3>
                    <p>Моля, попълнете формуляра по-долу, за издаване на входящ номер: RMA. След получаване на съобщението Заявка за връщане на продукт, ние ще се свържем с Вас за да уточним начина на връщане на продукта и възстановяване на средствата Ви.</p>
                    <div class="theme_box">
                        <div class="row">
                            <div class="col-sm-12">
                                <form enctype="multipart/form-data" action="{{ route('vrashtane') }}" method="post" name="vrashtane" id="vrashtane" novalidate>
                                    @csrf
                                    <ul>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <h5>Информация за поръчка</h5>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="f_name">Име</label>
                                                <div class="form_el">
                                                    <input required type="text" name="f_name" id="f_name">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="f_last_name">Фамилия</label>
                                                <div class="form_el">
                                                    <input required type="text" name="f_last_name" id="f_last_name">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="f_email">E-Mail</label>
                                                <div class="form_el">
                                                    <input required type="email" name="f_email" id="f_email">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="f_phone">Телефон</label>
                                                <div class="form_el">
                                                    <input required type="text" name="f_phone" id="f_phone">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="f_order">Поръчка №</label>
                                                <div class="form_el">
                                                    <input required type="text" name="f_order" id="f_order">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <h5>Информация за продукта и причина за връщане</h5>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="f_product_name">Име на продукта</label>
                                                <div class="form_el">
                                                    <input required type="text" name="f_product_name" id="f_product_name">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="f_product_code">Код на продукта</label>
                                                <div class="form_el">
                                                    <input required type="text" name="f_product_code" id="f_product_code">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="f_product_qt">Количество</label>
                                                <div class="form_el">
                                                    <input required type="number" step="1" name="f_product_qt" id="f_product_qt">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label>Причина за връщане</label>
                                                <div class="form_el">
                                                    <input checked type="radio" name="f_pricina" id="f_pricina_povreden" value="povreden">
                                                    <label for="f_pricina_povreden">Повреден</label>
                                                    <input type="radio" name="f_pricina" id="f_pricina_greshka" value="greshka">
                                                    <label for="f_pricina_greshka">Грешна поръчка</label>
                                                    <input type="radio" name="f_pricina" id="f_pricina_other" value="other">
                                                    <label for="f_pricina_other">Друга, моля дайте подробности</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label>Продукта е отварян</label>
                                                <div class="form_el">
                                                    <input checked type="radio" name="f_otvaran" id="f_otvaran_da" value="da">
                                                    <label for="f_otvaran_da">Да</label>
                                                    <input type="radio" name="f_otvaran" id="f_otvaran_ne" value="ne">
                                                    <label for="f_otvaran_ne">Не</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-xs-12">
                                                <label for="textarea_1">Повреден или други</label>
                                                <div class="form_el">
                                                    <textarea rows="9" name="f_description" id="f_description"></textarea>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div style="padding-bottom:10px;"></div>
                                    <hr />
                                    <footer class="bottom_box on_the_sides">
                                        <div class="left_side">
                                            <button class="button_dark_grey middle_btn" type="submit">Изпрати съобщението</button>
                                        </div>
                                        <div class="right_side">
                                            <p class="prompt">задължителни за попълване полета</p>
                                        </div>
                                    </footer>
                                </form>
                                <!-- - - - - - - - - - - - - - End of form v1 - - - - - - - - - - - - - - - - -->
                            </div><!--/ [col]-->
                        </div><!--/ .row -->
                    </div><!--/ .theme_box -->
                </section><!--/ .section_offset -->
            </div>
        </div>
    </div>
</div>

@endsection