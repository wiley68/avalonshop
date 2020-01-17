<?php use App\Product; ?>
Здравейте <i>{{ $orderuser->name }}</i>,
<p>Благодарим Ви за направената поръчка!</p>
<p>Ще се свържем с Вас за уточняване и потвърждение на направената поръчка.</p>
@auth
<p>Междувременно можете да използвате следния линк за проследяване на състоянието на Вашата поръчка. Към <a
        href="{{ route('show-order', ['id' => $orderuser->order]) }}">поръчката</a></p>
@endauth
<div>
    <p>Закупената от Вас стока:</p>
    <table>
        <thead>
            <tr>
                <th class="product_title_col">Продукт</th>
                <th class="product_sku_col">КОД</th>
                <th class="product_price_col">Цена</th>
                <th class="product_qty_col">Колич.</th>
                <th class="product_total_col">Об. цена</th>
            </tr>
        </thead>
        <tbody>
            @php
            $all_price = 0;
            @endphp
            @foreach ($orderuser->suborders as $suborder)
            @php
            $product = Product::where(['id' => $suborder->product_id])->first();
            $all_price += floatval($suborder->total_price);
            @endphp
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $suborder->product_quantity }}</td>
                <td>{{ $suborder->total_price }}&nbsp;лв.</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Обща цена</td>
                <td>{{ number_format($all_price, 2, ".", "") }}&nbsp;лв.</td>
            </tr>
        </tfoot>
    </table>
    <br />
    @php
    switch ($orderuser->shipping) {
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
    switch ($orderuser->payment) {
    case 'platez':
    $payment = 'Наложен платеж.';
    break;
    case 'bank':
    $payment = 'Плащане по Банков път. Банка: УниКредит Булбанк клон Горна Оряховица, IBAN: BG20UNCR70001520104558, BIC:
    UNCRBGSF, Основание: Поръчка №: ' . $orderuser->order;
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
    @if (($orderuser->payment == "tbi") || ($orderuser->payment == "uni") || ($orderuser->payment == "jet"))
    <p><b>Брой погасителни вноски:</b>&nbsp;{{ $orderuser->current_meseci }}</p>
    <p><b>Месечна вноска:</b>&nbsp;{{ $orderuser->mesecna }}</p>
    <p><b>ГПР:</b>&nbsp;{{ $orderuser->gpr }}</p>
    <p><b>ГЛП:</b>&nbsp;{{ $orderuser->glp }}</p>
    <p><b>Обща дължима сума от потребителя:</b>&nbsp;{{ $orderuser->obshtozaplashtane }}</p>
    @endif
    <br />
    <p>Благодарим Ви за направената поръчка!</p>
</div>