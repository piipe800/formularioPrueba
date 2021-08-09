@extends('layouts.plantilla')

@section('content')

<div class="text-center"><a href="{{route('pruebas.create')}}">Agregar registro</a></div>


<div class="container">
    <div class="card bg-light">

    <div class="card-header" >
        <h2 class="text-center text-primary">Registros guardados en la base de datos</h2>
    </div>    
    
        <div class="container">
            <table class="table table-striped table-hover">
                
                <thead>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    
                </thead>
                @foreach ($prueba as $prueba) 
                <tbody>
                    <tr scope="row">
                        
                        <td>{{$prueba->name}}</td>
                        <td>{{$prueba->lastname}}</td>
                        <td>{{$prueba->descripcion}}</td>
                        <td>{{$prueba->telefono}}</td>
                        <td>{{$prueba->email}}</td>
                        
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>        
@endsection