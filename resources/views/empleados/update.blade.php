@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>EDITOR DEL CATALOGO DE EMPLEADOS</h1><hr/>
</div>
  <div class="row jumbotron" style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
    <div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
      {!! Form::model($empleado, ['method' => 'PATCH', 'action' => ['EmpleadosController@update', $empleado->id]]) !!}
            
                {!! Form::hidden('id', $empleado->id) !!}

                <div class="form-group">
                      {!! Form::label('NOMBRE DEL EMPLEADO:', 'NOMBRE DEL EMPLEADO:') !!}
                      {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('APELLIDO PATERNO:', 'APELLIDO PATERNO:') !!}
                      {!! Form::text('ap_paterno', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el apellido paterno del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('APELLIDO MATERNO:', 'APELLIDO MATERNO:') !!}
                      {!! Form::text('ap_materno', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el apellido materno del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('FECHA DE NACIMIENTO:', 'FECHA DE NACIMIENTO:') !!}
                      {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese la fecha de nacimiento del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('GENERO:', 'GENERO:') !!}
                      {!! Form::text('genero', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el genero del empleado']) !!}
                  </div>
                
                  <div class="form-group">
                      {!! Form::label('CURP:', 'CURP:') !!}
                      {!! Form::text('curp', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el curp del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('RFC:', 'RFC:') !!}
                      {!! Form::text('rfc', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el rfc del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO DE SEGURO SOCIAL:', 'NUMERO DE SEGURO SOCIAL:') !!}
                      {!! Form::text('nss', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el numero de seguro social']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('INFONAVIT:', 'INFONAVIT:') !!}
                      {!! Form::text('infonavit', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese si el empleado tiene infonavit']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('DESCUENTO DE INFONAVIT:', 'DESCUENTO DE INFONAVIT:') !!}
                      {!! Form::text('desc_infonavit', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese cuanto se le descuenta al empleado de infonavit']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('CALLE:', 'CALLE:') !!}
                      {!! Form::text('calle', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese la calle donde vive el empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO EXTERIOR:', 'NUMERO EXTERIOR:') !!}
                      {!! Form::text('num_ext', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el numero exterior del domicilio']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO INTERIOR:', 'NUMERO INTERIOR:') !!}
                      {!! Form::text('num_int', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el numero interior del domicilio']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('COLONIA:', 'COLONIA:') !!}
                      {!! Form::text('colonia', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre de la colonia del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('CODIGO POSTAL:', 'CODIGO POSTAL:') !!}
                      {!! Form::text('cp', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el codigo postal']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('MUNICIPIO:', 'MUNICIPIO:') !!}
                      {!! Form::text('municipio', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el municipio']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('DELEGACION:', 'DELEGACION:') !!}
                      {!! Form::text('delegacion', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese la delegacion']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('ESTADO:', 'ESTADO:') !!}
                      {!! Form::text('estado', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el estado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('TELEFONO:', 'TELEFONO:') !!}
                      {!! Form::text('telefono', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el telefono']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('EMAIL:', 'EMAIL:') !!}
                      {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el email del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('BANCO AFILIADO:', 'BANCO AFILIADO:') !!}
                      {!! Form::text('banco', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el banco afiliado del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('TARJETA DE DEBITO:', 'TARJETA DE DEBITO:') !!}
                      {!! Form::text('tdd', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el numero de tarjeta de debito del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('FECHA DE INGRESO:', 'FECHA DE INGRESO:') !!}
                      {!! Form::text('fecha_ingreso', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese la fecha de ingreso del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('FECHA DE BAJA:', 'FECHA DE BAJA:') !!}
                      {!! Form::text('fecha_baja', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese la fecha de baja del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('MOTIVO DE BAJA:', 'MOTIVO DE BAJA:') !!}
                      {!! Form::text('motivo_baja', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el motivo de baja del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('OBSERVACIONES:', 'OBSERVACIONES:') !!}
                      {!! Form::text('observaciones', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese las observaciones de baja del empleado']) !!}
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