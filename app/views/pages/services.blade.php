@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('content')
  <div class="container page-services">
    <br>
    <h2 class="text-center text-uppercase"><a href="{{ route('index') }}"><i class="fa fa-home"></i></a> / Услуги</h2>
    <h4><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-calculator"></i> Калькулятор</a></h4>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->
    <div class="row">
      <ul class="nav nav-pills">
        <li class="col-md-3 col-sm-3 col-xs-6 @if (Request::is('services/it-outsourcing')) {{ 'active' }} @endif">
          <a href="#it-outsourcing" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-keyboard-o fa-5x"></i><br>IT Аутсорсинг</a>
        </li>
        <li class="col-md-3 col-sm-3 col-xs-6 @if (Request::is('services/site-development')) {{ 'active' }} @endif">
          <a href="#site-development" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-html5 fa-5x"></i><br>Создание Сайтов</a>
        </li>
        <li class="col-md-3 col-sm-3 col-xs-6 @if (Request::is('services/seo-smm')) {{ 'active' }} @endif">
          <a href="#seo-smm" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-line-chart fa-5x"></i><br>SEO &amp; SMM</a>
        </li>
        <li class="col-md-3 col-sm-3 col-xs-6 @if (Request::is('services/training-center')) {{ 'active' }} @endif">
          <a href="#training-center" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-mortar-board fa-5x"></i><br>Учебный Центр</a>
        </li>
      </ul>
    </div>
  </div>
  <br>
  <div class="container page-services">
    <div class="row" id="info">
      {{ $info }}

      {{ $page->text }}
    </div>
  </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="text-muted" aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          ...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@stop

@section('scripts')
  <script src="{{ asset('/js/ajax.js') }}"></script>
@stop