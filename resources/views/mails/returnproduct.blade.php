Здравейте <i>{{ $returnproduct->receiver }}</i>,
<p>имате заявка за връщане на продукт от {{$returnproduct->name}} {{$returnproduct->last_name}}</p>
 
<div>
<p><b>Име:</b>&nbsp;{{ $returnproduct->name }}</p>
<p><b>Фамилия:</b>&nbsp;{{ $returnproduct->last_name }}</p>
<p><b>E-Mail:</b>&nbsp;{{ $returnproduct->email }}</p>
<p><b>Телефон:</b>&nbsp;{{ $returnproduct->phone }}</p>
<p><b>Поръчка №:</b>&nbsp;{{ $returnproduct->order }}</p>
<p><b>Име на продукта:</b>&nbsp;{{ $returnproduct->product_name }}</p>
<p><b>Код на продукта:</b>&nbsp;{{ $returnproduct->product_code }}</p>
<p><b>Количество:</b>&nbsp;{{ $returnproduct->product_qt }}</p>
<p><b>Причина:</b>&nbsp;{{ $returnproduct->pricina }}</p>
<p><b>Отварян ли е:</b>&nbsp;{{ $returnproduct->otvaran }}</p>
<p><b>Описание:</b>&nbsp;{!! $returnproduct->description !!}</p>
</div>
