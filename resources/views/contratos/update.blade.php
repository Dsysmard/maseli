@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>EDITOR DE CONTRATOS</h1><hr/>
</div>
  <div class="row jumbotron" style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
    <div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
      {!! Form::model($contrato, ['method' => 'PATCH', 'action' => ['ContratosController@update', $contrato->id]]) !!}
            
                {!! Form::hidden('id', $contrato->id) !!}

                <div class="form-group">
                      {!! Form::label('SELECCIONE EL NOMBRE DEL EMPLEADO:', 'SELECCIONE EL NOMBRE DEL EMPLEADO:') !!}
                      {!! Form::text('empleado', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el nombre del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('SELECCIONE EL NOMBRE DE LA EMPRESA:', 'SELECCIONE EL NOMBRE DE LA EMPRESA:') !!}
                      {!! Form::text('empresa', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el nombre del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('SELECCIONE EL DEPARTAMENTO:', 'SELECCIONE EL DEPARTAMENTO:') !!}
                      {!! Form::text('departamento', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el nombre del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('PAGO EXTERNO:', 'PAGO EXTERNO:') !!}
                      {!! Form::text('pago_externo', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Indique el pago externo']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('SUPERVISOR:', 'SUPERVISOR:') !!}
                      {!! Form::text('supervisor', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Indique si tiene supervisor a cargo']) !!}
                  </div>


                  <div class="form-group">
                      {!! Form::label('NOMBRE SUPERVISOR ASIGNADO:', 'NOMBRE SUPERVISOR ASIGNADO:') !!}
                      {!! Form::text('supervisor_asignado', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el nombre del supervisor']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('PUESTO:', 'PUESTO:') !!}
                      {!! Form::text('puesto', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el puesto asignado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('TURNO:', 'TURNO:') !!}
                      {!! Form::text('turno', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el turno asignado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('HORARIO:', 'HORARIO:') !!}
                      {!! Form::text('horario', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Seleccione el horario asignado']) !!}
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
           format: 'mm-dd-yyyy',
           language: "es"
         });  
    </script> 
@endsection