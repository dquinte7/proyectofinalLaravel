@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container mt-5">

    <!-- Botones de administración -->
    <div class="row mb-4">
        <div class="col-12 text-right">
            <a href="{{ route('users.index') }}" class="btn btn-primary mr-2">
                <i class="fas fa-users"></i> Administrar Usuarios
            </a>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary mr-2">
                <i class="fas fa-tags"></i> Administrar Categorías
            </a>
            <a href="{{ route('products.index') }}" class="btn btn-success">
                <i class="fas fa-box"></i> Administrar Productos
            </a>
        </div>
    </div>

   

    <!-- Categorías -->
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="text-center alert alert-secondary">Categorías</h2>
            <div class="d-flex flex-wrap justify-content-center">
                @foreach($categories as $category)
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-outline-secondary m-2" style="flex: 1 0 21%; max-width: 21%; min-width: 150px;">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Productos -->
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="text-center alert alert-success">Productos</h2>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">${{ number_format($product->price, 2) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection