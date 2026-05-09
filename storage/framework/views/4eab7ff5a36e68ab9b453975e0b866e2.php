<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vise Organic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo e(asset('image/logo.jpg')); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+918401431440</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>viseinnovation@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href="" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0"><img src="<?php echo e(asset('image/logo1.png')); ?>" alt="Logo" height="80" width="200"></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="/product" class="nav-link dropdown-toggle">PRODUCT</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="/product#plant-growth" class="dropdown-item">Plant Growth Promoter</a>
                        <a href="/product#bacteria" class="dropdown-item">Bacteria Multiplier</a>
                        <a href="/product#mylab" class="dropdown-item">MyLab Technology</a>
                        <a href="/product#nutri" class="dropdown-item">Nutri Range</a>
                        <a href="/product#organic-fertilizer" class="dropdown-item">Organic Fertilizer</a>
                        <a href="/product#fungicide" class="dropdown-item">Organic Fungicide &amp; Pesticides</a>
                        <a href="/product#biogas" class="dropdown-item">Products From Biogas Slurry</a>
                        <a href="/product#spread" class="dropdown-item">Spread Adjuvant</a>
                    </div>
                </div>
                <a href="/RandD" class="nav-item nav-link">R & D</a>
                <a href="/Gallery" class="nav-item nav-link">Gallery</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="/callback" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Call Back<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>      
    <!-- Navbar End -->

    <!-- Page Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="/"><img src="<?php echo e(asset('image/logo1.png')); ?>" alt="Logo" height="60" class="mb-3"></a>
                    <p class="footer-desc">Offering premium natural and organic products. Experience wholesome goodness for a healthier lifestyle with our trusted selections.</p>
                    <div class="d-flex gap-2 mt-3">
                        <a class="footer-social-btn" href="" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a class="footer-social-btn" href="" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="footer-social-btn" href="" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="footer-social-btn" href="" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">QUICK LINKS</h5>
                    <div class="footer-divider"></div>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/product">Products</a></li>
                        <li><a href="/RandD">R & D</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-heading">RECENT POST</h5>
                    <div class="footer-divider"></div>
                    <?php
                        $recentBlogs = \App\Models\BlogPost::latest()->take(3)->get();
                    ?>
                    <?php $__currentLoopData = $recentBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="footer-post d-flex align-items-start mb-1">
                        <?php if($blog->image): ?>
                            <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="<?php echo e($blog->title); ?>" class="footer-post-img me-3">
                        <?php else: ?>
                            <img src="<?php echo e(asset('image/placeholder.jpg')); ?>" alt="<?php echo e($blog->title); ?>" class="footer-post-img me-3">
                        <?php endif; ?>
                        <div><a href="/blog" class="footer-post-title"><?php echo e(Str::limit($blog->title, 50)); ?></a><p class="footer-post-date"><?php echo e($blog->created_at->format('M d - Y')); ?></p></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-heading">CONTACT US</h5>
                    <div class="footer-divider"></div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fa fa-phone-alt footer-contact-icon me-3 mt-1"></i>
                        <div><strong>Call Us 24/7</strong><p class="mb-0">+918401431440</p></div>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fa fa-envelope footer-contact-icon me-3 mt-1"></i>
                        <div><strong>Email :</strong><p class="mb-0">viseinnovation@gmail.com</p></div>
                    </div>
                    <div class="d-flex align-items-start">
                        <i class="fa fa-map-marker-alt footer-contact-icon me-3 mt-1"></i>
                        <div><strong>Address :</strong><p class="mb-0">A10, PRIME INDUSTRY ESTATE, Manjusar, Gujarat 391775</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid footer-copyright py-3">
        <div class="container text-center">
            <p class="mb-0">Copyright &copy; 2023 Vise Organic | All right reserved</p>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- WhatsApp Button -->
    <a href="https://wa.me/918401431440" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-lg-square rounded-circle whatsapp-btn" aria-label="Chat on WhatsApp"><i class="fab fa-whatsapp"></i></a>  

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" aria-label="Back to top"><i class="bi bi-arrow-up"></i></a>
  
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/parallax/parallax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/isotope/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/lightbox/js/lightbox.min.js')); ?>"></script>

<!-- Template Javascript -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\DELL\viseorganic\resources\views/layouts/app.blade.php ENDPATH**/ ?>