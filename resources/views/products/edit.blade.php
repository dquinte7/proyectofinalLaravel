@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h1><i class="fas fa-edit"></i> Editar producto</h1>
                </div>
                <div class="card-body">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-danger mb-4">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Resto del formulario -->
                        <button type="submit" class="btn btn-primary mt-3">
                            <i class="fas fa-save"></i> Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection