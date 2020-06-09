Данни за потребителя:
Собствено име: {{ $orderok->name }};
Фамилия: {{ $orderok->name2 }};
ЕГН: {{ $orderok->credit_egn }};
Телефон за връзка: {{ $orderok->user_phone }};
Имейл адрес: {{ $orderok->user_email }};
Данни за стоката:
Тип стока: Компютърна техника;
Марка: {{ $orderok->product_name }};
Единична цена в лева с ДДС: {{ number_format(floatval($orderok->product_price), 2, ".", "") }};
Брой стоки: {{ number_format(floatval($orderok->product_qt), 2, ".", "") }};
Обща сума в лева с ДДС: {{ number_format(floatval($orderok->product_price) * floatval($orderok->product_qt), 2, ".", "") }};
Данни за кредита:
Размер на кредита в лева: {{ number_format(floatval($orderok->product_price) * floatval($orderok->product_qt), 2, ".", "") }};
Срок на изплащане в месеца: {{ $orderok->current_meseci }};
Месечна вноска в лева: {{ $orderok->mesecna }};
Първоначална вноска в лева: 0.00;