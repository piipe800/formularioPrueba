@extends('layouts.plantilla')

@section('content')
<h1>Para mostrar</h1>
<a href="{{route('prueba.index')}}">Inicio</a>
<a href="{{route('prueba.index')}}">Edtiar formulario</a>

<p><strong>Nombre</strong>{{$prueba->nombre}}</p>
<p>{{$prueba->descripcion}}</p>
@endsection