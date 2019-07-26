Здравейте <i>{{ $contactus->receiver }}</i>,
<p>имате изпратено запитване от {{$contactus->name}}</p>
 
<div>
<p><b>E-mail:</b>&nbsp;{{ $contactus->email }}</p>
<p><b>Съобщение:</b>&nbsp;{!! $contactus->message !!}</p>
</div>
