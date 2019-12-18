Здравейте <i>{{ $orderok->receiver }}</i>,
<p>имате направена поръчка от {{$orderok->name}}</p>
 
<div>
<p><b>E-mail:</b>&nbsp;{{ $orderok->email }}</p>
<p><b>Поръчка №:</b>&nbsp;{{ $orderok->order }}</p>
@php
    switch ($orderok->shipping) {
        case 'free':
            $shipping = 'Безплатна доставка за стока над 48.00 лв.';
            break;
        case 'spedy':
            $shipping = 'Куриерска компания Спиди.';
            break;
        default:
            $shipping = 'Куриерска компания Спиди.';
            break;
    }
    switch ($orderok->payment) {
        case 'platez':
            $payment = 'Наложен платеж.';
            break;
        case 'bank':
            $payment = 'Плащане по Банков път. Банка: УниКредит Булбанк клон Горна Оряховица, IBAN: BG20UNCR70001520104558, BIC: UNCRBGSF, Основание: Поръчка №: ' . $orderok->order;
            break;
        case 'tbi':
            $payment = 'Плащане с кредит. Кредитна компания: ТБИ Банка';
            break;
        case 'uni':
            $payment = 'Плащане с кредит. Кредитна компания: УНИ Кредит';
            break;
        case 'jet':
            $payment = 'Плащане с кредит. Кредитна компания: Париба Лични Финанси';
            break;
        default:
            $payment = 'Наложен платеж.';
            break;
    }
@endphp
<p><b>Доставка:</b>&nbsp;{{ $shipping }}</p>
<p><b>Плащане:</b>&nbsp;{{ $payment }}</p>
@if (($orderok->payment == "tbi") || ($orderok->payment == "uni") || ($orderok->payment == "jet"))
    <p><b>Брой погасителни вноски:</b>&nbsp;{{ $orderok->current_meseci }}</p>
    <p><b>Месечна вноска:</b>&nbsp;{{ $orderok->mesecna }}</p>
    <p><b>ГПР:</b>&nbsp;{{ $orderok->gpr }}</p>
    <p><b>ГЛП:</b>&nbsp;{{ $orderok->glp }}</p>
    <p><b>Обща дължима сума от потребителя:</b>&nbsp;{{ $orderok->obshtozaplashtane }}</p>
@endif
</div>
