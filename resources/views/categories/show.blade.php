@extends('layouts.app')

@section('title', 'Ver categoría')

@section('content')
<div class="container mt-5">
    <!-- Encabezado -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center alert alert-primary">
                <i class="fas fa-info-circle"></i> Detalle de la categoría
            </h1>
        </div>
    </div>

    <!-- Botón de regreso -->
    <div class="row mb-4">
        <div class="col-12 text-right">
            <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left"></i> Volver
            </a>
        </div>
    </div>

    <!-- Detalles de la categoría -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>ID:</strong> {{ $category->id }}</li>
                    <li class="list-group-item"><strong>Nombre:</strong> {{ $category->name }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection