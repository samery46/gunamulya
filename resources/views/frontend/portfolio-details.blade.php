@extends('frontend.layouts.layout')

@section('content')
    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-8">
                    <h2 class="title">Portfolio Details</h2>
                </div>
                <div class="col-sm-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio-Area-Start -->
    <section class="portfolio-details section-padding" id="portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="head-title">{{ $portfolio->title }}</h2>

                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset($portfolio->image) }}" class="d-block w-100"
                                    alt="{{ $portfolio->title }}">
                            </div>
                            @foreach ($portfolio->portofolioGallery as $image)
                                <div class="carousel-item active">
                                    <img src="{{ asset($image->image) }}" class="d-block w-100"
                                        alt="{{ $portfolio->title }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="portflio-info">
                        <div class="single-info">
                            <h4 class="title">Year</h4>
                            <p>{{ $portfolio->client }}</p>
                        </div>
                        <div class="single-info">
                            <h4 class="title">Created at</h4>
                            <p>{{ date('d M, Y', strtotime($portfolio->created_at)) }}</p>
                        </div>
                        {{-- <div class="single-info">
                            <h4 class="title">Website</h4>
                            <p><a href="{{ $portfolio->website }}">{{ $portfolio->website }}</a></p>
                        </div> --}}
                        <div class="single-info">
                            <h4 class="title">Category</h4>
                            <p>{{ $portfolio->category->name }}</p>
                        </div>
                    </div>
                    <div class="description">
                        {!! $portfolio->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-Area-End -->
@endsection
