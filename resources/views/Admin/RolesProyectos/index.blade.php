@extends('layouts.app')
@if($compania!=null)
    @section('company',$compania->Descripcion)
@endif
@section('content')
    @include('layouts.top-nav')
    <div class="container container-rapi2">
        <main role="main" class="ml-sm-auto">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 h2-less">Roles en Proyectos de @yield('company','Sin Compañia')</h1>
            </div>
        </main>
        <div id="Alert"></div>
    </div>
    @if ( session('mensaje') )
        <div class="container-edits" style="margin-top: 2%">
            <div class="alert alert-success" class='message' id='message'>{{ session('mensaje') }}</div>
        </div>
    @endif
    @isset($mensaje)
        <div class="container-edits" style="margin-top: 2%">
            <div class="alert alert-warning" class='message' id='message'>{{ $mensaje }}</div>
        </div>
    @endisset
    @if ( session('mensajeAlert') )
        <div class="container-edits" style="margin-top: 2%">
            <div class="alert alert-warning" class='message' id='message'>{{ session('mensajeAlert') }}</div>
        </div>
    @endif
    @if ( session('mensajeDanger') )
        <div class="container-edits" style="margin-top: 2%">
            <div class="alert alert-danger" class='message' id='message'>{{ session('mensajeDanger') }}</div>
        </div>
    @endif
    @if($errors->any())
        <div class="container-edits" style="margin-top: 1%">
            <div class="alert alert-danger" class='message' id='message'>
                Se encontraron los siguientes errores: <br>
                @foreach($errors->all() as $error)
                    <br>
                    {{'• '.$error }}
                @endforeach
            </div>
        </div>
    @endif
    <div class="container">
        <div data-simplebar class="table-responsive table-height">
            <div class="col text-center">
                <table class="table table-striped table-bordered mydatatable">
                    <thead class="table-header">
                    <tr>
                        <th scope="col" style="text-transform: uppercase">Identificador</th>
                        <th scope="col" style="text-transform: uppercase">Descripción</th>
                        <th scope="col" style="text-transform: uppercase">Usuario</th>
                        <th scope="col" style="text-transform: uppercase">Puesto en la empresa</th>
                        <th scope="col" style="text-transform: uppercase">Rol RASIC</th>
                        <th scope="col" style="text-transform: uppercase">Enfoque</th>
                        <th scope="col" style="text-transform: uppercase">Trabajo</th>
                        <th scope="col" style="text-transform: uppercase">Indicador</th>
                        <th scope="col" style="text-transform: uppercase">Estado</th>
                        <th scope="col" style="text-transform: uppercase">Registro</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($proyecto as $item)
                        <tr id="{{$item->Clave}}">
                            <td class="td td-center">{{$item->Clave}}</td>
                            <td class="td td-center">{{$item->Descripcion}}</td>
                            <td class="td td-center">{{$item->Usuario}}</td>
                            <td class="td td-center">{{$item->Puesto}}</td>
                            <td class="td td-center">
                                <a class="btn btn btn-success no-href" clave="{{$item->Clave}}" onclick="changeFase(this);"><i class="fas fa-edit"></i> {{$item->Fase}}</a>
                            </td>
                            <td class="td td-center">{{$item->RASIC}}</td>
                            <td class="td td-center">{{$item->Trabajo}}</td>
                            <td class="td td-center">{{$item->Indicador}}</td>
                            <td class="td td-center">
                                <a class="btn btn btn-warning no-href" clave="{{$item->Clave}}" onclick="changeEstado(this);"><i class="fas fa-edit"></i> {{$item->Status}}</a>
                            </td>
                            <td class="td td-center">
                                <a class="btn btn btn-info no-href" href="{{route('TypeActivity', $item->Clave)}}"><i class="fas fa-edit"></i> Registrar Actividad</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot class="table-footer">
                    <tr>
                        <th style="text-transform: uppercase">Identificador</th>
                        <th style="text-transform: uppercase">Descripción</th>
                        <th style="text-transform: uppercase">Objetivo</th>
                        <th style="text-transform: uppercase">Área</th>
                        <th style="text-transform: uppercase">Fase</th>
                        <th style="text-transform: uppercase">Enfoque</th>
                        <th style="text-transform: uppercase">Trabajo</th>
                        <th style="text-transform: uppercase">Indicador</th>
                        <th scope="col" style="text-transform: uppercase">Estado</th>
                        <th style="text-transform: uppercase">Registro</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        $('.mydatatable').DataTable();

        function AddProject() {
            $('#myModal').load( '{{ url('/Admin/Proyectos/New') }}',function(response, status, xhr)
            {
                if (status == "success")
                    $('#myModal').modal('show');
            });
        }

        function changeEstado(button){
            var clave = $(button).attr('clave');
            $('#myModal').load( '{{ url('/Admin/Proyectos/ChangeStatus') }}/'+clave,function(response, status, xhr){
                if ( status == "success" ) {
                    $('#myModal').modal('show');
                }
            } );
        }

        function changeFase(button){
            var clave = $(button).attr('clave');
            $('#myModal').load( '{{ url('/Admin/Proyectos/ChangeStage') }}/'+clave,function(response, status, xhr){
                if ( status == "success" ) {
                    $('#myModal').modal('show');
                }
            } );
        }

        function add(button){
            var clave = $(button).attr('clave');
            $('#myModal').load( '{{ url('/Admin/Actividades/New') }}/'+clave,function(response, status, xhr){
                if ( status == "success" ) {
                    $('#myModal').modal('show');
                }
            } );
        }
    </script>
@endsection
