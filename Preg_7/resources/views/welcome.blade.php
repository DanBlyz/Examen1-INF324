@extends('layouts.plantillabase')

@section('contenido')
  <a href="{{ url('/crear') }}" class="btn btn-primary">Crear</a>

  <table class="table table-dark table-striped mt-4">
   <thead>
      <tr>
         <th>Ci</th>
         <th>Nombre</th>
         <th>Fecha Naciemiento</th>
         <th>Departamento</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($personas as $persona)
         <tr>
            <td>{{ $persona->ci }}</td>
            <td>{{ $persona->name }}</td>
            <td>{{ $persona->fecha_nacimiento }}</td>
            <td>{{ $persona->departamento }}</td>
            <td>
               @php
                  $edit = "/edit/$persona->id";
                  $delete = "/eliminar/$persona->id";
               @endphp
               <a class="btn btn-info" href="{{ url($edit) }}">Editar</a>
               
               <a class="btn btn-danger" href="{{ url($delete) }}">Delete</a>
            </td>
         </tr>
      @endforeach
   </tbody>

  </table>
@endsection