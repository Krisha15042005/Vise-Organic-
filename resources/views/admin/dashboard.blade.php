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
