@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form>
  <div class="form-group">
    <label for="nombre">Numero de factura</label>
    <input type="text" class="form-control" id="numero_factura" name="numero_factura">
    </div>
  <div class="form-group">
    <label for="direccion">fecha</label>
    <input type="text" class="form-control" id="fecha" name="fecha">
  </div>
 <div class="form-group">
    <label for="direccion">valor venta</label>
    <input type="text" class="form-control" id="valor_venta" name="valor_venta">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection