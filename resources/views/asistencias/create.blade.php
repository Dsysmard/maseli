@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>REGISTRAR NUEVO ESTADO</h1><hr/>
</div>
	<div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
		<div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
			{!! Form::open(['route' => 'asistencias.store', 'method' => 'post', 'novalidate']) !!}

                  <div class="form-group">
                      {!! Form::label('NOMBRE DEL EMPLEADO:', 'NOMBRE DEL EMPLEADO:') !!}
                      {!! Form::text('empleado', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre del empleado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('NOMBRE DE EMPRESA:', 'NOMBRE DE EMPRESA:') !!}
                      {!! Form::text('empresa', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre de la empresa']) !!}
                  </div>

                  <div class="form-group datepicker">
                      {!! Form::label('TURNO:', 'TURNO:') !!}
                      {!! Form::text('turno', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el turno']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('Fecha:', 'Fecha:') !!}
                      {!! Form::text('fecha', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese la fecha']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('ASISTENCIA:', 'ASISTENCIA:') !!}
                      {!! Form::text('asistencia', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Asistio']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('FALTA JUSTIFICADA:', 'FALTA JUSTIFICADA:') !!}
                      {!! Form::text('falta_justificada', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Falta justificada']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('FALTA INJUSTIFICADA:', 'FALTA INJUSTIFICADA:') !!}
                      {!! Form::text('falta_injustificada', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'falta injustificada']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('ONSERVACIONES:', 'ONSERVACIONES:') !!}
                      {!! Form::text('observaciones', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Observaciones']) !!}
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