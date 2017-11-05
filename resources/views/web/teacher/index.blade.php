@extends('web/layout-silabo')

@section('title','Lista de profesores')

@section('content')

  <div class="cell">
    <h1>Lista de profesores 
      <a class="button" href="teachers/create">
        <i class="fa fa-plus"></i> Nuevo profesor
      </a>
    </h1>
  </div>

  <div class="cell">
    <table class="radius bordered shadow">
      <thead>
        <tr>
          <th class="text-center" width="30%">Nombre completo</th>
          <th class="text-center">Cursos</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $teachers as $teacher )
        <tr>
          <td><a href="teachers/{{$teacher->id}}">{{ $teacher->name }} <i class="fa fa-eye"></i></a></td>
          <td>
            <ul class="fa-ul">
            @foreach( $teacher->courses as $course )
              <li><a href="/courses/{{$course->id}}"><i class="fa-li fa fa-check-square"></i> {{$course->name}}</a></li>
            @endforeach
            </ul>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection