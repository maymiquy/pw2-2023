@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                @csrf
                <div class="form-group my-1">
                    <label for="film">Film:</label>
                    <input type="text" id="film" class="form-control" name="film">
                </div>
                <div class="form-group my-1">
                    <label for="user">User:</label>
                    <input type="text" id="user" class="form-control" name="user">
                </div>
                <div class="form-group my-1">
                    <label for="rating">Rating:</label>
                    <input type="text" id="rating" class="form-control" name="rating">
                </div>
                <div class="form-group my-1">
                    <label for="review">Review:</label>
                    <input type="text" id="review" class="form-control" name="review">
                </div>
                <div class="form-group my-1">
                    <label for="tanggal">Date:</label>
                    <input type="date" id="tanggal" class="form-control" name="tanggal">
                </div>
                <button class="btn btn-primary" type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection
