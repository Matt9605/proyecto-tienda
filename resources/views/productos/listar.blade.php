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
                                Marca
                            </th>
                            <th>
                                Precio
                            </th>
                            <th>
                                Stock
                            </th>
                        </thead>
                        <tbody>
                            @foreach($productos as $key => $productos)
                            <tr>
                                <td>
                                    {{$productos->marca}}
                                </td>
                                <td>
                                    {{$productos->precio}}
                                </td>
                                <td>
                                    {{$productos->stock}}
                                </td>
                                <td>
                                    <a class="btn btn-success" href="/productos/{{$productos->id}}/edit">Editar</a>
                                    <a class="btn btn-danger" href="/productos/{{$productos->id}}/eliminar">Eliminar</a>
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
