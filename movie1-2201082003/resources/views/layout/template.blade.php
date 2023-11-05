<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdamKaca22</title>
    <style>
        .rating-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            color: gold;
            font-size: 1.5em;
        }

        .rating-number {
            position: absolute;
            top: 10px;
            left: 30px;
            color: white;
            font-size: 1.2em;
            font-weight: bold;
        }

    </style>
    <link href="/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/">tiMovie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Watchlist</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/slider1.jpg" class="d-block w-100" alt="Slider 1">
                </div>
                <div class="carousel-item">
                    <img src="/images/slider2.jpg" class="d-block w-100" alt="Slider 2">
                </div>
                <div class="carousel-item">
                    <img src="/images/slider3.jpg" class="d-block w-100" alt="Slider 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container my-2">
        @yield('content')
    </div>

    <footer class="bg-success text-center text-white py-2">
        Copyright &copy; 2023 by Abdullah Adam
    </footer>
    <script src="Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
