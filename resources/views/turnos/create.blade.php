@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>REGISTRAR NUEVO TURNO</h1><hr/>
</div>
	<div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
		<div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
			{!! Form::open(['route' => 'turnos.store', 'method' => 'post', 'novalidate']) !!}

                  <div class="form-group">
                      {!! Form::label('NOMBRE DEL TURNO:', 'NOMBRE DEL TURNO:') !!}
                      {!! Form::text('nombre_turno', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre del turno']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('HORARIO:', 'HORARIO:') !!}
                      {!! Form::text('horario', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el horario']) !!}
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