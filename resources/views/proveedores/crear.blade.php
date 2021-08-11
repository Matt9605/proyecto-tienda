@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Proveedores
                    @if (session('status'))       

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                </div>

                <div class="card-body">
                    <form method="POST" action ="/proveedores">
                    @csrf 

                        <div class="form-group">
                          <label for="nombres">Nombres</label>
                          <input type="text" class="form-control" id="nombres" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="nombres">Nit</label>
                            <input type="text" class="form-control" id="nit" name="nit">
                          </div>
                          <div class="form-group">
                            <label for="nombres">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono">
                          </div>
                         


                        <button type="submit" class="btn btn-primary">Crear</button>
                      </form>
                     
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
