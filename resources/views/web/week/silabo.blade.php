@extends('web/layout-silabo')

@section('title','Silabo del curso')

@section('content')

  <h1 class="text-center">Silabo del curso</h1>
  <style>
    table.weeks{
      width: 3000px;
    }
  </style>
  @if( count($course) == 1 )
  <div class="row medium-centered">
    <div class="callout secondary">
      <h5>Docente</h5>
      <p><b>Nombres:</b> {{$course->teacher->name}}</p>
      <p><b>Apellidos:</b> {{$course->teacher->last_name}}</p>
    </div>
    
    <h5>Semanas <small><a class="button" href="/weeks/create/{{$course->id}}"><i class="fa fa-plus"></i> Agregar</a></small></h5>
    <div class="table-scroll">
      <table class="weeks">
        <thead>
          <tr>
            <th>N° Semana</th>
            <th>Elementos de Capacidad Terminal</th>
            <th>Conceptual</th>
            <th>Procedimental</th>
            <th>Actitudinal</th>
            <th>Actividad de Aprendizaje</th>
            <th>Criterios de Evaluación</th>
            <th>Indicador de Evaluación</th>
            <th>Tareas Previas</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $course->weeks as $week )
          <tr>
            <td>{{$week->number}}</td>
            <td>{{$week->terminal_capacity}}</td>
            <td>{{$week->conceptual}}</td>
            <td>{{$week->procedimental}}</td>
            <td>{{$week->actitudinal}}</td>
            <td>{{$week->learning_activity}}</td>
            <td>{{$week->evaluation_criterial}}</td>
            <td>{{$week->evaluation_indicators}}</td>
            <td>{{$week->previous_tasks}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
    <div class="callout primary">
      <h5>Bibliografía</h5>
        <ul>
          @foreach( $course->bibliographies as $bibliograpy )
          <li>{{$bibliograpy->title}} - {{$bibliograpy->author}} - {{$bibliograpy->edition}}</li>
          @endforeach
        </ul>
    </div>

  </div>

  @else
  <div class="row">
    <div class="alert">Silabo no encontrado</div>
  </div>
  @endif

@endsection