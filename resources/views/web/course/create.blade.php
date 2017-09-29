@extends('web/layout-silabo')

@section('title','Creación de un nuevo curso')

@section('content')

  <h1 class="text-center">Creación de un nuevo curso</h1>

  <div class="row">
    <form method="post" action="/courses" accept-charset="UTF-8" data-abide novalidate>

      {{ csrf_field() }}

      <fieldset class="columns large-12">
        <legend>Generales</legend>
        <div class="columns large-12">
          <label for="code">Código
            <input type="text" id="code" name="code" placeholder="Código del profesor">
            <span class="form-error">
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns large-12">
          <label for="name">Nombre del curso
            <input type="text" id="name" name="name" placeholder="Nombre del curso" required>
            <span class="form-error">
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns large-12">
          <label for="credit_number">Número de créditos
            <input type="number" id="credit_number" name="credit_number" placeholder="Número de créditos">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns large-12">
          <label for="weekly_hours">Horas semanales
            <input type="text" id="weekly_hours" name="weekly_hours" placeholder="Cargo de docente">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns large-12">
          <label>Profesor Asignado
            <select id="teacher_id" name="teacher_id" required>
              <option value=""></option>
              @foreach( $teachers as $teacher )
              <option value="{{$teacher->id}}">{{$teacher->name.' '.$teacher->last_name}}</option>
              @endforeach
            </select>
            <span class="form-error" >
              Debe de asignar a un profesor.
            </span>
          </label>
        </div>
      </fieldset>

      <div class="columns medium-12 text-right">
        <button type="submit" class="button">Crear</button>
        <a href="/courses" class="button alert">Volver a la lista</a>
      </div>

    </form>
  </div>

@endsection