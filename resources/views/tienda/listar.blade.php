@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
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
                <table>
                        <thead>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Direccion
                            </th>
                            <th>
                                Teléfono
                            </th>
                        </thead>
                        <tbody>
                            @foreach($tiendas as $key => $tiendas)
                            <tr>
                                <td>
                                    {{$tiendas->nombre}}
                                </td>
                                <td>
                                    {{$tiendas->nit}}
                                </td>
                                <td>
                                    {{$tiendas->telefono}}
                                </td>
                                <td>
                                    <a class="btn btn-success" href="/tienda/{{$tienda->id}}/edit">Editar</a>
                                    <a class="btn btn-danger" href="/tienda/{{$tienda->id}}/eliminar">Eliminar</a>
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
