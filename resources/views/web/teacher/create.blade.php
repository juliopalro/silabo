@extends('web/layout-silabo')

@section('title','Creación de un nuevo profesor')

@section('content')

  <div class="cell">
     <h1>Vista de creación de un profesor</h1>
  </div>

  <div class="cell">
    <form method="post" action="/teachers" accept-charset="UTF-8" data-abide novalidate>

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
          <label for="name">Nombres
            <input type="text" id="name" name="name" placeholder="Nombres" required>
            <span class="form-error">
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns large-12">
          <label for="last_name">Apellidos
            <input type="text" id="last_name" name="last_name" placeholder="Apellidos" required>
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
        <div class="columns large-12">
          <label for="position">Cargo del docente
            <input type="text" id="position" name="position" placeholder="Cargo de docente">
            <span class="form-error" >
              Dato necesario.
            </span>
          </label>
        </div>
      </fieldset>

      <div class="columns medium-12 text-right">
        <button type="submit" class="button"><i class="fa fa-save"></i> Crear</button>
        <a href="/teachers" class="button"><i class="fa fa-list"></i> Volver a la lista</a>
      </div>

    </form>
  </div>

@endsection