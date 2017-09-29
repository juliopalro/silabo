@extends('web/layout-silabo')

@section('title','Vista del profesor')

@section('content')

  <h1 class="text-center">Vista profesor</h1>

  @if( count($teacher) == 1 )
  <div class="row medium-centered">
    <div class="columns medium-12">
      <h2><b>Profesor</b></h2>
      <a href="/teachers/{{$teacher->id}}/edit" class="button"><i class="fa fa-pencil"></i> Actualizar</a>
      <p><b>Nombres:</b> {{$teacher->name}}</p>
      <p><b>Apellidos:</b> {{$teacher->last_name}}</p>
    </div>
    <div class="columns medium-12">
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">Cursos</a>
          <div class="accordion-content" data-tab-content>
            <ul>
              @foreach( $teacher->courses as $course )
              <li><p><a href="/courses/{{$course->id}}">{{$course->name}}</a></p></li>
              @endforeach
            </ul>
            <a class="button" href="courses/create">Agregar Curso</a>
          </div>
        </li>
      </ul>
    </div>
  </div>

  @else
  <div class="row">
    <div class="alert">Profesor no encontrado</div>
  </div>
  @endif

@endsection