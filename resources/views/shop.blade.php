@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <h2>Магазин гр. Горна Оряховица</h2>
                <p>Магазин гр. Горна Оряховица работи вече повече от 10 години. Ние предлагаме на своите клиенти висок
                    клас техника и професионална помощ при избора й.</p>
                <p>При нас можете да намерите всичко, от което имате нужда за вашият компютър:</p>
                <table>
                    <tbody>
                        <tr style="border-top: solid 2px black; border-left: solid 2px black; border-right: solid 2px black;">
                            <td style="padding-left: 10px;"></td>
                            <td style="padding-left: 10px;"></td>
                            <td style="padding-left: 10px;"></td>
                            <td style="padding-left: 10px;"></td>
                            <td style="padding-left: 10px;"></td>
                            <td style="padding-left: 10px;"></td>
                            <td style="padding-left: 10px;"></td>
                        </tr>
                        <tr style="border-left: solid 2px black; border-right: solid 2px black;">
                            <td style="padding-left: 10px;">* Нови<br />* Употребявани<br />* Асемблирани</td>
                            <td style="padding-left: 10px;">* Нови<br />* Употребявани</td>
                            <td style="padding-left: 10px;">* Принтери<br />* Скенери<br />* Мултифункц.     
                                устройства<br />* Консумативи</td>
                            <td style="padding-left: 10px;">* Професионални<br />* Любителски</td>
                            <td style="padding-left: 10px;">* Мишки<br />* Клавиатури<br />* Слушалки<br />*
                                Колони<br />* Уеб камери<br />* Др.</td>
                            <td style="padding-left: 10px;">* Дънни платки<br />* Процесори<br />* Вентилатори<br />*
                                Видео карти<br />* Памет<br />* Др.</td>
                            <td style="padding-left: 10px;">* Десктоп програми<br />* WEB софтуер<br />* Поръчкови
                                сайтове и програми<br />* Антивирусни програми<br />* Др.</td>
                        </tr>
                        <tr
                            style="border-bottom: solid 2px black; border-left: solid 2px black; border-right: solid 2px black;">
                            <td style="padding-left: 10px;">* Lenovo<br />* Asus<br />* Acer<br />* HP<br />* Др.</td>
                            <td style="padding-left: 10px;">* Lenovo<br />* Asus<br />* Acer<br />* HP<br />* Др.</td>
                            <td style="padding-left: 10px;">* Samsung<br />* HP<br />* Brother<br />* Epson<br />* Др.
                            </td>
                            <td style="padding-left: 10px;">* Iiyama<br />* HP<br />* LG<br />* Asus<br />* Др.</td>
                            <td style="padding-left: 10px;">* MSI<br />* Logitech<br />* A4Tech<br />* Genius<br />* Др.
                            </td>
                            <td style="padding-left: 10px;">* MSI<br />* Gigabyte<br />* Asrock<br />* Intel<br />* Др.
                            </td>
                            <td style="padding-left: 10px;">* Kaspersky<br />* Microsoft<br />* CAD<br />* Maxtrade
                                Software<br />* Др.</td>
                        </tr>
                    </tbody>
                </table>
                <p><a href="{{ route('index') }}">Можете да закупите нашите продукти онлайн</a></p>
            </div>
        </div>
    </div>
</div>

@endsection