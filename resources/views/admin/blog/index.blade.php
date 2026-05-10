@extends('admin.layouts.layout')

@section('title', 'Blog Posts')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                <h4 class="page-title">Blog Posts</h4>
                <div class="">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Vise Organic</a></li>
                        <li class="breadcrumb-item active">Blog Posts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Blog Management</h5>
                    <a href="{{ route('admin.blog.create') }}" class="btn btn-success btn-sm">+ Add Post</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Content</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>
                                            @if($blog->image)
                                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" style="width:50px;height:50px;object-fit:cover;border-radius:6px;">
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->author }}</td>
                                        <td>{{ Str::limit($blog->content, 50) }}</td>
                                        <td>{{ $blog->created_at->format('d-M-Y') }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.blog.delete', $blog->id) }}" style="display:inline;" onsubmit="return confirm('Delete this post?')">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="7" class="text-center text-muted py-4">No blog posts yet. <a href="{{ route('admin.blog.create') }}">Add one</a>.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
