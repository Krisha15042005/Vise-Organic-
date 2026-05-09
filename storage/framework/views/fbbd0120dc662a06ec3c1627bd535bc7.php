

<?php $__env->startSection('content'); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Our Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Products Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Vise Organic Products</p>
                <h2 class="display-6 mb-3">Quality Organic Solutions for Farming</h2>
            </div>

            <?php
                $categories = $products->groupBy('category');
            ?>

            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="display-6 mb-4"><?php echo e($category ?? 'General Products'); ?></h3>
                    <div class="row g-4">
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="bg-light rounded p-3 text-center h-100">
                                    <div class="mb-3">
                                        <i class="fas fa-leaf" style="font-size: 48px; color: #6ba86b;"></i>
                                    </div>
                                    <h5 class="mb-2"><?php echo e($product->name); ?></h5>
                                    <p class="text-muted small mb-3"><?php echo e(Str::limit($product->description, 60)); ?></p>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <span class="badge bg-success">₹<?php echo e(number_format($product->price, 2)); ?></span>
                                        <span class="badge bg-info">Qty: <?php echo e($product->quantity); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12 text-center">
                    <p class="text-muted">No products available yet.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Products End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\DELL\viseorganic\resources\views/product-simple.blade.php ENDPATH**/ ?>