@extends('web/layout-silabo')

@section('title','Vista del profesor')

@section('content')

  <div class="cell">
    <h1>Vista profesor</h1>
  </div>

  @if( count($teacher) == 1 )
  <div class="cell">
    <div class="columns medium-12">
      <h2><small><b>Profesor: </b></small>{{$teacher->name}} {{$teacher->last_name}} <a href="/teachers/{{$teacher->id}}/edit" class="button"><i class="fa fa-pencil"></i> Editar</a></h2>
    </div>
    <div class="columns medium-12">
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item is-active" data-accordion-item>
          <a href="#" class="accordion-title" ><i class="fa fa-list"></i> Lista de Cursos Asociados:</a>
          <div class="accordion-content" data-tab-content>
            <ul class="fa-ul">
              @foreach( $teacher->courses as $course )
              <li><a href="/courses/{{$course->id}}"><i class="fa-li fa fa-check-square"></i> {{$course->name}}</a></li>
              @endforeach
            </ul>
            <br>
            <a class="button" href="/courses/create/{{$teacher->id}}">Agregar Curso</a>
          </div>
        </li>
      </ul>
    </div>
  </div>

  @else
  <div class="cell">
    <div class="alert">Profesor no encontrado</div>
  </div>
  @endif

@endsection