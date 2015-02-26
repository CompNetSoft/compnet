@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('attribute', 'onload="initialize()"')

@section('content')

  <div class="container">
    <br>
    @if (Session::has('global'))
      <div class="alert alert-dismissable alert-success">{{ Session::get('global') }}</div>
    @endif
    @if ($errors->count())
      <br>
      <div class="alert alert-dismissable alert-danger">
        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif
    <h1 class="text-center text-uppercase">Контакты</h1>
    <br>
    <div id="map_canvas" style="height:400px; margin-left:auto; margin-right:auto;"></div>
  </div>

  <div class="container">
    <br><br>
    <h1 class="text-center text-uppercase">Свяжитесь с нами</h1>
    <br>
    <div class="col-md-4 col-sm-4">
      <h2 class="text-center"><i class="fa fa-map-marker fa-2x"></i></h2>
      <p class="text-center">г. Алматы, Ул. Абылай хана, дом № 34, офис 300 (уг. ул.Маметовой)</p>
      <br>
    </div>
    <div class="col-md-4 col-sm-4">
      <h2 class="text-center"><i class="fa fa-mobile fa-2x"></i></h2>
      <p class="text-center">+7 (727) 279 71 73</p>
      <p class="text-center">+7 (727) 317 94 79</p>
    </div>
    <div class="col-md-4 col-sm-4">
      <h2 class="text-center"><i class="fa fa-envelope-o fa-2x"></i></h2>
      <p class="text-center">sale@compnet.kz</p>
      <p class="text-center">info@compnet.kz</p>
    </div>
    <br><br><br>
  </div>

  <div class="container">
    <br>
    <h1 class="text-center text-uppercase">Отправить заявку</h1>
    <br>

    {{ Form::open(['route' => 'send-message']) }}
      <div class="col-md-3 form-group">
        <label for="name">Имя</label>
        <input type="text" name="name" class="form-control" id="name" maxlength="40" required>
      </div>
      <div class="col-md-3 form-group">
        <label for="email">Email адрес</label>
        <input type="email" name="email" class="form-control" id="email" maxlength="50">
      </div>
      <div class="col-md-3 form-group">
        <label for="phone">Номер телефона</label>
        <input type="tel" name="phone" class="form-control" id="phone" maxlength="20" required>
      </div>
      <div class="col-md-3 form-group">
        <label>Выберите услугу</label>
        <select name="service" class="form-control select-services">
          <option value="IT Аутсорсинг">IT Аутсорсинг</option>
          <option value="Создание Сайта">Создание Сайта</option>
          <option value="SEO &amp; SMM">SEO &amp; SMM</option>
          <option value="Учебный Центр">Учебный Центр</option>
        </select>
      </div>
      <div class="col-md-offset-3 col-md-6 form-group text-center">
        <br>
        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-send"></i> Отправить</button>
        <br>
      </div>
    {{ Form::close() }}
  </div>
@stop

@section('head') 
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
      function initialize() {
        var latlng = new google.maps.LatLng(43.26715, 76.94020);
        var settings = {
          zoom: 15,
          center: latlng,
          scrollwheel: false,
          mapTypeControl: true,
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: true,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
          mapTypeId: google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
        var contentString = '<p class="text-center"><b>CompNet</b><br> <b>Technologies</b></p>';
 
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        
        var companyImage = new google.maps.MarkerImage('img/marker.png',
          new google.maps.Size(50,50),
          new google.maps.Point(0,0),
          new google.maps.Point(25,50)
        );
 
        var companyShadow = new google.maps.MarkerImage('',
          new google.maps.Size(130,50),
          new google.maps.Point(0,0),
          new google.maps.Point(65, 50));
 
        var companyPos = new google.maps.LatLng(43.26715, 76.94020);
 
        var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          icon: companyImage,
          shadow: companyShadow,
          title:"CompNet Technologies",
          zIndex: 3});
  
        google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
        });
      }
    </script>
@stop