@extends('layouts.plantilla')

@section('content')


<div class="container py-4">
    <div class="card bg-light">
        <div class="card-header" >
            <h2 class="text-center text-primary">Agregue un registro nuevo</h2>

        </div>
            <div class="card-body">
                <form action="{{route('pruebas.store')}}" method="POST">  
                    @csrf
                <div class="container">
                       
                    <div class="form-group row">
                        <label class="col-sm3 col-form-label">Nombre</label>
                        <div class="col-sm-3">
                            <input type="text" name="nombre" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm3 col-form-label">Apellidos</label>
                        <div class="col-sm-3">
                            <input type="text" name="apellidos" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm3 col-form-label">Descripcion</label>
                        <div class="col-sm-3">
                            <input type="text" name="descripcion" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm3 col-form-label">Telefono</label>
                        <div class="col-sm-3">
                            <input type="text" name="telefono" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm3 col-form-label">Correo electronico</label>
                        <div class="col-sm-3">
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-auto col-form-label text-primary">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <div class="col-auto col-form-label">
                            <a href="{{route('pruebas.edit')}}" type="button" class="btn btn-primary">Editar formulario</a>
                        </div>
                        <div class="col-auto col-form-label">
                            <a href="{{route('pruebas.index')}}" type="button" class="btn btn-primary">Lista de registros</a>
                        </div>
                    </div>
                </div>    
                </form>
            </div>
        
    </div>
</div>
@endsection