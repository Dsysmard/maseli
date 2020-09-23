@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>ADMINISTRADOR DE CATALOGOS DE EMPRESAS</h1><hr/>
</div>
  <div class="row jumbotron big-padding text-center blue-grey">
    {!! Form::open(['route' => 'empresas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Buscar</label>
            <input type="text" class="form-control" name = "id" placeholder='Ingresa dato para buscar'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        <a href="{{ route('empresas.index') }}" class="btn btn-info">Mostrar Todos</a>
         <a href="{{ route('empresas.create') }}" class="btn btn-success">Crear</a>
        {!! Form::close() !!}
  <br>
    <table class="table table-condensed table-striped table-bordered ">
            <thead class="nav nav-tabs white-text">
                <tr>
                  <th>ID</th>
                  <th>NOMBRE</th>
                  <th>CALLE</th>
                  <th>NUM. EXT.</th>
                  <th>NUM. INT</th>
                  <th>COLONIA</th>
                  <th>C.P.</th>
                  <th>MUNICIPIO</th>
                  <th>DELEGACION</th>
                  <th>ESTADO</th>
                  <th>DEPARTAMENTOS</th>
                  <th>CONTACTOS</th>
                  <th>ESTATUS</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="jumbotron">
                @foreach($empresa as $empresas)
                <tr>
                    <td>{{ $empresas->id }}</td>
                    <td>{{ $empresas->nombre }}</td>
                    <td>{{ $empresas->calle }}</td>
                    <td>{{ $empresas->num_ext }}</td>
                    <td>{{ $empresas->num_int }}</td>
                    <td>{{ $empresas->colonia }}</td>
                    <td>{{ $empresas->cp }}</td>
                    <td>{{ $empresas->municipio }}</td>
                    <td>{{ $empresas->delegacion }}</td>
                    <td>{{ $empresas->estado }}</td>
                    <td>{{ $empresas->departamentos }}</td>
                    <td>{{ $empresas->contactos }}</td>
                    <td>{{ $empresas->estatus }}</td>
                    <td>
                         <a class="btn btn-primary " href="{{ url('empresas/' .$empresas->id .'/edit')}}" >Editar</a>
                         <a class="btn btn-danger " href="{{ route('empresas/destroy',['id' => $empresas->id] )}}" >Eliminar</a> 
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
<div class="floating">
    <a href="{{route('empresas.create')}}" class="btn btn-primary btn-fab">
      <i class="material-icons">add</i>
    </a>
  </div>
@endsection