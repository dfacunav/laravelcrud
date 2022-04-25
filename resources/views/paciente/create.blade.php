@extends('adminlte::page')

@section('title', 'Dashboard')
<meta name="csrf-token" content="{{ csrf_token() }}">


@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<h2>CREAR REGISTROS</h2>

<form action="/pacientes" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" tabindex="6">
  </div>

  <div class="form-group">

  <label for="" class="form-label">Departamento</label>

    <select  name="departamento" id="id_padre" class="form-control input-lg dynamic" data-dependent="state" onchange="nombre()">
     <option value="">Seleccione el departamento</option>
     @foreach($departamentos as $nombre)
     <option value="{{ $nombre->id}}">{{ $nombre->nombre }}</option>
     @endforeach
    </select>
   </div>

   <div class="form-group">

   <label for="" class="form-label">Municipio</label>

<select  name="municipio" id="id_hijo" class="form-control input-lg dynamic" data-dependent="state" onchange="nombre()">
 <option value="">Seleccione el municipio</option>
 @foreach($municipios as $nombre)
 <option value="{{ $nombre->id}}">{{ $nombre->nombre }}</option>
 @endforeach
</select>
</div>

  </div>
 
<br>

  <a href="/pacientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

<br>             
    
  </div>

<br>

<script type="text/javascript">


</script>


</body>
</html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
function nombre(){
    
    var id = $('#id_padre').val(); id del select padre
   
    var url="{{route('nombre_ruta')}}";
    var datos = {
    "_token": $('meta[name="csrf-token"]').attr('content'),
    "id": id
    };
    $.ajax({
        
        type: 'GET',
        url: url,
        data: datos,
        success: function(data) {
            
            $.each(data,function(key, value) {
                
            $('#id_hijo').append( $('<option></option>').val(value.id).html(value.nombre) );
                
            });     
                     
        }
    });
}

@stop
