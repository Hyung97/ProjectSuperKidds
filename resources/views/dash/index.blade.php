@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-tittle">Prueba</h5>
        </div>
            <div class="card-body">
                <p>HOLA</p>
            </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
        Swal.fire(
        'Bienvenido!',
)
    </script>
@stop