@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear usuario</div>


                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>


                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-12 button-container">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Guardar
                                    </button>
                                    <a href="{{ route('users.index') }}" class="btn btn-danger">
                                        <i class="fas fa-arrow-left"></i> Anterior
                                    </a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection