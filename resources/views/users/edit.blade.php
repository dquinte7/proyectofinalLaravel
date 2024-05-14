@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-12">
                    <h1 class="text-center alert alert-success">
                        <i class="fas fa-user"></i> Editar usuario
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
                    <form action="{{ route('users.update', $user) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small class="form-text text-muted">Deja este campo en blanco si no quieres cambiar la
                                contraseña.</small>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Guardar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection