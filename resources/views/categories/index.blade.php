@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white text-center">
                    <h1>Categorías</h1>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2 mb-4">
                        <a href="{{ route('categories.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Crear una nueva categoría</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i> Detalle
                                        </a>

                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>

                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?')">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection