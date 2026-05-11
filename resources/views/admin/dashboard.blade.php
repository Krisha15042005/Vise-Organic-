<<<<<<< HEAD
@extends('admin.layouts.layout')

@section('title', 'Dashboard')

@push('styles')
<!-- Minimal custom styles for Vise Organic -->
<style>
.page-title-box {
    background: #f8f9fa;
    color: #495057;
}
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Vise Organic</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                            <i class="iconoir-envelope fs-4"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 text-truncate">
                            <p class="text-dark mb-0 fw-semibold fs-14">Total Contacts</p>
                            <p class="mb-0 text-truncate text-muted">Customer inquiries</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <h3 class="mt-2 mb-0 fw-bold">{{ $contactCount }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 bg-info-subtle text-info thumb-md rounded-circle">
                            <i class="iconoir-cart fs-4"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 text-truncate">
                            <p class="text-dark mb-0 fw-semibold fs-14">Total Products</p>
                            <p class="mb-0 text-truncate text-muted">Organic items</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <h3 class="mt-2 mb-0 fw-bold">{{ $productCount }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0 bg-success-subtle text-success thumb-md rounded-circle">
                            <i class="iconoir-users fs-4"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 text-truncate">
                            <p class="text-dark mb-0 fw-semibold fs-14">Total Users</p>
                            <p class="mb-0 text-truncate text-muted">Registered users</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <h3 class="mt-2 mb-0 fw-bold">{{ $userCount }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs mb-4" role="tablist">
        <li class="nav-item"><button class="nav-link active" type="button" onclick="showPane('contacts', event)">Contacts</button></li>
        <li class="nav-item"><button class="nav-link" type="button" onclick="showPane('products', event)">Products</button></li>
        <li class="nav-item"><button class="nav-link" type="button" onclick="showPane('blogs', event)">Blog</button></li>
        <li class="nav-item"><button class="nav-link" type="button" onclick="showPane('gallery', event)">Gallery</button></li>
        <li class="nav-item"><button class="nav-link" type="button" onclick="showPane('users', event)">Users</button></li>
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
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->mobile }}</td>
                                    <td>{{ $contact->service }}</td>
                                    <td>{{ Str::limit($contact->message, 40) }}</td>
                                    <td>{{ $contact->created_at->format('d-M-Y') }}</td>
                                </tr>
                            @endforeach
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
                <a href="{{ route('admin.products.create') }}" class="btn btn-success btn-sm">+ Add Product</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr><th>ID</th><th>Image</th><th>Name</th><th>Category</th><th>Price</th><th>Qty</th><th>Date</th><th>Actions</th></tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" style="width:45px;height:45px;object-fit:cover;border-radius:6px;" alt="{{ $product->name }}">
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category ?? 'General' }}</td>
                                    <td>₹{{ number_format($product->price,2) }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->created_at->format('d-M-Y') }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.product.delete', $product->id) }}" style="display:inline;" onsubmit="return confirm('Delete this product?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="blogsPane" style="display:none;">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Blog Posts</h5>
                <a href="{{ route('admin.blog.create') }}" class="btn btn-success btn-sm">+ Add Blog Post</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr><th>ID</th><th>Image</th><th>Title</th><th>Author</th><th>Content</th><th>Date</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>
                                        @if($blog->image)
                                            <img src="{{ asset('storage/' . $blog->image) }}" style="width:45px;height:45px;object-fit:cover;border-radius:6px;" alt="{{ $blog->title }}">
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->author }}</td>
                                    <td>{{ Str::limit($blog->content, 30) }}</td>
                                    <td>{{ $blog->created_at->format('d-M-Y') }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.blog.delete', $blog->id) }}" style="display:inline;" onsubmit="return confirm('Delete?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="galleryPane" style="display:none;">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Gallery Images</h5>
                <a href="{{ route('admin.gallery.create') }}" class="btn btn-success btn-sm">+ Add Image</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr><th>ID</th><th>Image</th><th>Title</th><th>Category</th><th>Date</th><th>Action</th></tr>
                        </thead>
                        <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->id }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $gallery->image_path) }}" style="width:50px;height:50px;object-fit:cover;border-radius:6px;" alt="{{ $gallery->title }}">
                                    </td>
                                    <td>{{ $gallery->title }}</td>
                                    <td>{{ $gallery->category }}</td>
                                    <td>{{ $gallery->created_at->format('d-M-Y') }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.gallery.delete', $gallery->id) }}" style="display:inline;" onsubmit="return confirm('Delete?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="usersPane" style="display:none;">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Users Management</h5>
                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#userModal">+ Add User</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th></tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->format('d-M-Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="productModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted">Use the dedicated form for full product creation with image upload.</p>
                <a href="{{ route('admin.products.create') }}" class="btn btn-success w-100">Go to Add Product Form</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.user.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function showPane(pane, event) {
    document.querySelectorAll('[id$="Pane"]').forEach(p => p.style.display = 'none');
    const target = document.getElementById(pane + 'Pane');
    if (target) {
        target.style.display = 'block';
    }
    document.querySelectorAll('.nav-tabs .nav-link').forEach(l => l.classList.remove('active'));
    if (event && event.target) {
        event.target.classList.add('active');
    }
}
</script>
@endpush
@endsection
=======
<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>Vise Organic Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
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
                <span class="text-white me-3">{{ session('admin_email', 'Admin') }}</span>
                <a href="{{ route('admin.logout') }}" class="btn btn-outline-light btn-sm">Logout</a>
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
                    <h3>{{ $contactCount }}</h3>
                    <p>Total Contacts</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <i class="fas fa-box" style="font-size: 24px; opacity: 0.7;"></i>
                    <h3>{{ $productCount }}</h3>
                    <p>Total Products</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box">
                    <i class="fas fa-users" style="font-size: 24px; opacity: 0.7;"></i>
                    <h3>{{ $userCount }}</h3>
                    <p>Total Users</p>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs mb-4" style="border-bottom: 2px solid var(--primary-color);">
            <li class="nav-item"><button class="nav-link active" onclick="showPane('contacts')">Contacts</button></li>
            <li class="nav-item"><button class="nav-link" onclick="showPane('products')">Products</button></li>
            <li class="nav-item"><button class="nav-link" onclick="showPane('blogs')">Blog</button></li>
            <li class="nav-item"><button class="nav-link" onclick="showPane('gallery')">Gallery</button></li>
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
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->mobile }}</td>
                                        <td>{{ $contact->service }}</td>
                                        <td>{{ Str::limit($contact->message, 40) }}</td>
                                        <td>{{ $contact->created_at->format('d-M-Y') }}</td>
                                    </tr>
                                @endforeach
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
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category ?? 'General' }}</td>
                                        <td>₹{{ number_format($product->price,2) }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ Str::limit($product->description, 30) }}</td>
                                        <td>{{ $product->created_at->format('d-M-Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="usersPane" style="display:none;">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Users Management</h5>
                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#userModal">Add User</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th></tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->format('d-M-Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="blogsPane" style="display:none;">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Blog Management</h5>
                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#blogModal">Add Blog Post</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr><th>ID</th><th>Title</th><th>Author</th><th>Content</th><th>Date</th><th>Action</th></tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->author }}</td>
                                        <td>{{ Str::limit($blog->content, 30) }}</td>
                                        <td>{{ $blog->created_at->format('d-M-Y') }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.blog.delete', $blog->id) }}" style="display:inline;">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="galleryPane" style="display:none;">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Gallery Management</h5>
                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal">Add Image</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr><th>ID</th><th>Title</th><th>Category</th><th>Image</th><th>Date</th><th>Action</th></tr>
                            </thead>
                            <tbody>
                                @foreach($galleries as $gallery)
                                    <tr>
                                        <td>{{ $gallery->id }}</td>
                                        <td>{{ $gallery->title }}</td>
                                        <td>{{ $gallery->category }}</td>
                                        <td><a href="{{ $gallery->image_path }}" target="_blank" class="btn btn-info btn-sm">View</a></td>
                                        <td>{{ $gallery->created_at->format('d-M-Y') }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.gallery.delete', $gallery->id) }}" style="display:inline;">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
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
                    <form method="POST" action="{{ route('admin.product.store') }}">
                        @csrf
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

    <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Add User</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.user.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label">Name</label><input class="form-control" name="name" required></div>
                            <div class="col-md-6"><label class="form-label">Email</label><input type="email" class="form-control" name="email" required></div>
                            <div class="col-md-6"><label class="form-label">Password</label><input type="password" class="form-control" name="password" required></div>
                            <div class="col-md-6"><label class="form-label">Confirm Password</label><input type="password" class="form-control" name="password_confirmation" required></div>
                        </div>
                        <div class="mt-4 text-end"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-primary">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="blogModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Add Blog Post</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.blog.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12"><label class="form-label">Title</label><input class="form-control" name="title" required></div>
                            <div class="col-md-6"><label class="form-label">Author</label><input class="form-control" name="author" required></div>
                            <div class="col-md-6"><label class="form-label">Image URL</label><input class="form-control" name="image"></div>
                            <div class="col-12"><label class="form-label">Content</label><textarea class="form-control" name="content" rows="5" required></textarea></div>
                        </div>
                        <div class="mt-4 text-end"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-primary">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="galleryModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Add Gallery Image</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.gallery.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12"><label class="form-label">Image Title</label><input class="form-control" name="title" required></div>
                            <div class="col-12"><label class="form-label">Image URL</label><input class="form-control" name="image_path" placeholder="https://example.com/image.jpg" required></div>
                            <div class="col-12"><label class="form-label">Category</label><input class="form-control" name="category" required></div>
                        </div>
                        <div class="mt-4 text-end"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-primary">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        function showPane(name) {
            document.getElementById('contactsPane').style.display = name === 'contacts' ? 'block' : 'none';
            document.getElementById('productsPane').style.display = name === 'products' ? 'block' : 'none';
            document.getElementById('blogsPane').style.display = name === 'blogs' ? 'block' : 'none';
            document.getElementById('galleryPane').style.display = name === 'gallery' ? 'block' : 'none';
            document.getElementById('usersPane').style.display = name === 'users' ? 'block' : 'none';
        }
    </script>
</body>
</html>
>>>>>>> e448ae559fcabf58ac1decb1137d7f4c90e449a8
