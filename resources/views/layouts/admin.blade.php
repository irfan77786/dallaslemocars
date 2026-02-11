<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="material-style layout-fixed">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/open-iconic.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-material.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/shreerang-material.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/uikit.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/libs/flot/flot.css') }}">
</head>
<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>

    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                <div class="app-brand demo">
                    <a href="{{ route('dashboard') }}" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Welcome Back!</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>
                <ul class="sidenav-inner py-1">
                    <li class="sidenav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-calendar"></i>
                            <div>Bookings</div>
                        </a>
                    </li>
                    <li class="sidenav-item {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                        <a href="{{ route('profile.edit') }}" class="sidenav-link">
                            <i class="sidenav-icon feather icon-user"></i>
                            <div>Profile</div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="layout-container">
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <hr class="d-lg-none w-100 my-2">
                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{ (Auth::user()->first_name ?? '') . ' ' . (Auth::user()->last_name ?? Auth::user()->name ?? 'User') }}</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                        <i class="feather icon-user text-muted"></i> &nbsp; Profile
                                    </a>
                                    <a href="{{ url('/') }}" class="dropdown-item">
                                        <i class="feather icon-home text-muted"></i> &nbsp; Back to site
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="feather icon-power text-danger"></i> &nbsp; Log Out
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="layout-content">
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                </div>

                <nav class="layout-footer footer bg-white">
                    <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                        <div class="pt-3">
                            <span class="footer-text font-weight-semibold">&copy; {{ date('Y') }} {{ config('app.name') }}</span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/js/pace.js') }}"></script>
    <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/js/sidenav.js') }}"></script>
    <script src="{{ asset('admin/js/layout-helpers.js') }}"></script>
    <script src="{{ asset('admin/js/material-ripple.js') }}"></script>
    <script src="{{ asset('admin/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/libs/eve/eve.js') }}"></script>
    <script src="{{ asset('admin/libs/flot/flot.js') }}"></script>
    <script src="{{ asset('admin/libs/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('admin/libs/chart-am4/core.js') }}"></script>
    <script src="{{ asset('admin/libs/chart-am4/charts.js') }}"></script>
    <script src="{{ asset('admin/libs/chart-am4/animated.js') }}"></script>
    <script src="{{ asset('admin/js/demo.js') }}"></script>
    <script src="{{ asset('admin/js/analytics.js') }}"></script>
    <script src="{{ asset('admin/js/pages/dashboards_index.js') }}"></script>
</body>
</html>
