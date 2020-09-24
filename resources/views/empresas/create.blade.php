@extends('layouts.menu')

@section('content')
<div class="container-fluid">
<div class="big-padding text-center blue-grey white-text section-padding">
<h1>REGISTRAR NUEVA EMPRESA</h1><hr/>
</div>
	<div class="row jumbotron " style="padding-top: 20px;border-top-width: 20px;margin-top: 30px;">
		<div class="col-md-10 col-md-offset-1"style="margin: 2% 50px 75px 100px;">
			{!! Form::open(['route' => 'empresas.store', 'method' => 'post', 'novalidate']) !!}

                  <div class="form-group">
                      {!! Form::label('NOMBRE DE LA EMPRESA:', 'NOMBRE DE LA EMPRESA:') !!}
                      {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre de la empresa']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('CALLE:', 'CALLE:') !!}
                      {!! Form::text('calle', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre de la calle']) !!}
                  </div>
                  
                  <div class="form-group">
                      {!! Form::label('NUMERO EXTERIOR:', 'NUMERO EXTERIOR:') !!}
                      {!! Form::text('num_ext', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el numero exterior']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('NUMERO INTERIOR:', 'NUMERO INTERIOR:') !!}
                      {!! Form::text('num_int', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el numero interior']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('COLONIA:', 'COLONIA:') !!}
                      {!! Form::text('colonia', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre de la colonia']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('CODIGO POSTAL:', 'CODIGO POSTAL:') !!}
                      {!! Form::text('cp', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el codigo postal']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('MUNICIPIO:', 'MUNICIPIO:') !!}
                      {!! Form::text('municipio', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre del municipio']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('DELEACION:', 'DELEACION:') !!}
                      {!! Form::text('delegacion', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre del estado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('ESTADO:', 'ESTADO:') !!}
                      {!! Form::text('estado', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el nombre del estado']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('DEPARTAMENTOS:', 'DEPATAMENTOS:') !!}
                      {!! Form::text('departamentos', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese los nombres de los departamentos']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('CONTACTOS:', 'CONTACTOS:') !!}
                      {!! Form::text('contactos', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese los nombres de los departamentos']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('ESTATUS:', 'ESTATUS:') !!}
                      {!! Form::text('estatus', null, ['class' => 'form-control' , 'required' => 'required','placeholder'=>'Ingrese el estatus de la empresa']) !!}
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