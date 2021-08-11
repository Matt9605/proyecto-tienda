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
                <table class="table">
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
                            @foreach($tiendas as $key => $tienda)
                            <tr>
                                <td>
                                    {{$tienda->nombre}}
                                </td>
                                <td>
                                    {{$tienda->direccion}}
                                </td>
                                <td>
                                    {{$tienda->telefono}}
                                </td>
                                <td>
                                    <a class="btn btn-success" href="/tiendas/{{$tienda->id}}/edit">Editar</a>
                                    <a class="btn btn-danger" href="/tiendas/{{$tienda->id}}/eliminar">Eliminar</a>
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
