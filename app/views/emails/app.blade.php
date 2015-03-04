<h1>Новая заявка от CompNet.kz</h1>

<b>Заявка</b> от {{ $name }},<br>
@if(isset($email))
  <b>Email:</b> {{ $email }},<br>
@endif
<b>Телефон:</b> {{ $phone }},<br>

<h2>IT Аутсорсинг</h2>
@foreach($it_outsourcing as $key => $value)
<b>{{ $key }}:</b> {{ $value }}<br>
@endforeach
<hr>

<h2>Web Разработка</h2>
@foreach($web_development as $key => $value)
<b>{{ $key }}:</b> {{ $value }}<br>
@endforeach
<hr>

<h2>SEO &amp; SMM</h2>
@foreach($seo_smm as $key => $value)
<b>{{ $key }}:</b> {{ $value }}<br>
@endforeach

<h2>Учебный Центр</h2>
@foreach($training_center as $key => $value)
<b>{{ $key }}:</b> {{ $value }}<br>
@endforeach

<br><br>
<a href="www.compnet.kz" target="_blank">www.compnet.kz</a>
