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
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews/{{ $review->id }}">
                @csrf
                @method('PUT')

                <div class="form-group my-1">
                    <label for="movie_id">Film:</label><br>
                    <select class="form-select" id="movie_id" name="movie_id">
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}" {{ $movie->id == $movie->movie_id ? 'selected' : '' }}>
                                {{ $movie->judul }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-1">
                    <label for="user">User:</label><br>
                    <input class="form-control" type="text" id="user" name="user" value="{{ $review->user }}">
                </div>
                <div class="form-group my-1">
                    <label for="rating">Rating:</label><br>
                    <input class="form-control" type="text" id="rating" name="rating" value="{{ $review->rating }}">
                </div>
                <div class="form-group my-1">
                    <label for="review">Review:</label><br>
                    <input class="form-control" type="text" id="review" name="review" value="{{ $review->review }}">
                </div>

                <div class="form-group my-1">
                    <label for="tanggal">Date:</label><br>
                    <input class="form-control" type="date" id="tanggal" name="tanggal" value="{{ $review->tanggal }}">
                </div>
                <input class="btn btn-primary my-2" type="submit" value="Update Movie">
            </form>
        </div>
    </div>
@endsection
