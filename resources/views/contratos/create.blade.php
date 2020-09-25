@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>REGISTRAR NUEVO CONTRATO</h1><hr/>
</div>
	<div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
		<div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
			{!! Form::open(['route' => 'contratos.store', 'method' => 'post', 'novalidate']) !!}


                  <div class="form-group">
                      {!! Form::label('SELECCIONE EL NOMBRE DEL EMPLEADO:', 'SELECCIONE EL NOMBRE DEL EMPLEADO:') !!}
                      <select class="form-control" id="nombre" name="nombre" >
                      <option value="">SELECCIONE UN EMPLEADO</option>
                        @foreach($empleado as $empleados)
                        <option value="{{$empleados->nombre}}">{{$empleados->nombre}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('SELECCIONE EL NOMBRE DE LA EMPRESA:', 'SELECCIONE EL NOMBRE DE LA EMPRESA:') !!}
                      <select class="form-control" id="nombre" name="nombre" >
                      <option value="">SELECCIONE EL NOMBRE DE LA EMPRESA</option>
                        @foreach($empresa as $empresas)
                        <option value="{{$empresas->nombre}}">{{$empresas->nombre}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('SELECCIONE EL DEPARTAMENTO:', 'SELECCIONE EL DEPARTAMENTO:') !!}
                      <select class="form-control" id="departamentos" name="departamentos" >
                      <option value="">SELECCIONE EL DEPARTAMENTO</option>
                        @foreach($empresa as $empresas)
                        <option value="{{$empresas->departamentos}}">{{$empresas->departamentos}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('PAGO EXTERNO:', 'PAGO EXTERNO:') !!}
                      <select class="form-control" id="pago_externo" name="pago_externo" >
                      <option value="">SELECCIONE SI TIENE PAGO EXTERNO</option>
                        @foreach($pagos_ext as $pagos_externos)
                        <option value="{{$pagos_externos->nombre_pago}}">{{$pagos_externos->nombre_pago}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('SUPERVISOR:', 'SUPERVISOR:') !!}
                      <select class="form-control" id="supervisor" name="supervisor" >
                      <option value="">SELECCIONE SI TIENE SUPERVISOR</option>
                        @foreach($pagos_ext as $pagos_externos)
                        <option value="{{$pagos_externos->nombre_pago}}">{{$pagos_externos->nombre_pago}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('SUPERVISOR ASIGNADO:', 'SUPERVISOR ASIGNADO:') !!}
                      <select class="form-control" id="supervisor_asignado" name="supervisor_asignado" >
                      <option value="">SELECCIONE UN SUPERVISOR A CARGO</option>
                        @foreach($empleado as $empleados)
                        <option value="{{$empleados->nombre}}">{{$empleados->nombre}}</option>
                        @endforeach
                    </select>
                  </div>


                  <div class="form-group">
                      {!! Form::label('SELECCIONE EL PUESTO:', 'SELECCIONE EL PUESTO:') !!}
                      <select class="form-control" id="puesto" name="puesto" >
                      <option value="">SELECCIONE EL PUESTO</option>
                        @foreach($puesto as $puestos)
                        <option value="{{$puestos->nombre_puesto}}">{{$puestos->nombre_puesto}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('SELECCIONE EL TURNO:', 'SELECCIONE EL TURNO:') !!}
                      <select class="form-control" id="turno" name="turno" >
                      <option value="">SELECCIONE EL TURNO</option>
                        @foreach($turno as $turnos)
                        <option value="{{$turnos->nombre_turno}}">{{$turnos->nombre_turno}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                      {!! Form::label('SUELDO:', 'SUELDO:') !!}
                      {!! Form::text('sueldo', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el sueldo asignado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('BONO:', 'BONO:') !!}
                      {!! Form::text('bono', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el bono asignado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('OBSERVACIONES:', 'OBSERVACIONES:') !!}
                      {!! Form::text('observaciones', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'OBSERVACIONES']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('ESTATUS:', 'ESTATUS:') !!}
                      {!! Form::text('estatus', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el Estatus del Contrato']) !!}
                  </div>
                

                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
   <script type="text/javascript">  
        $('.date').datepicker({  
           format: 'yyyy-mm-dd'
         });  
    </script> 
@endsection