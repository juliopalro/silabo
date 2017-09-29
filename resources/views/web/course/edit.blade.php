@extends('web/layout-silabo')

@section('title','Edición de profesor')

@section('content')

<h1 class="text-center">Edición de curso</h1>

<div class="row">
    <form method="post" action="/courses/{{$course->id}}" accept-charset="UTF-8" data-abide novalidate>

      {{ method_field('PUT') }}
      {{ csrf_field() }}

      <fieldset class="columns large-12">
        <legend>Generales</legend>
        <div class="columns large-12">
          <label for="code">Código
            <input type="text" id="code" name="code" placeholder="Código del profesor" 
            value="{{$course->code}}">
            <span class="form-error">
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns large-12">
          <label for="name">Nombre del curso
            <input type="text" id="name" name="name" placeholder="Nombre del curso" required 
            value="{{$course->name}}">
            <span class="form-error">
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns large-12">
          <label for="credit_number">Número de créditos
            <input type="number" id="credit_number" name="credit_number" placeholder="Número de créditos" 
            value="{{$course->credit_number}}">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns large-12">
          <label for="weekly_hours">Horas semanales
            <input type="text" id="weekly_hours" name="weekly_hours" placeholder="Cargo de docente" 
            value="{{$course->weekly_hours}}">
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
              <option {{ ($course->teacher_id == $teacher->id)? 'selected':'' }} 
                value="{{$teacher->id}}">{{$teacher->name.' '.$teacher->last_name}}</option>
              @endforeach
            </select>
            <span class="form-error" >
              Debe de asignar a un profesor.
            </span>
          </label>
        </div>
      </fieldset>

      <div class="columns medium-12 text-right">
        <button type="submit" class="button">Actualizar</button>
        <a href="/courses/{{$course->id}}" class="button alert">Ir a la vista</a>
        <a href="/courses" class="button alert">Ir a la lista</a>
      </div>

    </form>
  </div>

@endsection