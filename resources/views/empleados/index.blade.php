@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE CATALOGOS DE EMPLEADOS</h1><hr/>
</div>
  <div class="row jumbotron big-padding text-center blue-grey">
    {!! Form::open(['route' => 'empleados/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "nombre" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('empleados.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
  <br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>NOMBRE</th>
                  <th>AP. PATERNO</th>
                  <th>AP. MATERNO</th>
                  <th>FECHA NACIMIENTO</th>
                  <th>GENERO</th>
                  <th>CURP</th>
                  <th>RFC</th>

                  <th>SEGURO SOCIAL</th>
                  <th>INFONAVIT</th>
                  <th>DESC. INFONAVIT</th>
                  <th>CALLE</th>
                  <th>NUM. EXT.</th>
                  <th>NUM. INT.</th>
                  <th>COLONIA</th>
                  <th>C.P.</th>
                  <th>MUNICIPIO</th>
                  <th>DELEGACION</th>
                  <th>ESTADO</th>
                  <th>TELEFONO</th>
                  <th>EMAIL</th>
                  <th>BANCO</th>
                  <th>TDD</th>
                  <th>FECHA INGRESO</th>
                  <th>FECHA BAJA</th>
                  <th>MOTIVO BAJA</th>
                  <th>OBSERVACIONES</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($empleado as $empleados)
                <tr>
                    <td>{{ $empleados->id }}</td>
                    <td>{{ $empleados->nombre }}</td>
                    <td>{{ $empleados->ap_paterno }}</td>
                    <td>{{ $empleados->ap_materno }}</td>
                    <td>{{ $empleados->fecha_nacimiento }}</td>
                    <td>{{ $empleados->genero }}</td>
                    <td>{{ $empleados->curp }}</td>
                    <td>{{ $empleados->rfc }}</td>
                    <td>{{ $empleados->nss }}</td>
                    <td>{{ $empleados->infonavit }}</td>
                    <td>{{ $empleados->desc_infonavit }}</td>
                    <td>{{ $empleados->calle }}</td>
                    <td>{{ $empleados->num_ext }}</td>
                    <td>{{ $empleados->num_int }}</td>
                    <td>{{ $empleados->colonia }}</td>
                    <td>{{ $empleados->cp }}</td>
                    <td>{{ $empleados->municipio }}</td>
                    <td>{{ $empleados->delegacion }}</td>
                    <td>{{ $empleados->estado }}</td>
                    <td>{{ $empleados->telefono }}</td>
                    <td>{{ $empleados->email }}</td>
                    <td>{{ $empleados->banco }}</td>
                    <td>{{ $empleados->tdd }}</td>
                    <td>{{ $empleados->fecha_ingreso }}</td>
                    <td>{{ $empleados->fecha_baja }}</td>
                    <td>{{ $empleados->motivo_baja }}</td>
                    <td>{{ $empleados->observaciones }}</td>
                    <td>
                         <a class="btn btn-primary " href="{{ url('empleados/' .$empleados->id .'/edit')}}" >Editar</a>
                         <a class="btn btn-danger " href="{{ route('empleados/destroy',['id' => $empleados->id] )}}" >Eliminar</a> 
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
    <a href="{{route('empleados.create')}}" class="btn btn-primary btn-fab">
      <i class="material-icons">add</i>
    </a>
  </div>
@endsection