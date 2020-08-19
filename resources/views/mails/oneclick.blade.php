Здравейте <i>{{ $oneclick->receiver }}</i>,
<p>имате покупка на продукт от телефон {{$oneclick->phone}}</p>
 
<div>
    @foreach ($oneclick->products as $product)
        <p><b>Продукт:</b>&nbsp;{{ $product["id"] }}, <b>Кол.:</b>&nbsp;{{ $product["qt"] }}</p> 
    @endforeach
</div>
