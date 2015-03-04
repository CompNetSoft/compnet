@extends('admin.layouts.default')

@section('title', 'Заявка - ' . $app->id)
@section('fa-title', 'fa-send-o')

@section('content')
<div class="col-md-12">
  @if ($errors->count())
    @foreach ($errors->all() as $error)
      <div class="alert alert-dismissable alert-danger">{{ $error }}</div>
    @endforeach
  @endif

  <hr>

  <p><b>Заявка</b> от {{ $app->name }}</p>
  <p><b>Email:</b> {{ $app->email }}</p>
  <p><b>Номер:</b> {{ $app->phone }}</p>

  <div class="col-md-3">
    <div class="row">
      <h3>IT Аутсорсинг</h3>
      @foreach($it_outsourcing as $key => $value)
        @if($value !== 'no')
          <b>{{ trans('services.'.$key) }}:</b> <b class="text-success">{{ $value }}</b><br>
        @else
          <b>{{ trans('services.'.$key) }}:</b> {{ $value }}<br>
        @endif
      @endforeach
    </div>
  </div>
  <div class="col-md-3">
    <div class="row">
      <h3>WEB Разработка</h3>
      @foreach($web_development as $key => $value)
        @if($value !== 'no')
          <b>{{ trans('services.'.$key) }}:</b> <b class="text-success">{{ $value }}</b><br>
        @else
          <b>{{ trans('services.'.$key) }}:</b> {{ $value }}<br>
        @endif
      @endforeach
    </div>
  </div>
  <div class="col-md-2">
    <div class="row">
      <h3>SEO &amp; SMM</h3>
      @foreach($seo_smm as $key => $value)
        @if($value !== 'no')
          <b>{{ trans('services.'.$key) }}:</b> <b class="text-success">{{ $value }}</b><br>
        @else
          <b>{{ trans('services.'.$key) }}:</b> {{ $value }}<br>
        @endif
      @endforeach
    </div>
  </div>
  <div class="col-md-4">
    <div class="row">
      <h3>Учебный Центр</h3>
      @foreach($training_center as $key => $value)
        @if($value !== 'no')
          <b>{{ trans('services.'.$key) }}:</b> <b class="text-success">{{ $value }}</b><br>
        @else
          <b>{{ trans('services.'.$key) }}:</b> {{ $value }}<br>
        @endif
      @endforeach
    </div>
  </div>
  <p class="col-md-12">
    <br>
    <a href="{{ URL::route('admin.apps.index') }}" class="btn btn-primary"><span class="fa fa-arrow-circle-left"></span> Назад</a>
  </p>
</div>
@stop