@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-12">
                    <h1 class="text-center alert alert-success">
                        <i class="fas fa-user"></i> Detalle del usuario
                    </h1>
                </div>
                <div class="row mb-4">
                    <div class="col-12 text-right">
                        <a href="{{ route('users.index') }}" class="btn btn-danger">
                            <i class="fas fa-arrow-left"></i> Regresar
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Fecha de creación:</strong> {{ $user->created_at }}</p>
                    <p><strong>Fecha de actualización:</strong> {{ $user->updated_at }}</p>

                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection