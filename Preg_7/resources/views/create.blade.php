@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="{{ url('/guardar') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">CI</label>
    <input id="ci" name="ci" type="text" class="form-control" tabindex="1" value="">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">NOMBRE COMPLETO</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">FECHA DE NACIMIENTO</label>
    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="3" value="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">DEPARTAMENTO</label>
    <input id="departamento" name="departamento" type="text" step="any" value="" class="form-control" tabindex="3">
  </div>
  <a href="{{ url('/') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection