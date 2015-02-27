@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('content')
  <div class="container">
    <br>
    <h2 class="text-center text-uppercase"><i class="fa fa-globe"></i> Компании</h2>
    <br>

    {{ $page->text }}
  </div>
@stop
