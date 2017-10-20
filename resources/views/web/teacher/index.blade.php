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

  <table>
    <thead>
      <tr>
        <th>Nombre completo</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="teacher in teachers">
        <td>@{{teacher.name}}</td>
      </tr>
    </tbody>
  </table>

@endsection