@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE ASISTENCIAS</h1><hr/>
</div>
  <div class="row jumbotron big-padding text-center blue-grey">
    {!! Form::open(['route' => 'asistencias/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "empleado" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('asistencias.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('asistencias.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
  <br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>NOMBRE EMPLEADO</th>
                  <th>NOMBRE DE LA EMPRESA</th>
                  <th>TURNO</th>
                  <th>FECHA</th>
                  <th>ASISTENCIA</th>
                  <th>FALTA JUSTIFICADA</th>
                  <th>FALTA INJUSTIFICADA</th>
                  <th>OBSERVACIONES</th>
                  <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($asistencia as $asistencias)
                <tr>
                    <td>{{ $asistencias->id }}</td>
                    <td>{{ $asistencias->empleado }}</td>
                    <td>{{ $asistencias->empresa }}</td>
                    <td>{{ $asistencias->turno }}</td>
                    <td>{{ $asistencias->fecha }}</td>
                    <td>{{ $asistencias->asistencia }}</td>
                    <td>{{ $asistencias->falta_justificada }}</td>
                    <td>{{ $asistencias->falta_injustificada }}</td>
                    <td>{{ $asistencias->observaciones }}</td>
                    <td>
                         <a class="btn btn-primary " href="{{ url('asistencias/' .$asistencias->id .'/edit')}}" >Editar</a>
                         <a class="btn btn-danger " href="{{ route('asistencias/destroy',['id' => $asistencias->id] )}}" >Eliminar</a> 
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
    <a href="{{route('asistencias.create')}}" class="btn btn-primary btn-fab">
      <i class="material-icons">add</i>
    </a>
  </div>
@endsection