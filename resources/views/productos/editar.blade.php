@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Productos
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
                    <form method="POST" action ="/productos/{{$productos->id}}">
                        <div class="form-group">
                          <label for="marca">Marca</label>
                          <input value="{{$productos->marca}}" type="text" class="form-control" id="marca" name="marca">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input value="{{$productos->precio}}" type="text" class="form-control" id="precio" name="precio">
                          </div>
                          <div class="form-group">
                            <label for="stock">Stock</label>
                            <input value="{{$productos->stock}}" type="text" class="form-control" id="stock" name="stock">
                          </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </form>
                     
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
