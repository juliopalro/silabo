@extends('web/layout-silabo')

@section('title','Lista de cursos')

@section('content')


  <div class="cell">
    <h1>Lista de cursos</h1>
  </div>

  <div class="cell">
    <table class="radius bordered shadow">
      <thead>
        <tr>
          <th class="text-center">Nombre del Curso</th>
          <th width="30%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach( $courses as $course )
        <tr>
          <td>{{ $course->name }}</td>
          <td>
            <a href="courses/{{$course->id}}" class="button"><i class="fa fa-eye"></i> ver</a>
            <a href="courses/{{$course->id}}/edit" class="button"><i class="fa fa-pencil"></i> Editar</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection