@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white text-center">
                    <h1>Productos</h1>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2 mb-4">
                        <a href="{{ route('products.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Crear un nuevo producto</a>
                    </div>
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Categoría:</strong> {{ $product->category->name }}</li>
                                    <li class="list-group-item"><strong>Precio:</strong> {{ $product->price }}</li>
                                    <li class="list-group-item"><strong>Stock:</strong> {{ $product->stock }}</li>
                                </ul>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-block"><i class="fas fa-eye"></i> Mostrar</a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-block"><i class="fas fa-edit"></i> Editar</a>
                                        <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger btn-block"><i class="fas fa-trash"></i> Eliminar</a>
                                        <!-- Include Delete button here if needed -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection