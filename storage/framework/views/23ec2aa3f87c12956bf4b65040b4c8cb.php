<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>Vise Organic Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6ba86b;
            --secondary-color: #2c3e50;
        }
        .navbar { background: var(--secondary-color); }
        .btn-primary { background: var(--primary-color); border-color: var(--primary-color); }
        .btn-primary:hover { background: #5a9a5a; }
        .badge-primary { background: var(--primary-color); }
        .stat-box { background: linear-gradient(135deg, var(--primary-color) 0%, #5a9a5a 100%); color: white; padding: 25px; border-radius: 10px; margin-bottom: 20px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); }
        .stat-box h3 { font-size: 32px; margin: 0; font-weight: bold; }
        .stat-box p { margin: 5px 0 0 0; opacity: 0.9; }
        .table { font-size: 14px; }
        .table thead { background: var(--secondary-color); color: white; }
        .table tbody tr:hover { background: #f5f5f5; }
        .modal-header { background: var(--secondary-color); color: white; }
        .form-control:focus { border-color: var(--primary-color); box-shadow: 0 0 0 0.2rem rgba(107, 168, 107, 0.25); }
        .page-header { background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); color: white; padding: 20px; border-radius: 10px; margin-bottom: 30px; }
        .card { border: none; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); }
        .card-header { background: var(--secondary-color); color: white; border: none; }
        .logo-text { color: var(--primary-color); font-weight: bold; font-size: 20px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-leaf" style="color: var(--primary-color);"></i>
                <span class="logo-text">Vise Organic</span>
            </a>
            <div class="ms-auto">
                <span class="text-white me-3"><?php echo e(session('admin_email', 'Admin')); ?></span>
                <a href="<?php echo e(route('admin.logout')); ?>" class="btn btn-outline-light btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="page-header">
            <h1><i class="fas fa-chart-line me-2"></i>Dashboard</h1>
            <p class="mb-0">Manage Vise Organic Products & Contacts</p>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <div class="stat-box">
                    <i class="fas fa-envelope" style="font-size: 24px; opacity: 0.7;"></i>
                    <h3><?php echo e($contactCount); ?></h3>
                    <p>Total Contacts</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <i class="fas fa-box" style="font-size: 24px; opacity: 0.7;"></i>
                    <h3><?php echo e($productCount); ?></h3>
                    <p>Total Products</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <i class="fas fa-users" style="font-size: 24px; opacity: 0.7;"></i>
                    <h3><?php echo e($userCount); ?></h3>
                    <p>Total Users</p>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs mb-4" style="border-bottom: 2px solid var(--primary-color);">
            <li class="nav-item"><button class="nav-link active" onclick="showPane('contacts')">Contacts</button></li>
            <li class="nav-item"><button class="nav-link" onclick="showPane('products')">Products</button></li>
            <li class="nav-item"><button class="nav-link" onclick="showPane('users')">Users</button></li>
        </ul>

        <div id="contactsPane">
            <div class="card">
                <div class="card-header"><h5 class="mb-0">Contact Entries</h5></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr><th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Service</th><th>Message</th><th>Date</th></tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($contact->id); ?></td>
                                        <td><?php echo e($contact->name); ?></td>
                                        <td><?php echo e($contact->email); ?></td>
                                        <td><?php echo e($contact->mobile); ?></td>
                                        <td><?php echo e($contact->service); ?></td>
                                        <td><?php echo e(Str::limit($contact->message, 40)); ?></td>
                                        <td><?php echo e($contact->created_at->format('d-M-Y')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="productsPane" style="display:none;">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Products Management</h5>
                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#productModal">Add Product</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr><th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Quantity</th><th>Description</th><th>Date</th></tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->id); ?></td>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->category ?? 'General'); ?></td>
                                        <td>₹<?php echo e(number_format($product->price,2)); ?></td>
                                        <td><?php echo e($product->quantity); ?></td>
                                        <td><?php echo e(Str::limit($product->description, 30)); ?></td>
                                        <td><?php echo e($product->created_at->format('d-M-Y')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="usersPane" style="display:none;">
            <div class="card">
                <div class="card-header"><h5 class="mb-0">Users Management</h5></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th></tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->created_at->format('d-M-Y')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="productModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Add Product</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('admin.product.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label">Name</label><input class="form-control" name="name" required></div>
                            <div class="col-md-6"><label class="form-label">Category</label><input class="form-control" name="category"></div>
                            <div class="col-md-6"><label class="form-label">Price</label><input type="number" step="0.01" class="form-control" name="price" required></div>
                            <div class="col-md-6"><label class="form-label">Quantity</label><input type="number" class="form-control" name="quantity" required></div>
                            <div class="col-12"><label class="form-label">Description</label><textarea class="form-control" name="description" rows="4" required></textarea></div>
                        </div>
                        <div class="mt-4 text-end"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-primary">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script>
        function showPane(name) {
            document.getElementById('contactsPane').style.display = name === 'contacts' ? 'block' : 'none';
            document.getElementById('productsPane').style.display = name === 'products' ? 'block' : 'none';
            document.getElementById('usersPane').style.display = name === 'users' ? 'block' : 'none';
        }
    </script>
</body>
</html>
<?php /**PATH C:\Users\DELL\viseorganic\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>