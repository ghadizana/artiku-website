@extends('layouts.app')
@section('main')
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="#" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="#" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="#" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Card -->
    @foreach ($data as $item)
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <img src="#" alt="Foto-1" max-width="576px" href="{{ $item->image }}">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->synopsis }}</p>
                    {{-- <p class="card-text">{{ $item->content }}</p> --}}
                    <a href="{{ url("/articles/$item->id") }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        {{-- <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <img src="" alt="Foto-1" max-width="576px" {{ $item->image }}>
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->synopsis }}</p>
                    <p class="card-text">{{ $item->content }}</p>
                    <a href="{{ url("/articles/$item->id") }}" class="btn btn-primary">Read More</a>

                </div>
            </div>
        </div> --}}
    </div>
    
    @endforeach
@endsection