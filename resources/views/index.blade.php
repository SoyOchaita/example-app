<!-- resources/views/index.blade.php -->
@extends('layouts.layout')

@section('title', 'Catorce Street - Productos')

@section('content')
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Catorce Street</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto.form') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Misión - Visión</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container mt-5">
        <h1 class="text-center">Productos</h1>
        <div class="row">
            <!-- Primer producto -->
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('img/NewEraAzul.png') }}" class="card-img-top" alt="Gorra New Era Curva">
                    <div class="card-body">
                        <h5 class="card-title">Gorra New Era Curva</h5>
                        <p class="card-text">Una gorra cómoda y estilizada.</p>
                        <!-- Enlace para ver más detalles -->
                        <a href="{{ url('/productos') }}" class="btn btn-primary">Ver más detalles</a>
                    </div>
                </div>
            </div>
            <!-- Segundo producto -->
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('img/NewEraNegro.png') }}" class="card-img-top" alt="Gorra New Era Plana">
                    <div class="card-body">
                        <h5 class="card-title">Gorra New Era Plana</h5>
                        <p class="card-text">Una gorra moderna y elegante.</p>
                        <!-- Enlace para ver más detalles -->
                        <a href="{{ url('/productos') }}" class="btn btn-primary">Ver más detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
