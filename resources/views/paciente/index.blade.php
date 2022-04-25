@extends('adminlte::page')

@section('title', 'CRUD Laravel')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<a href="pacientes/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Documento</th>
      <th scope="col">Nombre </th>
      <th scope="col">Apellido</th>
      <th scope="col">Dpto id </th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($pacientes as $paciente)
    <tr>
        <td>{{$paciente->id}}</td>
        <td>{{$paciente->numero_documento}}</td>
        <td>{{$paciente->nombre1}}</td>
        <td>{{$paciente->apellido1}}</td>
        <td>{{$paciente->departamento_id}}</td>
        <td>
         <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">
          <a href="/pacientes/{{$paciente->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop