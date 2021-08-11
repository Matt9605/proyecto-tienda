@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>
                                Fecha
                            </th>
                            <th>
                                Número Factura
                            </th>
                            <th>
                                Vendedor
                            </th>
                            <th>
                                Tienda
                            </th>
                            <th>
                                Valor
                            </th>
                        </thead>
                        <tbody>
                            @foreach($ventas as $key => $venta)
                            <tr>
                                <td>
                                    {{$venta->fecha}}
                                </td>
                                <td>
                                    {{$venta->numero_factura}}
                                </td>
                                <td>
                                    {{$venta->vendedor->name}}
                                </td>
                                <td>
                                    {{$venta->tienda->nombre}}
                                </td>
                                <td>
                                    {{$venta->valor_venta}}
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    
                    </table> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection