@extends('web/layout-silabo')

@section('title','Vista del curso')

@section('content')

  <div class="cell">
   <h1>Vista curso</h1>
  </div>
  @if( count($course) == 1 )
  <div class="cell">
    <div class="columns medium-12">
      <h2><small><b>Curso: </b></small>{{$course->name}} <a href="/courses/{{$course->id}}/edit" class="button"><i class="fa fa-pencil"></i> Editar</a></h2>
      <p><b>Código:</b>{{$course->code}}</p>
      <p><b>Número de créditos:</b>{{$course->credit_number}}</p>
      <p><b>Horas por semana:</b>{{$course->weekly_hours}}</p>
      <p><b>Número de semanas:</b> {{count($course->weeks)}}</p>
      <p><b>Horas semestral:</b> {{floatval(count($course->weeks))*floatval($course->weekly_hours)}}</p>
      <p><b>Docente asignado:</b> {{$course->teacher->name.' '.$course->teacher->last_name}}</p>
      <p><a class="button" href="/courses/{{$course->id}}/silabo"><i class="fa fa-building"></i> Ver el silabo</a></p>
    </div>
  </div>

  @else
  <div class="cell">
    <div class="alert">Curso no encontrado</div>
  </div>
  @endif

@endsection