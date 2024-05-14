@extends('layouts.app')

@section('title', 'Editar categoría')

@section('content')
<div class="container mt-5">
    <!-- Encabezado -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center alert alert-primary">
                Editar categoría
            </h1>
        </div>
    </div>

    <!-- Botón de regreso -->
    <div class="row mb-4">
        <div class="col-12 text-right">
            <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">
                Regresar
            </a>
        </div>
    </div>

    <!-- Formulario de edición -->
    <div class="row">
        <div class="col-12">
            <form action="{{ route('categories.update', $category->id) }}" method="POST" class="card p-3">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Guardar cambios</button>
            </form>
        </div>
    </div>
</div>
@endsection