@extends('admin.layouts.default')

@section('title', 'Заявки')
@section('fa-title', 'fa-send-o')

@section('content')
<div class="col-md-12">
  @if (Session::has('global'))
  <div class="alert alert-dismissable alert-success">{{ Session::get('global') }}</div>
  @endif
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <tr class="info">
          <th>№</th>
          <th>Имя</th>
          <th>Email</th>
          <th>Номер</th>
          <th>Дата заявки</th>
          <th>Функции</th>
        </tr>
      </thead>
      <tbody>
      @if ($apps->count())
        @foreach ($apps as $app)
        <tr>
          <td>{{ $app->id }}</td>
          <td><a href="{{ route('admin.apps.show', $app->id) }}">{{ $app->name }}</a></td>
          <td>{{ $app->email }}</td>
          <td>{{ $app->phone }}</td>
          <td>{{ $app->created_at }}</td>
          <td>
            {{ Form::open(['method' => 'delete', 'class' => 'btn-delete', 'route' => ['admin.apps.destroy', $app->id]]) }}
              <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Удалить запись?')"><span class="fa fa-times"></span></button>
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      @endif
      </tbody>
    </table>
  </div>
  {{ $apps->links() }}
</div>
@stop