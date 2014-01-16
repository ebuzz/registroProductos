@extends('articulos.base')

@section('auxiliarArticulos')
<h1>Registro de usuarios</h1>
{{ Form::open(array('url'=>'usuarios/validar'))}}
<div>
{{Form::label('nombre','Nombre:') }}<br />
{{Form::text('nombre',Input::old('nombre'),array('class'=>'form-control','placeholder'=>'Nombre')) }}
	@if($errors->has('nombre'))
		@foreach($errors->get('nombre') as $error)
			<br/> {{ $error}}
		@endforeach
	@endif
</div>

<div>
{{Form::label('apellido','apellido:') }}<br />
{{Form::text('apellido',Input::old('apellido'),array('class'=>'form-control','placeholder'=>'apellido')) }}
	@if($errors->has('apellido'))
		@foreach($errors->get('apellido') as $error)
			<br/> {{ $error}}
		@endforeach
	@endif
</div>

<div>
{{Form::label('email','email:') }}<br />
{{Form::email('email',Input::old('email'),array('class'=>'form-control','placeholder'=>'email')) }}
	@if($errors->has('email'))
		@foreach($errors->get('email') as $error)
			<br/> {{ $error}}
		@endforeach
	@endif
</div>

<div>
{{Form::label('password','password:') }}<br />
{{Form::text('password',Input::old('password'),array('class'=>'form-control','placeholder'=>'password')) }}
	@if($errors->has('password'))
		@foreach($errors->get('password') as $error)
			<br/> {{ $error}}
		@endforeach
	@endif
</div>

<div>
{{ Form::submit('Guardar',array('class'=>'form-control')) }}
</div>
{{ Form::close() }}
@stop