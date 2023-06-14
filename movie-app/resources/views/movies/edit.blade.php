@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
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
            <form method="POST" enctype="multipart/form-data" action="/movies/{{ $movie->id }}">
                @csrf
                @method('PUT')

                <div class="form-group my-1">
                    <label for="judul">Title:</label><br>
                    <input class="form-control" type="text" id="judul" name="judul" value="{{ $movie->judul }}">
                </div>
                <div class="form-group my-1">
                    <label for="poster">Poster:</label><br>
                    <img class="image" style="width: 100px" src="/assets/img/{{ $movie->poster }}" alt="image">
                    <input class="form-control" type="file" id="poster" name="poster">
                </div>
                <div class="form-group my-1">
                    <label for="genre_id">Genre:</label><br>
                    <select class="form-select" id="genre_id" name="genre_id">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id ? 'selected' : '' }}>
                                {{ $genre->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-1">
                    <label for="negara">Country:</label><br>
                    <input class="form-control" type="text" id="negara" name="negara" value="{{ $movie->negara }}">
                </div>
                <div class="form-group my-1">
                    <label for="tahun">Year:</label><br>
                    <input class="form-control" type="text" id="tahun" name="tahun" value="{{ $movie->tahun }}">
                </div>

                <div class="form-group my-1">
                    <label for="rating">Rating:</label><br>
                    <input class="form-control" type="text" id="rating" name="rating" value="{{ $movie->rating }}">
                </div>
                <input class="btn btn-primary my-2" type="submit" value="Update Movie">
            </form>
        </div>
    </div>
@endsection
