@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container" style="padding-top: 100px;">
    <!-- Slideshow (Carousel) -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            @foreach ($posts as $index => $post)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    @if ($post->image)
                        <img src="{{ asset('images/posts/' . $post->image) }}" class="d-block w-100 carousel-img" alt="{{ $post->title }}">
                    @else
                        <img src="https://via.placeholder.com/1920x1080?text={{ $post->title }}" class="d-block w-100 carousel-img" alt="Placeholder Image">
                    @endif
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $post->title }}</h5>
                        <p>{{ Str::limit($post->body, 100) }}</p>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Posts List Below the Carousel -->
    <div class="row mt-4">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h2 class="display-4 text-center text-primary mb-4">Selamat Datang di Halaman Beranda Aplikasi</h2>
        </div>
    </div>

    <div class="row mt-4">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light rounded">
                @if ($post->image)
                    <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top card-img" alt="{{ $post->title }}">
                @else
                    <img src="https://via.placeholder.com/350x200" class="card-img-top card-img" alt="Placeholder Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title text-dark">{{ $post->title }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($post->body, 100) }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-block">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
/* Ensure images in carousel and cards maintain aspect ratio 16:9 */
.carousel-img, .card-img {
    width: 100%;
    height: auto;
    aspect-ratio: 16 / 9; /* Maintain 16:9 aspect ratio */
    object-fit: cover; /* Ensure the image fills the space without distortion */
}

/* Alert Box Styling */
.alert {
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
}

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}

/* Card Styling */
.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

.card-img-top {
    border-radius: 10px 10px 0 0;
    object-fit: cover;
    height: 200px;
}

/* Card Body */
.card-body {
    padding: 20px;
    background-color: #ffffff;
    border-radius: 0 0 10px 10px;
}

.card-title {
    font-size: 1.25rem;
    color: #333;
    font-weight: 500;
}

.card-text {
    font-size: 1rem;
    color: #666;
}

.btn {
    padding: 12px 20px;
    font-size: 16px;
    font-weight: 500;
    text-align: center;
    display: block;
    margin-top: 10px;
    border-radius: 5px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Responsiveness for smaller screens */
@media (max-width: 768px) {
    .container {
        padding-left: 10px;
        padding-right: 10px;
    }

    .card-img-top {
        height: 150px;
    }
}
</style>

@endsection
