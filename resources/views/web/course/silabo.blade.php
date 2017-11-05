@extends('web/layout-silabo')

@section('title','Silabo del curso')

@section('content')
  
  <div class="cell">
    <h1>Silabo del curso</h1>
  </div>
  
  <style>
    table.weeks, table.bibliographies{
      width: 3000px;
    }
  </style>
  @if( count($course) == 1 )
  <div class="cell">
    <h5>Docente</h5>
    <p><b>Nombres:</b> {{$course->teacher->name}}</p>
    <p><b>Apellidos:</b> {{$course->teacher->last_name}}</p>
    
    <h5>Semanas <small><a class="button" href="#"><i class="fa fa-plus"></i> Agregar</a></small></h5>
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
    
    <h5>Bibliografía <small><a class="button" href="#"><i class="fa fa-plus"></i> Agregar</a></small></h5>
    <div class="table-scroll">
      <table class="bibliographies">
        <thead>
          <tr>
            <th>Título del libro</th>
            <th>Autor</th>
            <th>Edición</th>
            <th>country</th>
            <th>Editorial</th>
            <th>Año</th>
            <th>Número de páginas</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $course->bibliographies as $bibliography )
          <tr>
            <td>{{$bibliography->title}}</td>
            <td>{{$bibliography->author}}</td>
            <td>{{$bibliography->edition}}</td>
            <td>{{$bibliography->country}}</td>
            <td>{{$bibliography->editorial}}</td>
            <td>{{$bibliography->year}}</td>
            <td>{{$bibliography->page_numbers}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>

  @else
  <div class="row">
    <div class="alert">Silabo no encontrado</div>
  </div>
  @endif

@endsection