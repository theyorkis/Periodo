@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'periodo')

@section('content')



<div class="container mt-4">
    <img src="img/itca.jpg" alt="logo" height="150" width="600" class="rounded border-Dark">        <div class="mb-3">
    <h1>PERIODO</h1>
    <form id="formulario">
        
            <label for="PERIODO" class="form-label">PERIODO</label>
            <input type="text" class="form-control" id="PERIODO" placeholder="Ingrese el id del periodo">
        </div>
        <div class="mb-3">
            <label for="Nombre_corto" class="form-label">Nombre_corto</label>
            <input class="form-control" id="Nombre_corto"  placeholder="Ingrese primer nombre">
            
        </div>
        <div class="col-mb-3">
            <label for="Nombre_largo" class="form-label">Nombre_largo</label>
            <input class="form-control" id="Nombre_corto"  placeholder="Ingrese nombre completo">
            
        </div>
        <div class="mb-3">
            <label for="Fecha_inicio" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
              </svg>Fecha_inicio</label>
            <input class="form-control" id="Fecha_inicio"  placeholder="Ingrese fecha de inicio">
        </div>
        <div class="mb-3">
            <label for="Fecha_final" class="form-label">Fecha_final</label>
            <input class="form-control" id="Fecha_final"  placeholder="Ingrese fecha de finalizacion">
        <div class="mb-3">
            <label for="Estatus" class="form-label">Estatus</label>
            <input class="form-control" id="Estatus"  placeholder="Ingrese estatus">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre_corto</th>
                <th scope="col">Nombre_largo</th>
                <th scope="col">Fecha_inicio</th>
                <th scope="col">Fecha_final</th>
                <th scope="col">Estatus</th>
            </tr>
        </thead>
        <tbody id="tabla-body">
            <!-- Aquí mostrarás los datos existentes -->
        </tbody>
    </table>
</div>


    
  </div>
@endsection