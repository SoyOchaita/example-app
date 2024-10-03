<!-- resources/views/products.blade.php -->
@extends('layouts.layout')

@section('title', 'Detalles del Producto')

@section('content')
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Catorce Street</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Misión - Visión</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container mt-5">
        <h1 class="text-center">Detalles del Producto</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th rowspan="2">Precio</th>
                    <th colspan="2">Modelo</th>
                    <th colspan="2">Descripción</th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Talla</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Q250.00</td>
                    <td>The League 9FORTY</td>
                    <td>New Era</td>
                    <td>Azul</td>
                    <td>Ajustable</td>
                </tr>
                <tr>
                    <td>Q275.00</td>
                    <td>Yankees Black Onixx</td>
                    <td>New Era</td>
                    <td>Negro</td>
                    <td>Ajustable</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
