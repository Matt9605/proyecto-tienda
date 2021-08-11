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
                                Nombres
                            </th>
                            <th>
                                Nit
                            </th>
                            <th>
                                Teléfono
                            </th>
                        </thead>
                        <tbody>
                            @foreach($proveedores as $key => $proveedor)
                            <tr>
                                <td>
                                    {{$proveedor->nombre}}
                                </td>
                                <td>
                                    {{$proveedor->nit}}
                                </td>
                                <td>
                                    {{$proveedor->telefono}}
                                </td>
                                <td>
                                    <a class="btn btn-success" href="/proveedores/{{$proveedor->id}}/edit">Editar</a>
                                    <a class="btn btn-danger" href="/proveedores/{{$proveedor->id}}/eliminar">Eliminar</a>
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
