@extends('layouts.app')
@section('title', 'Create a new Cinema')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Create a new Housing Project</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('categories.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection