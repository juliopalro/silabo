@extends('web/layout-silabo')

@section('title','Edición de profesor')

@section('content')

<h1 class="text-center">Edición de profesor</h1>

<div class="row align-center">
  <form method="post" action="/teachers/{{$teacher->id}}" accept-charset="UTF-8" data-abide novalidate>

    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <fieldset class="columns medium-12">
      <legend>Generales</legend>
      <div class="columns large-12">
        <label for="code">Código
          <input type="text" id="code" name="code" placeholder="Código del profesor" 
          value="{{$teacher->code}}">
          <span class="form-error">
            Dato necesario.
          </span>
        </label>
      </div>
      <div class="columns medium-12">
        <label for="name">Nombres
          <input type="text" name="name" placeholder="Nombres" 
          value="{{$teacher->name}}" required>
          <span class="form-error">
            Dato necesario.
          </span>
        </label>
      </div>
      <div class="columns medium-12">
        <label for="last_name">Apellidos
          <input type="text" name="last_name" placeholder="Apellidos" 
          value="{{$teacher->last_name}}" required>
          <span class="form-error" >
            Dato necesario.
          </span>
        </label>
      </div>
      <div class="columns large-12">
        <label for="position">Cargo del docente
          <input type="text" id="position" name="position" placeholder="Cargo de docente" 
          value="{{$teacher->position}}">
          <span class="form-error" >
            Dato necesario.
          </span>
        </label>
      </div>
    </fieldset>

    <div class="columns medium-12 text-right">
      <button type="submit" class="button">Actualizar</button>
      <a href="/teachers/{{$teacher->id}}" class="button alert">Ir a la vista</a>
      <a href="/teachers" class="button alert">Ir a la lista</a>
    </div>

  </form>
</div>

@endsection