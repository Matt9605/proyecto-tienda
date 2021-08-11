@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          <form method="POST" action="/ventas">
            @csrf
            <div class="form-group">
              <label for="nombres">Tienda</label>
              <select class="form-control" name="tienda_id" id="tienda_id">
              
                @foreach ($tiendas as $tienda)
                    <option   value="{{$tienda->id}}">{{$tienda->nombre}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="nombre">Numero de factura</label>
              <input type="text" value="{{time()}}" class="form-control" id="numero_factura" name="numero_factura">
            </div>
            <div class="form-group">
              <label for="direccion">Fecha</label>
              <input type="date" value="{{date('Y-m-d')}}" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="form-group">
              <label for="direccion">Valor venta</label>
              <input type="text" class="form-control" id="valor_venta" name="valor_venta">
            </div>

            <table class="table" id="productos_table">
              <thead>
                <th width="25%">
                  Nombre producto
                </th>
                <th>
                  Valor
                </th>
                <th>
                  Cantidad
                </th>
                <th>
                  Valor total
              
                </th>
                <th width="10%">
                  <input type="hidden" value="{{ json_encode($productos) }}" id="list_productos">
                  <button type="button" class="btn btn-primary" id="btn_agregar_producto">Agregar</button>
                </th>
              </thead>
              <tbody>
                <tr id="row-1">
                  <td>
                    <select class="form-control productos" name="producto_id[]" data-id="1" id="producto_id-1">     
                      <option value="">Seleccione</option>             
                      @foreach ($productos as $producto)
                      <option value="{{$producto->id}}" data-precio="{{$producto->precio}}"> {{$producto->marca}}</option>
                    @endforeach
                    </select>
                   
                  </td>         
           
                  <td>
                    <input type="text" id="valor-1" name="valor[]" class="form-control" >
                  </td>
                  <td>
                    <input type="text" data-id="1" name="cantidad[]" value="1" id="cantidad-1" class="form-control cantidad" >
                  </td>
                  <td>
                    <input type="text" id="total-1" name="total[]" class="form-control totales" >
                  </td>
                  <td id="td_button-1">
                    <button type="button" data-id="1"  id="btn_delete_producto-1" class="btn btn-danger btn_delete_producto">-</button>
                  </td>
                </tr> 
              
               
              </tbody>
            </table>


            <button type="submit" class="btn btn-success">Guardar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection