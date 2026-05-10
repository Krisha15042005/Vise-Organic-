<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Dashboard') | Vise Organic - Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Vise Organic Admin Panel" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('image/logo.jpg') }}">

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .startbar .brand .logo-sm { display: none !important; }
        .startbar .brand .logo-lg { display: inline-flex !important; }
        body[data-sidebar-size=collapsed] .startbar:not(:hover) .brand .logo-lg {
            display: none !important;
            width: 0 !important;
            margin-left: 0 !important;
            overflow: hidden !important;
        }
        body[data-sidebar-size=collapsed] .startbar:not(:hover) .brand .logo-sm {
            display: inline-flex !important;
            align-items: center;
        }
        body[data-sidebar-size=collapsed] .startbar:hover .brand .logo-sm { display: none !important; }
        body[data-sidebar-size=collapsed] .startbar:hover .brand .logo-lg { display: inline-flex !important; }
        .startbar .brand .logo-sm img,
        .startbar .brand .logo-lg img { width: 32px; height: auto; }
        .startbar .brand .logo-lg span { line-height: 1; }
    </style>
    @stack('styles')
</head>

<body>
    <!-- Top Bar Start -->
    <div class="topbar d-print-none">
        <div class="container-fluid">
            <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">
                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                    <li>
                        <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                            <i class="iconoir-menu"></i>
                        </button>
                    </li>
                    <li class="mx-2 welcome-text">
                        <h5 class="mb-0 fw-semibold text-truncate">Welcome to Vise Organic Admin</h5>
                    </li>
                </ul>
                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0" placeholder="Search here...">
                            <button type="submit"><i class="iconoir-search"></i></button>
                        </form>
                    </li>
                    <li class="topbar-item">
                        <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                            <i class="iconoir-half-moon dark-mode"></i>
                            <i class="iconoir-sun-light light-mode"></i>
                        </a>
                    </li>
                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <i class="iconoir-bell"></i>
                            <span class="alert-badge"></span>
                        </a>
                        <div class="dropdown-menu stop dropdown-menu-end dropdown-lg py-0">
                            <h5 class="dropdown-item-text m-0 py-3 d-flex justify-content-between align-items-center">
                                Notifications <a href="#" class="badge text-body-tertiary badge-pill">
                                    <i class="iconoir-plus-circle fs-4"></i>
                                </a>
                            </h5>
                            <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified mb-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-0 active" data-bs-toggle="tab" href="#All" role="tab" aria-selected="true">
                                        All <span class="badge bg-primary-subtle text-primary badge-pill ms-1">24</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="ms-0" style="max-height:230px;" data-simplebar>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-wolf fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">New order received</h6>
                                                    <small class="text-muted mb-0">Check the orders section.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item text-center text-dark fs-13 py-2">
                                View All <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <img src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}" alt="" class="thumb-md rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0">
                            <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}" alt="" class="thumb-md rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                    <h6 class="my-0 fw-medium text-dark fs-13">Admin</h6>
                                    <small class="text-muted mb-0">Administrator</small>
                                </div>
                            </div>
                            <div class="dropdown-divider mt-0"></div>
                            <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="las la-power-off fs-18 me-1 align-text-bottom"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="{{ route('admin.dashboard') }}" class="logo d-flex align-items-center">
                <span class="logo-sm">
                    <img src="{{ asset('image/logo.jpg') }}" alt="Vise Organic" style="width: 32px; height: auto; display: block;">
                </span>
                <span class="logo-lg d-flex align-items-center">
                    <img src="{{ asset('image/logo.jpg') }}" alt="Vise Organic" style="width: 32px; height: auto; display: block; margin-right: 8px;">
                    <span class="d-flex align-items-baseline" style="gap: 0.2rem;">
                        <span style="font-size: 20px; font-weight: 700; color: #6ba86b; line-height: 1;">Vise</span>
                        <span style="font-size: 20px; font-weight: 700; color: #495057; line-height: 1;">Organic</span>
                    </span>
                </span>
            </a>
        </div>
        <!--end brand-->
        <!--start startbar-menu-->
        <div class="startbar-menu">
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-auto w-100">
                        <li class="menu-label mt-2">
                            <span>Navigation</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <i class="iconoir-report-columns menu-icon"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="d-flex align-items-center justify-content-between">
                                <a class="nav-link d-flex align-items-center flex-grow-1" href="{{ route('admin.products.index') }}">
                                    <i class="iconoir-cart-alt menu-icon"></i>
                                    <span>Products</span>
                                </a>
                                <a class="nav-link p-0" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                                    <i class="iconoir-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse" id="sidebarProducts">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.products.index') }}" class="nav-link">All Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.products.create') }}" class="nav-link">Add Product</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="d-flex align-items-center justify-content-between">
                                <a class="nav-link d-flex align-items-center flex-grow-1" href="{{ route('admin.blog.index') }}">
                                    <i class="iconoir-book menu-icon"></i>
                                    <span>Blog Posts</span>
                                </a>
                                <a class="nav-link p-0" href="#sidebarBlog" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBlog">
                                    <i class="iconoir-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse" id="sidebarBlog">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.blog.index') }}" class="nav-link">All Posts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.blog.create') }}" class="nav-link">Add Post</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="d-flex align-items-center justify-content-between">
                                <a class="nav-link d-flex align-items-center flex-grow-1" href="{{ route('admin.gallery.index') }}">
                                    <i class="iconoir-image menu-icon"></i>
                                    <span>Gallery</span>
                                </a>
                                <a class="nav-link p-0" href="#sidebarGallery" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarGallery">
                                    <i class="iconoir-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse" id="sidebarGallery">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.gallery.index') }}" class="nav-link">All Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.gallery.create') }}" class="nav-link">Add Image</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.contacts.index') }}">
                                <i class="iconoir-community menu-icon"></i>
                                <span>Contacts</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end leftbar-tab-menu -->
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            @yield('content')
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>