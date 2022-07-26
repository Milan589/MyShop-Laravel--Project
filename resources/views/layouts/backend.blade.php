<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/backend/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/backend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    @yield('css')

</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Myshop</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/backend/img/user.jpg') }}" alt="user"
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">
                            @if (Auth::check())
                                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                            @endif
                        </h6>
                        {{-- <span>Admin</span> --}}
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('/home') }}" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Tag </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/tag/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/tag') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Category </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/category/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/category') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-th me-2"></i>Subcategory</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/subcategory/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/subcategory') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Product</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/product/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/product') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-th me-2"></i>Orders</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    {{-- <li class="nav-item">
                                        <a href="{{ url('../backend/attribute/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/order') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-th me-2"></i>Payment</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    {{-- <li class="nav-item">
                                        <a href="{{ url('../backend/attribute/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="{{ url('../payment') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Slider</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/slider/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/slider') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>
            
                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Role</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/role/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/role') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-th me-2"></i>Attribute</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/attribute/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/attribute') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Brand</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/brand/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/brand') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-th me-2"></i>Setting </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/setting/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/setting') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <li class="nav-item">
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/user/create') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>Create</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('../backend/user') }}" class="nav-link">
                                            <i class="far fa-square nav-icon"></i>
                                            <p>List</p>
                                        </a>
                                    </li>
            
                                </ul>
                            </li>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
     

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('assets/backend/img/user.jpg') }}"
                                alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">
                                @if (Auth::check())
                                    <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                                @endif
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                @yield('content')
            </div>
            <!-- Widgets End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</body>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/backend/lib/chart/chart.min.js') }}"></script>
<script src="{{ asset('assets/backend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/backend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/backend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/backend/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/backend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('assets/backend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/backend/js/main.js') }}"></script>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

@yield('js')

</html>
