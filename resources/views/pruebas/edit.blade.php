@extends('layouts.plantilla')

@section('content')


<div class="container py-4">
    <div class="card bg-light">
        <div class="card-header" >
            <h2 class="text-center text-primary">Edita el formulario</h2>

        </div>
            <div class="card-body">
                <form action="{{route('pruebas.store')}}" method="POST">  
                    @csrf

                    <div class="alert alert-dark" role="alert">
                        <h4 class="alert-heading text-primary">¡Recuerda!</h4>
                        <p class="mb-0">Debes hacer click en cada label para editarlo.</p>
                    </div>
                <div class="container">
                       
                    <div class="form-group row">
                        <label class="col-sm3 col-form-label" contenteditable="true">Nombre</label>
                        <div class="col-sm-3">
                            <input type="text" name="nombre" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm3 col-form-label" contenteditable="true">Apellidos</label>
                        <div class="col-sm-3">
                            <input type="text" name="apellidos" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm3 col-form-label" contenteditable="true">Descripcion</label>
                        <div class="col-sm-3">
                            <input type="text" name="descripcion" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm3 col-form-label" contenteditable="true">Telefono</label>
                        <div class="col-sm-3">
                            <input type="text" name="telefono" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm3 col-form-label" contenteditable="true">Correo electronico</label>
                        <div class="col-sm-3">
                            <input type="email" name="email" class="form-control" disabled>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        
                        <div class="col-auto col-form-label">
                            <a href="{{route('pruebas.create')}}" type="button" class="btn btn-primary">Volver</a>
                        </div>
                    </div>
                </div>    
                </form>
            </div>
        
    </div>
</div>
@endsection