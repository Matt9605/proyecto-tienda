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
                    <form  method="POST" action ="/productos">
                    @csrf
                        <div class="form-group">
                          <label for="marca">Marca</label>
                          <input type="text" class="form-control" id="marca" name="marca">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio">
                          </div>
                          <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" id="stock" name="stock">
                          </div>
                          <div class="form-group">
                            <label for="nombres">Proveedor</label>
                            <select class="form-control" name="proveedor_id" id="proveedor_id">
                              <option value="">Seleccione</option>
                              @foreach ($proveedores as $proveedor)
                                  <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nombres">Tienda</label>
                            <select class="form-control" name="tienda_id" id="tienda_id">
                              <option value="">Seleccione</option>
                              @foreach ($tiendas as $tienda)
                                  <option value="{{$tienda->id}}">{{$tienda->nombre}}</option>
                              @endforeach
                            </select>
                          </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </form>
                     
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
