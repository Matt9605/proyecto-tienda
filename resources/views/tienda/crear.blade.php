@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          <form method="POST" action="/tiendas">
            @csrf
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
              <label for="direccion">Direccion</label>
              <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            <div class="form-group">
              <label for="direccion">Teléfono</label>
              <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection