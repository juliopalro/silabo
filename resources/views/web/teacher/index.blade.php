@extends('web/layout-silabo')

@section('title','Lista de profesores')

@section('content')

  <div class="row">
    <div class="columns">
      <h1 class="text-center">Lista de profesores</h1>
      <a class="button" href="teachers/create">
        <i class="fa fa-plus"></i> Crear profesor
      </a>
    </div>
  </div>

  @foreach ( $teachers as $teacher)
  <div class="row small-centered">
    <div class="columns medium-8">
      <div class="columns medium-8">
        <p>{{$teacher->name.' '.$teacher->last_name}} </p>
      </div>
      <div class="columns medium-4 text-center">
        <a class="button" href="teachers/{{$teacher->id}}">
          <i class="fa fa-eye"></i> ver
        </a>
        <a class="button" href="teachers/{{$teacher->id}}/edit">
          <i class="fa fa-pencil"></i> editar
        </a>
      </div>
    </div>
  </div>
  @endforeach
@endsection