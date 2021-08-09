@extends('layouts.plantilla')

@section('content')
<div class="text-primary">
    <figure class="text-center">
        <blockquote class="blockquote">
            <h1>Bienvenido</h1>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">Elige una opcion </cite>
        </figcaption>
      </figure>
    </div>

<div class="container">
    <div class="row">
    <div class="col-auto col-form-label">
        <a href="{{route('pruebas.index')}}" type="button" class="btn btn-primary">Lista de registros</a>
    </div>
    <div class="col-auto col-form-label">
        <a href="{{route('pruebas.create')}}" type="button" class="btn btn-primary">Agregar registro</a>
    </div>
    </div>
</div>
@endsection