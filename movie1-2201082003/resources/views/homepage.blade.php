@extends('layout.template')

@section('title', 'Homepage')

@section('content')
    <h1 class="text-light text-center">Movies Terbaru</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-lg-3 mb-4">
                <div class="card h-100 mb-4">
                    <div class="position-relative">
                        <div class="rating-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="rating-number">
                            {{ $movie['rating'] }}
                        </div>
                        <img src="/images/{{ $movie['foto_sampul'] }}" class="card-img-top" alt="{{ $movie['judul'] }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['judul'] }}</h5>
                    </div>
                    <div class="card-footer">
                        <a href="/movie/{{ $movie['id'] }}" class="btn btn-success btn-sm">Lihat Selengkapnya</a>
                        <a href="#" class="btn btn-danger btn-sm">Watch Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
