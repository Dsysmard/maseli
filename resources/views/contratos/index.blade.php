@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE CATALOGOS DE CONTRATOS</h1><hr/>
</div>
  <div class="row jumbotron big-padding text-center blue-grey">
    {!! Form::open(['route' => 'contratos/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "empleado" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('contratos.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('contratos.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
  <br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>EMPLEADO</th>
                  <th>EMPRESA</th>
                  <th>DEPARTAMENTO</th>
                  <th>PAGO EXTERNO</th>
                  <th>SUPERVISOR</th>
                  <th>SUPERVISOR ASIGNADO</th>
                  <th>PUESTO</th>
                  <th>TURNO</th>
                  <th>HORARIO</th>
                  <th>SUELDO</th>
                  <th>BONO</th>
                  <th>OBSERVACIONES</th>
                  <th>ESTATUS</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($contrato as $contratos)
                <tr>
                    <td>{{ $contratos->id }}</td>
                    <td>{{ $contratos->empleado }}</td>
                    <td>{{ $contratos->empresa }}</td>
                    <td>{{ $contratos->departamento }}</td>
                    <td>{{ $contratos->pago_externo }}</td>
                    <td>{{ $contratos->supervisor }}</td>
                    <td>{{ $contratos->supervisor_asignado }}</td>
                    <td>{{ $contratos->puesto }}</td>
                    <td>{{ $contratos->turno }}</td>
                    <td>{{ $contratos->horario }}</td>
                    <td>{{ $contratos->sueldo }}</td>
                    <td>{{ $contratos->bono }}</td>
                    <td>{{ $contratos->observaciones }}</td>
                    <td>{{ $contratos->estatus }}</td>
                    <td>
                         <a class="btn btn-primary " href="{{ url('contratos/' .$contratos->id .'/edit')}}" >Editar</a>
                         <a class="btn btn-danger " href="{{ route('contratos/destroy',['id' => $contratos->id] )}}" >Eliminar</a> 
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
    <a href="{{route('contratos.create')}}" class="btn btn-primary btn-fab">
      <i class="material-icons">add</i>
    </a>
  </div>
@endsection