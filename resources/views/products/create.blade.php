@extends('layouts.app')

@section('title', 'Creer un nuevo producto')

@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center alert alert-success">
                <i class="fas fa-film"></i> Crear un nuevo producto     
            </h1>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12 text-right">
            <a href="{{ route('products.index') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="card shadow-sm p-4">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <select name="category_id" class="form-control" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="number" name="price" class="form-control" step="0.01" min="0" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock:</label>
                        <input type="number" name="stock" class="form-control" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" name="image" class="form-control-file" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fas fa-check"></i> Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection