@extends('layouts.app')

@push('styles')
<!-- aqui van los estilos de cada vista -->

@endpush
@include('content.roles_permissions.header')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header mb-1">
    
    </section> 

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Roles y permisos</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>

          </div>
        </div>
        <div class="card-body" id="content_admin_roles">
            <div class="row" style="font-size:14px">
                <div class="col-md-4" id="content_form">
                <div class="card card-dark">
                   <div class="card-header"  style="min-height:50px">
                     <h6>Nuevo rol</h6>
                  </div>
                <div class="card-body">
                <form class="for" action="{{url('roles')}}" id="myFormCreateRole">
                    @csrf
                    <input type="hidden" required class="form-control" id="id" name="id">
                  
                    <div class="form-group">
                        <label for="display_name">Nombre largo</label>
                        <input type="text" required class="form-control" id="name" name="name">
                    </div>
{{-- 
                    <div class="form-group">
                        <label for="name">Nombre corto</label>
                        <input type="text" required class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción</label>
                    <textarea required class="form-control" name="description" rows="2" id="description"></textarea>    
                    </div> --}}
                @if(Auth::user()->can('edit_roles') || Auth::user()->can('crear_roles'))
                    <button type="submit" id="btn_save_role" name="button" class="btn btn-success btn-block">Guardar</button>
                @endif   

                  
                    <button type="button" style="display:none" data-form="myFormCreateRole" id="btn_save_cancel" class="btn btn-default btn-block">Cancelar</button>
                    
                </form>
                </div>

                </div>
              
                

                </div>

                <div class="col-md-8">

            <div class="card-body table-responsive p-0 ">
            <div class="card card-dark">
              <div class="card-header"  style="min-height:50px">
              <h6>Roles activos</h6>
                <div class="card-tools"> 
                
                </div>
              </div>
              <div class="card-body content_role_ajax" id="content_role_ajax">
                @include('content.roles_permissions.ajax.list_roles')              
              </div>
            </div>
               
            </div>
                </div>


              </div>
        </div>
        <!-- /.card-body -->
       
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('scripts')
<!-- aqui van los scripts de cada vista -->
<script src="{{asset('js/AdminRoles.js')}}"></script>

@endpush