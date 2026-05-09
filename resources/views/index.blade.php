@extends('layouts.app')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('image/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">Pure Organic Solutions for Better Farming</h1>
                                    <a href="/product" class="btn btn-primary py-sm-3 px-sm-4">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('image/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">Grow Naturally with Vise Organic</h1>
                                    <a href="/product" class="btn btn-primary py-sm-3 px-sm-4">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
<div class="container-fluid top-feature py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">

            <!-- 1 -->
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-leaf text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>Eco-Friendly Products</h4>
                            <span>100% organic and chemical-free solutions that are safe for the environment.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-seedling text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>Improves Soil Health</h4>
                            <span>Enhances soil fertility and supports long-term sustainable farming.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-tractor text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>Higher Crop Yield</h4>
                            <span>Improves crop production and quality through better nutrition.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Top Feature End -->


    <!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">

            <!-- Image -->
            <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded w-100" src="{{ asset('image/about.jpg') }}" alt="About Vise Organic" style="height: 100%; object-fit: cover;">
            </div>

            <!-- Main Content -->
            <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-1 text-primary mb-0">9</h1>
                <p class="text-primary mb-4">Years of Experience</p>

                <h1 class="display-5 mb-4">Trusted Organic Solutions for Better Farming</h1>

                <p class="mb-4">
                    Vise Organic provides high-quality organic fertilizers and eco-friendly agricultural solutions 
                    that help improve soil health, increase crop productivity, and promote sustainable farming practices.
                </p>

                <a class="btn btn-primary py-3 px-4" href="/product">Explore Products</a>
            </div>

            <!-- Right Side Points -->
            <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-5">

                    <!-- 1 -->
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-leaf fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">100% Organic Products</h4>
                            <span>Natural ane chemical-free solutions je safe ane effective che.</span>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-seedling fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Sustainable Farming</h4>
                            <span>Soil health improve kari ne long-term farming mate best solution aape che.</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('image/carousel-1.jpg') }}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">5000</h1>
                    <span class="fs-5 fw-semi-bold text-light">Farmer Support</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">100</h1>
                    <span class="fs-5 fw-semi-bold text-light">Organic Products</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">50</h1>
                    <span class="fs-5 fw-semi-bold text-light">Products</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">9</h1>
                    <span class="fs-5 fw-semi-bold text-light">Years Experience</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Why Choose Vise Organic!</p>
                <h1 class="display-5 mb-4">Trusted Organic Solutions for Better Farming</h1>
                <p class="mb-4">
                    Vise Organic provides high-quality organic fertilizers and eco-friendly agricultural solutions 
                    that help improve soil health, increase crop productivity, and promote sustainable farming practices.
                </p>
                <a class="btn btn-primary py-3 px-4" href="/product">Explore Products</a>
            </div>

            <!-- Right Cards -->
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">

                    <div class="col-md-6">
                        <div class="row g-4">

                            <!-- 1 -->
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                        <i class="fa fa-leaf fa-3x text-primary"></i>
                                    </div>
                                    <h4 class="mb-0">Eco-Friendly Products</h4>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                        <i class="fa fa-seedling fa-3x text-primary"></i>
                                    </div>
                                    <h4 class="mb-0">Improves Soil Health</h4>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-recycle fa-3x text-primary"></i>
                            </div>
                            <h4 class="mb-0">Sustainable Farming</h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Features End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Our Practices</p>
            <h1 class="display-5 mb-5">Sustainable Organic Farming Methods</h1>
        </div>
        <div class="row g-4">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('image/CropRotation.jpg') }}" alt="Crop Rotation">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('image/icon/plant.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Crop Rotation</h4>
                        <p class="mb-4">Maintaining soil fertility and reducing pests naturally by rotating crops seasonally.</p>
                        <a class="btn btn-sm" href="#"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('image/Compost-Production.jpg') }}" alt="Compost Production">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('image/icon/fertilizer.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Compost Production</h4>
                        <p class="mb-4">Using organic waste to create nutrient-rich compost for healthy soil growth.</p>
                        <a class="btn btn-sm" href="#"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('image/Cover-Cropping.jpg') }}" alt="Cover Cropping">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('image/icon/wheat.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Cover Cropping</h4>
                        <p class="mb-4">Improving soil health and preventing erosion by planting cover crops.</p>
                        <a class="btn btn-sm" href="#"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('image/Pest-Management.jpg') }}" alt="Pest Management">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('image/icon/sanitizer.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Pest Management</h4>
                        <p class="mb-4">Natural pest control techniques without harmful chemicals.</p>
                        <a class="btn btn-sm" href="#"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('image/Seed.jpg') }}" alt="Seed Saving">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('image/icon/growing-seed.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Seed Saving</h4>
                        <p class="mb-4">Preserving natural seeds to maintain crop diversity and sustainability.</p>
                        <a class="btn btn-sm" href="#"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

            <!-- 6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('image/Mechanization.jpg') }}" alt="Mechanization">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('image/icon/tractor.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Modern Farming</h4>
                        <p class="mb-4">Using efficient tools and techniques to improve productivity.</p>
                        <a class="btn btn-sm" href="#"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->


    <!-- Quote Start -->
<div class="container-fluid quote my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('image/carousel-2.jpg') }}">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">

                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 text-center mb-5">Get A Free Quote</h1>

                    <!-- FORM START -->
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="row g-3">

                            <!-- Name -->
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text"
                                           class="form-control bg-light border-0"
                                           id="name"
                                           name="name"
                                           placeholder="Your Name"
                                           required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email"
                                           class="form-control bg-light border-0"
                                           id="email"
                                           name="email"
                                           placeholder="Your Email"
                                           required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>

                            <!-- Mobile -->
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text"
                                           class="form-control bg-light border-0"
                                           id="mobile"
                                           name="mobile"
                                           placeholder="Your Mobile"
                                           required>
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>

                            <!-- Service -->
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text"
                                           class="form-control bg-light border-0"
                                           id="service"
                                           name="service"
                                           placeholder="Service Type"
                                           required>
                                    <label for="service">Service Type</label>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0"
                                              placeholder="Leave a message here"
                                              id="message"
                                              name="message"
                                              style="height: 100px"
                                              required></textarea>

                                    <label for="message">Message</label>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-12 text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit">
                                    Submit Now
                                </button>
                            </div>

                        </div>
                    </form>
                    <!-- FORM END -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

    <!-- Products Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Products</p>
                <h1 class="display-5 mb-5">Some Of Our Wonderful Products</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">NEW ARRIVAL</li>
                        <li class="mx-2" data-filter=".first">TRENDING</li>
                        <li class="mx-2" data-filter=".second">BEST SELLING</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('image/PSB-Multiplier.jpg') }}" alt="PSB-Multiplier">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">PSB-Multiplier</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/PSB-Multiplier.jpg') }}" data-lightbox="portfolio" aria-label="View Image"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href="" aria-label="Visit Website"><i class="fa fa-link"></i></a>
                            </div>
                            <!-- Button -->
                            <a href="/Product#psb" class="btn btn-primary mt-2">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('image/Products/Uphar.jpg') }}" alt="Uphar">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Uphar</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Products/Uphar.jpg') }}" data-lightbox="portfolio" aria-label="View Image"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href="" aria-label="Visit Website"><i class="fa fa-link"></i></a>
                            </div>
                            <!-- Button -->
                            <a href="/Product#psb" class="btn btn-primary mt-2">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('image/Products/Poshan.jpg') }}" alt="Poshan">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Poshan</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Products/Poshan.jpg') }}" data-lightbox="portfolio" aria-label="View Image"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href="" aria-label="Visit Website"><i class="fa fa-link"></i></a>
                            </div>
                            <!-- Button -->
                            <a href="/Product#psb" class="btn btn-primary mt-2">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('image/Products/Mycorrhiza 3000 IP.jpg') }}" alt="Mycorrhiza 3000 IP">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Mycorrhiza 3000 IP</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Products/Mycorrhiza 3000 IP.jpg') }}" data-lightbox="portfolio" aria-label="View Image"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href="" aria-label="Visit Website"><i class="fa fa-link"></i></a>
                            </div>
                            <!-- Button -->
                            <a href="/Product#psb" class="btn btn-primary mt-2">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('image/Products/Azotobacter Liquid Based.jpg') }}" alt="Azotobacter Liquid Based">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Azotobacter Liquid Based</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Products/Azotobacter Liquid Based.jpg') }}" data-lightbox="portfolio" aria-label="View Image"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href="" aria-label="Visit Website"><i class="fa fa-link"></i></a>
                            </div>
                            <!-- Button -->
                            <a href="/Product#psb" class="btn btn-primary mt-2  ">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('image/Products/Silk.jpg') }}" alt="Silk">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Silk</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('image/Products/Silk.jpg') }}" data-lightbox="portfolio" aria-label="View Image"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href="" aria-label="Visit Website"><i class="fa fa-link"></i></a>
                            </div>
                            <!-- Button -->
                            <a href="/Product#psb" class="btn btn-primary mt-2">View Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Featured Products Start (Using Team Design) -->
<div class="container-xxl py-5">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Featured Products</p>
            <h1 class="display-5 mb-5">Our Top Organic Products</h1>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="{{ asset('image/PSB-Multiplier.jpg') }}" alt="PSB-Multiplier">
                    <div class="team-text">
                        <h4 class="mb-0">PSB-Multiplier</h4>
                        <p class="text-primary">Improves soil phosphorus</p>

                        <div class="team-social d-flex justify-content-center">
                            <a class="btn btn-square rounded-circle mx-1" href="/Product#psb" aria-label="View Details">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-square rounded-circle mx-1" href="/Product#psb" aria-label="Visit Website">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="{{ asset('image/Products/Uphar.jpg') }}" alt="Uphar">
                    <div class="team-text">
                        <h4 class="mb-0">Uphar</h4>
                        <p class="text-primary">Boosts plant growth</p>

                        <div class="team-social d-flex justify-content-center">
                            <a class="btn btn-square rounded-circle mx-1" href="/Product#uphar" aria-label="View Details">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-square rounded-circle mx-1" href="/Product#uphar" aria-label="Visit Website">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="{{ asset('image/Products/Poshan.jpg') }}" alt="Poshan">
                    <div class="team-text">
                        <h4 class="mb-0">Poshan</h4>
                        <p class="text-primary">Essential crop nutrients</p>

                        <div class="team-social d-flex justify-content-center">
                            <a class="btn btn-square rounded-circle mx-1" href="/Product#poshan" aria-label="View Details">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-square rounded-circle mx-1" href="/Product#poshan" aria-label="Visit Website">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Featured Products End -->


    <!-- Booklet Start -->
    <div class="container-xxl py-5">
        <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Download</p>
                <h1 class="display-5 mb-4">Download Our Product Booklet</h1>
                <p class="mb-4">
                    Get detailed information about our organic products, usage methods, and benefits.
                    Download our booklet to explore complete solutions for sustainable farming.
                </p>

                <!-- Button -->
                <a href="{{ asset('pdf/Vise-Organic-Booklet.pdf') }}" class="btn btn-primary py-3 px-4" download>
                    Download Now <i class="fa fa-download ms-2"></i>
                </a>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 wow fadeInUp text-center" data-wow-delay="0.3s">
                <img class="img-fluid rounded" src="{{ asset('image/booklet.png') }}" alt="Booklet" style="max-height: 300px;">
            </div>

        </div>
        </div>
    </div>
    <!-- Booklet End -->

    @endsection