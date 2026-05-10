@extends('layouts.app')

@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Our Achievements</h1>
            <p class="fs-5 text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Recognition, awards, and successful partnerships that drive our mission</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Awards & Achievements Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp section-title" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Our Recognitions</p>
                <h1 class="display-5 mb-5">Awards & International Support</h1>
            </div>

            @if($galleries->count() > 0)
                <div class="row g-4">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-light p-4 rounded text-center h-100">
                                <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="img-fluid rounded mb-3" style="max-height: 250px; object-fit: cover; width: 100%;">
                                <h4 class="mb-2">{{ $gallery->title }}</h4>
                                <span class="badge bg-success">{{ $gallery->category }}</span>
                                <p class="text-muted mt-3 small">{{ $gallery->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-muted">No gallery images available yet.</p>
                    </div>
                </div>
                <!-- Default Achievements -->
                <div class="row g-5 mt-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light p-5 rounded text-center">
                            <i class="fa fa-trophy fa-4x text-primary mb-4"></i>
                            <h4 class="mb-3">MEA-NITI Aayog National Award</h4>
                            <p class="mb-3">National Contest on Social Innovation</p>
                            <p class="text-muted mb-2"><strong>Ministry of External Affairs</strong></p>
                            <p class="text-muted">Winner January 2017 | Recognizing Innovation in Social Sector</p>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-light p-5 rounded text-center">
                            <i class="fa fa-building fa-4x text-primary mb-4"></i>
                            <h4 class="mb-3">Royal Academy of Engineering</h4>
                            <p class="mb-3">International Support & Endorsement</p>
                            <p class="text-muted mb-2"><strong>London, United Kingdom</strong></p>
                            <p class="text-muted">Global Recognition for Agricultural Innovation</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Awards & Achievements End -->

    <!-- Partners & Support Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center wow fadeInUp section-title" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Strategic Partners</p>
                <h1 class="display-5 mb-5">Organizations Supporting Our Mission</h1>
            </div>

            <div class="row g-4 align-items-center">
                <div class="col-lg-4 col-md-6 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white p-4 rounded h-100">
                        <i class="fa fa-university fa-3x text-primary mb-3"></i>
                        <h5 class="mb-2">CIIE IIM Ahmedabad</h5>
                        <p class="text-muted">Center for Innovation & Incubation Excellence</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white p-4 rounded h-100">
                        <i class="fa fa-graduation-cap fa-3x text-primary mb-3"></i>
                        <h5 class="mb-2">Parul University</h5>
                        <p class="text-muted">Advanced Research & Development Partner</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white p-4 rounded h-100">
                        <i class="fa fa-leaf fa-3x text-primary mb-3"></i>
                        <h5 class="mb-2">Navasari Agriculture University</h5>
                        <p class="text-muted">Agricultural Research Collaborations</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white p-4 rounded h-100">
                        <i class="fa fa-flask-vial fa-3x text-primary mb-3"></i>
                        <h5 class="mb-2">Gujarat Biotechnology Mission</h5>
                        <p class="text-muted">Biotechnology Innovation Support</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white p-4 rounded h-100">
                        <i class="fa fa-check-circle fa-3x text-primary mb-3"></i>
                        <h5 class="mb-2">Central Vigilance Commission</h5>
                        <p class="text-muted">Governance & Compliance Partner</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white p-4 rounded h-100">
                        <i class="fa fa-handshake fa-3x text-primary mb-3"></i>
                        <h5 class="mb-2">Startup Ecosystem</h5>
                        <p class="text-muted">Continuous Support & Networking</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners & Support End -->

    <!-- Testimonials / Happy Clients Start -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp section-title" data-wow-delay="0.1s">
            <p class="fs-5 fw-bold text-primary">Client Success</p>
            <h1 class="display-5 mb-5">Our Happy Farmers & Clients</h1>
        </div>

        <div class="row g-4">

            <!-- Farmer 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('image/Farmer1.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h5 class="text-white mb-3">Happy Farmer</h5>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Farmer1.jpg') }}" data-lightbox="farmer" aria-label="View Image">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Farmer 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('image/Farmer2.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h5 class="text-white mb-3">Happy Farmer</h5>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Farmer2.jpg') }}" data-lightbox="farmer" aria-label="View Image">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Farmer 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('image/Farmer3.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h5 class="text-white mb-3">Happy Farmer</h5>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Farmer3.jpg') }}" data-lightbox="farmer" aria-label="View Image">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Farmer 4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('image/Farmer4.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h5 class="text-white mb-3">Happy Farmer</h5>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Farmer4.jpg') }}" data-lightbox="farmer" aria-label="View Image">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Farmer 5 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('image/Farmer5.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h5 class="text-white mb-3">Happy Farmer</h5>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Farmer5.jpg') }}" data-lightbox="farmer" aria-label="View Image">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <!-- Testimonials / Happy Clients End -->

    <!-- Cta Start -->
    <div class="container-xxl py-5 bg-primary">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-5 text-white mb-4 wow fadeInDown" data-wow-delay="0.1s">Join Our Growing Network of Successful Farmers</h1>
                    <p class="fs-5 text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Experience the Vise Organic difference with certified products, expert support, and proven results. Start your sustainable farming journey today!</p>
                    <a href="/callback" class="btn btn-light py-3 px-4 me-3 wow zoomIn" data-wow-delay="0.5s">Request Callback</a>
                    <a href="/contact" class="btn btn-light py-3 px-4 wow zoomIn" data-wow-delay="0.7s">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta End -->

    @endsection