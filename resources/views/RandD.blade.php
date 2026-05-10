@extends('layouts.app')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Research & Development</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">R & D</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- R&D Intro Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Research & Development</p>
                    <h4 class="mb-4">Research is the best insurance policy of an Industry, to solve problems and to create Future Solution.</h4>
                    <p class="mb-3">We actively working on the research and development of biotechnological process and products. We have previously carried out various research work on microbial products of agriculture.</p>
                    <p class="mb-3">We are currently performing various Research & Development work with the collaboration of universities like Pandit Dindayal Petroleum University (PDPU), Gandhinagar and Parul University Vadodara, Gujarat.</p>
                    <p class="mb-3">We are also associated with Gujarat state Biotechnology mission for the research and product development in Biotechnology. In the Recent Past, We have carried out various research work with Navasari Agriculture University.</p>
                    <p class="mb-4">Few of our research work published in national and International journals.</p>
                    <a class="btn btn-primary py-3 px-4" href="/contact">Get In Touch</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="bg-light rounded p-4 text-center">
                                <i class="fa fa-flask fa-3x text-primary mb-3"></i>
                                <h6>PDPU, Gandhinagar</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light rounded p-4 text-center">
                                <i class="fa fa-university fa-3x text-primary mb-3"></i>
                                <h6>Parul University</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light rounded p-4 text-center">
                                <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                                <h6>Gujarat Biotechnology Mission</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light rounded p-4 text-center">
                                <i class="fa fa-leaf fa-3x text-primary mb-3"></i>
                                <h6>Navasari Agriculture University</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- R&D Intro End -->

    <!-- Research Papers Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center wow fadeInUp section-title" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Published Research</p>
                <h1 class="display-5 mb-3">Our Research Work</h1>
            </div>
            <div class="row g-4">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white rounded overflow-hidden h-100">
                        <img src="{{ asset('image/RD_1.jpg') }}" alt="Beauveria Bassiana Research" class="img-fluid w-100 img-fixed">
                        <div class="p-4">
                            <h5 class="mb-2">Growth Pattern of Beauveria Bassiana on different Eco Friendly Media</h5>
                            <p class="text-muted mb-3">Research Conducted on How different media affects the growth of Beauveria Bassiana for Mass Multiplication.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read Research Article</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-white rounded overflow-hidden h-100">
                        <img src="{{ asset('image/RD_2.jpg') }}" alt="Paecilomyces lilacinus Research" class="img-fluid w-100 img-fixed">
                        <div class="p-4">
                            <h5 class="mb-2">Growth Pattern of Paecilomyces lilacinus on different Eco Friendly Media</h5>
                            <p class="text-muted mb-3">Research Conducted on How different media affects the growth of Paecilomyces lilacinus for Mass Multiplication.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read Research Article</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded overflow-hidden h-100">
                        <img src="{{ asset('image/RD_3.jpg') }}" alt="Azotobacter Research" class="img-fluid w-100 img-fixed">
                        <div class="p-4">
                            <h5 class="mb-2">Effect of Cell Protectants on Mass Multiplication of Azotobacter</h5>
                            <p class="text-muted mb-3">The articles indicate that how the liquid formulation of Azotobacter could be used more effectively to maintain the cells viability for long time.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read Research Article</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="bg-white rounded overflow-hidden h-100">
                        <img src="{{ asset('image/RD_4.jpg') }}" alt="Ground Nut Cultivation Research" class="img-fluid w-100 img-fixed">
                        <div class="p-4">
                            <h5 class="mb-2">Ground Nut Cultivation: A Novel Approach Using Organic Inputs</h5>
                            <p class="text-muted mb-3">Organic production of groundnut by natural inputs such as bio fertilizer, bio pesticide, support sustainability and environmental well-being by reducing synthetic pesticides.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read Research Article</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white rounded overflow-hidden h-100">
                        <img src="{{ asset('image/RD_5.jpg') }}" alt="Biofertilizer Research" class="img-fluid w-100 img-fixed">
                        <div class="p-4">
                            <h5 class="mb-2">Fresh Biofertilizer: A Novel Concept in Improving Soil Fertility</h5>
                            <p class="text-muted mb-3">This review discusses the importance of good quality fertilizers and the factors. The study shows how fresh biofertilizer will be beneficial to farmers and soil fertility.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read Research Article</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="bg-white rounded overflow-hidden h-100">
                        <img src="{{ asset('image/RD_6.jpg') }}" alt="Beauveria bassiana Mass Multiplication" class="img-fluid w-100 img-fixed">
                        <div class="p-4">
                            <h5 class="mb-2">Evaluation of Various Parameters in Mass Multiplication of Beauveria bassiana</h5>
                            <p class="text-muted mb-3">Study deals with use of different media like SDA, rice bran, wheat bran, sorghum to find their ability as substrates for mass multiplication of Beauveria bassiana.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read Research Article</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-white rounded overflow-hidden h-100">
                        <img src="{{ asset('image/RD_7.jpg') }}" alt="Fungal Pathogens Research" class="img-fluid w-100 img-fixed">
                        <div class="p-4">
                            <h5 class="mb-2">Novel Ecofriendly Approaches for Controlling Soil Borne Fungal Pathogens</h5>
                            <p class="text-muted mb-3">The study helps reduce the use of chemical fungicide to overcome soil fungal disease, highlighting management of Black scurf disease in Potato using Bacillus subtilis.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read Research Article</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="bg-white rounded overflow-hidden h-100">
                        <img src="{{ asset('image/RD_8.jpg') }}" alt="Rhizobium Biofertilizer" class="img-fluid w-100 img-fixed">
                        <div class="p-4">
                            <h5 class="mb-2">Production of Carrier Based Rhizobium Spp. Biofertilizer by Fermentation</h5>
                            <p class="text-muted mb-3">Rhizobium bio fertilizer would decline the need of chemical fertilizers and reduce the adverse effects on environment.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read Research Article</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="bg-white rounded overflow-hidden h-100">
                        <img src="{{ asset('image/RD_9.jpg') }}" alt="Cellulase Enzyme Research" class="img-fluid w-100 img-fixed">
                        <div class="p-4">
                            <h5 class="mb-2">Screening of Cellulase Enzyme Activity by Submerged Fermentation Process</h5>
                            <p class="text-muted mb-3">The biological aspects of producing cellulases enzyme has become essential to future research by involving cellulases and cellulolytic activity of various microorganisms.</p>
                            <a href="#" class="btn btn-primary btn-sm">Read Research Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Research Papers End -->

    @endsection