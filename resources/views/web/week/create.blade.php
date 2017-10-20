@extends('web/layout-silabo')

@section('title','Creación de una semana')

@section('content')

  <h1 class="text-center">Creación de una semana de un curso</h1>

  <div class="row">
    <form method="post" action="/weeks" accept-charset="UTF-8" data-abide novalidate>

      {{ csrf_field() }}

      <fieldset class="columns large-12">
        <legend>Nueva semana</legend>
        <div class="columns medium-6">
          <label for="number">Número de semana
            <input type="text" id="number" name="number" placeholder="Número de semana" required>
            <span class="form-error">
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns medium-6">
          <label for="terminal_capacity">Elementos de capacidad terminal
            <input type="text" id="terminal_capacity" name="terminal_capacity" placeholder="Elementos de capacidad terminal">
            <span class="form-error">
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns medium-6">
          <label for="conceptual">Conceptual
            <input type="text" id="conceptual" name="conceptual" placeholder="Número de créditos">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns medium-6">
          <label for="procedimental">Procedimental
            <input type="text" id="procedimental" name="procedimental" placeholder="Procedimental">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns medium-6">
          <label for="actitudinal">Actitudinal
            <input type="text" id="actitudinal" name="actitudinal" placeholder="Actitudinal">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns medium-6">
          <label for="learning_activity">Actividad de aprendizaje
            <input type="text" id="learning_activity" name="learning_activity" placeholder="Actividad de aprendizaje">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns medium-6">
          <label for="evaluation_criterial">Criterios de evaluación
            <input type="text" id="evaluation_criterial" name="evaluation_criterial" placeholder="Criterios de evaluación">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns medium-6">
          <label for="evaluation_indicators">Indicadores de evaluación
            <input type="text" id="evaluation_indicators" name="evaluation_indicators" placeholder="Indicadores de evaluación">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns medium-6">
          <label for="previous_tasks">Tareas previas
            <input type="text" id="previous_tasks" name="previous_tasks" placeholder="Indicadores de evaluación">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns medium-6">
          <label for="course_id">Curso relacionado
            <select id="course_id" name="course_id" required>
              <option value="{{$course->id}}">{{$course->name}}</option>
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