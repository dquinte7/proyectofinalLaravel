@extends('layouts.app')

@section('title', 'Ver detalles de un producto')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h1>Ver producto</h1>
                </div>
                <div class="card-body">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-danger mb-4"><i class="fas fa-arrow-left"></i> Back</a>
                    <h2>Product Details</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>ID:</strong> {{ $product->id }}</li>
                        <li class="list-group-item"><strong>Name:</strong> {{ $product->name }}</li>
                        <li class="list-group-item"><strong>Description:</strong> {{ $product->description }}</li>
                        <li class="list-group-item"><strong>Category:</strong> {{ $product->category->name }}</li>
                        <li class="list-group-item"><strong>Price:</strong> {{ $product->price }}</li>
                        <li class="list-group-item"><strong>Stock:</strong> {{ $product->stock }}</li>
                        <li class="list-group-item"><strong>Image:</strong> <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 200px;"></li>
                    </ul>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary mt-3"><i class="fas fa-list"></i> Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection