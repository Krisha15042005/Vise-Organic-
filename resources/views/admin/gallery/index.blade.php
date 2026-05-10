@extends('admin.layouts.layout')

@section('title', 'Gallery')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                <h4 class="page-title">Gallery Images</h4>
                <div class="">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Vise Organic</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
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
                    <h5 class="mb-0">Gallery Management</h5>
                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-success btn-sm">+ Add Image</a>
                </div>
                <div class="card-body">
                    @if($galleries->isEmpty())
                        <p class="text-center text-muted py-4">No images yet. <a href="{{ route('admin.gallery.create') }}">Upload one</a>.</p>
                    @else
                        <div class="row g-3">
                            @foreach($galleries as $gallery)
                                <div class="col-md-3 col-sm-6">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('storage/' . $gallery->image_path) }}"
                                             class="card-img-top"
                                             alt="{{ $gallery->title }}"
                                             style="height:180px;object-fit:cover;">
                                        <div class="card-body p-2">
                                            <h6 class="mb-1">{{ $gallery->title }}</h6>
                                            <span class="badge bg-secondary mb-2">{{ $gallery->category }}</span>
                                            <div class="d-flex gap-1">
                                                <a href="{{ asset('storage/' . $gallery->image_path) }}" target="_blank" class="btn btn-sm btn-info flex-fill">View</a>
                                                <form method="POST" action="{{ route('admin.gallery.delete', $gallery->id) }}" onsubmit="return confirm('Delete this image?')">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
