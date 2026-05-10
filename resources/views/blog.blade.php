@extends('layouts.app')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Our Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Posts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp section-title" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Latest Articles</p>
                <h1 class="display-5 mb-3">Organic Farming Insights</h1>
            </div>
            <div class="row g-4">
                @forelse($blogs as $blog)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded overflow-hidden h-100 d-flex flex-column">
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid img-blog" alt="{{ $blog->title }}">
                            @else
                                <div class="bg-primary text-white p-5 text-center">No Image</div>
                            @endif
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex align-items-center mb-2">
                                    <small class="text-muted">{{ $blog->created_at->format('M d - Y') }}</small>
                                </div>
                                <h5 class="mb-3">{{ $blog->title }}</h5>
                                <p class="text-muted mb-4 flex-grow-1">{{ Str::limit($blog->content, 100) }}</p>
                                <small class="text-muted">By: {{ $blog->author }}</small>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">No blog posts available yet.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Blog Posts End -->

    @endsection