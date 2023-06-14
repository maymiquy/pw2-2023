    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>


    <body class="bg-dark">
        <header class="bg-white">
            <nav class="navbar shadow-sm navbar-expand-lg bg-body-tertiary py-3" data-bs-theme="dark">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                        <a class="navbar-brand text-white col-lg-3 me-0" href="#">
                            <h4 class="text-shadow">Movie App</h4>
                        </a>
                        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                            <li class="nav-item">
                                <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/movies">Movies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/genres">Genres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/reviews">Reviews</a>
                            </li>
                        </ul>
                        <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                            <a href="/login" class="btn btn-success shadow-sm">Login</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="p-5 mb-4 rounded-3"
                style="background-color: rgb(0, 0, 0); background-image: url(assets/img/hero.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <div class="container">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="container-fluid py-5 text-white">
                        <h1 class="display-5 fw-bold text-shadow">Watch anywhere. Cancel anytime.</h1>
                        <p class="col-md-8 fs-4 text-shadow">Dapatkan pembaruan tentang rilis film terkini, trailer
                            eksklusif, dan
                            berita terbaru dari dunia perfilman. Tunggu apa lagi? Mulailah menjelajahi dunia hiburan
                            dengan
                            FilmFlix sekarang juga!</p>
                        <button class="btn btn-dark btn-lg shadow-lg" type="button">Daftar Sekarang!</button>
                    </div>
                </div>
            </div>
        </header>

        <main class="bg-dark">
            <div class="album py-5 bg-dark">
                <div class="container">
                    <div class="title justify-content-center align-items-center text-center mb-5">
                        <h1 class="flex fw-bold text-white text-shadow">Movies List</h1>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($movies as $movie)
                            <div class="col-md-4 my-3 justify-content-between">
                                <div class="card bg-black rounded-3 shadow-lg">
                                    <img class="card-img" src="/assets/img/{{ $movie->poster }}">
                                    <div class="card-body text-white">
                                        <h5 class="card-title text-truncate">{{ $movie->judul }}</h5>
                                        <p class="card-text">Genre: {{ $movie->genre->nama }}</p>
                                        <p class="card-text">Rating: {{ $movie->rating }} &#11088;</p>
                                        <p class="card-text">Tahun: {{ $movie->tahun }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">{{ $movie->negara }}</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">{{ $movie->genre->nama }}</button>
                                            </div>
                                            <small class="text-body-secondary">{{ $movie->rating }}/10</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>

        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link text-white px-2 text-body-secondary">Home</a>
                    </li>
                    <li class="nav-item"><a href="#"
                            class="nav-link text-white px-2 text-body-secondary">Features</a></li>
                    <li class="nav-item"><a href="#"
                            class="nav-link text-white px-2 text-body-secondary">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white px-2 text-body-secondary">FAQs</a>
                    </li>
                    <li class="nav-item"><a href="#"
                            class="nav-link text-white px-2 text-body-secondary">About</a></li>
                </ul>
                <p class="text-center text-white text-body-secondary">&copy; 2023 Company, Inc</p>
            </footer>
        </div>

        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    </body>

    </html>
