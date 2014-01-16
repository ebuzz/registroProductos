@extends('articulos.base')

@section('auxiliarArticulos')
<h1>Registro de articulos</h1>
{{ Form::open(array('url'=>'articulo/validar'))}}
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
{{Form::label('descripcion','Descripcion:') }}<br />
{{Form::text('descripcion',Input::old('descripcion'),array('class'=>'form-control','placeholder'=>'Descripcion')) }}
	@if($errors->has('descripcion'))
		@foreach($errors->get('descripcion') as $error)
			<br/> {{ $error}}
		@endforeach
	@endif
</div>

<div>
{{Form::label('precio','Precio:') }}<br />
{{Form::text('precio',Input::old('precio'),array('class'=>'form-control','placeholder'=>'Precio')) }}
	@if($errors->has('precio'))
		@foreach($errors->get('precio') as $error)
			<br/> {{ $error}}
		@endforeach
	@endif
</div>

<div>
{{Form::label('departamento','Departamento:') }}<br />
<select name="departamento" class="form-control" required>
@foreach($departamentos as $departamento)
	<option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
@endforeach
</select>
	@if($errors->has('departamento'))
		@foreach($errors->get('departamento') as $error)
			<br/> {{ $error}}
		@endforeach
	@endif
</div>

<div>
{{ Form::submit('Guardar',array('class'=>'form-control')) }}
</div>
{{ Form::close() }}
@stop