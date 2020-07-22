Здравейте <i>{{ $passwordReset->name }}</i>,
<p>Вашата парола в https://avalonbg.com/ може да бъде променена. За целта натиснете следния линк:</p>
<a href="{{ route('password-change',['id' => $passwordReset->id, 'token' => $passwordReset->token]) }}">Нулиране на парола</a>
<p>Ако не сте поискали нова парола, моля игнорирайте този имейл.</p>

