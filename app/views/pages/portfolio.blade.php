@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('content')
  <div class="container">
    <div class="row">
      <br>
      <h2 class="text-center text-uppercase">Портфолио</h2>
      <br>

      @foreach ($projects as $project)
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <img src="{{ asset('img/projects/'.$project->image) }}" class="img-responsive" alt="{{ $project->description }}">
            <div class="caption text-center">
              <h4>{{ $project->title }}</h4>
              <p>{{ $project->description }}</p>
              <p><a href="http://{{ $project->link }}/" target="_blank" rel="tooltip">www.{{ $project->link }}</a></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@stop
