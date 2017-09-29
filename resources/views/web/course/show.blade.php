@extends('web/layout-silabo')

@section('title','Vista del curso')

@section('content')

  <h1 class="text-center">Vista curso</h1>

  @if( count($course) == 1 )
  <div class="row medium-centered">
    <div class="columns medium-12">
      <h2><b>Curso</b></h2>
      <a href="/courses/{{$course->id}}/edit" class="button"><i class="fa fa-pencil"></i> Actualizar</a>
      <p><b>Código:</b>{{$course->code}}</p>
      <p><b>Nombre de la unidad didactica:</b>{{$course->name}}</p>
      <p><b>Número de créditos:</b>{{$course->credit_number}}</p>
      <p><b>Horas por semana:</b>{{$course->weekly_hours}}</p>
      <p><b>Número de semanas:</b> {{count($course->weeks)}}</p>
      <p><b>Horas semestral:</b> {{floatval(count($course->weeks))*floatval($course->weekly_hours)}}</p>
      <p><b>Docente asignado:</b> {{$course->teacher->name.' '.$course->teacher->last_name}}</p>
      <p><a class="button success" href="/courses/{{$course->id}}/silabo">Ver el silabo</a></p>
    </div>
    <div class="columns medium-12">
      
    </div>
  </div>

  @else
  <div class="row">
    <div class="alert">Curso no encontrado</div>
  </div>
  @endif

@endsection