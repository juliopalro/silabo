@extends('web/layout-silabo')

@section('title','Lista de cursos')

@section('content')

  <div class="row">
    <div class="columns">
      <h1 class="text-center">Lista de cursos</h1>
      <a class="button" href="courses/create">
        <i class="fa fa-plus"></i> Crear curso
      </a>
    </div>
  </div>

  @foreach ( $courses as $course)
  <div class="row small-centered">
    <div class="columns medium-12">
      <div class="columns medium-8">
        <p>{{$course->name.' '.$course->last_name}} </p>
      </div>
      <div class="columns medium-4 text-center">
        <a class="button" href="courses/{{$course->id}}">
          <i class="fa fa-eye"></i> ver
        </a>
        <a class="button" href="courses/{{$course->id}}/edit">
          <i class="fa fa-pencil"></i> editar
        </a>
      </div>
    </div>
  </div>
  @endforeach
@endsection