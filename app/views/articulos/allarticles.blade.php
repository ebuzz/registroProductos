@extends('articulos.base')

@section('auxiliarArticulos')
<h1>Todos los articulos</h1>

<table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Departamento</th>
            <th>Por usuario</th>
          </tr>
        </thead>

        <tbody>
        	@foreach($articulos as $article)
          <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->nombre}}</td>
            <td>{{$article->descripcion}}</td>
            <td>{{@$article->precio}}</td>
            <td>{{$article->department_id}}</td>
            <td>{{@$article->user_id}}</td>
          </tr>
            @endforeach

        </tbody>
      </table>
@stop
