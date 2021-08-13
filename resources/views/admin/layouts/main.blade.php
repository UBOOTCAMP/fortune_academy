<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('/assets/admin/images/favicon.ico') }}" type="image/png"/>
    <!--plugins-->
    <link href="{{ asset('/assets/admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    @stack('style')
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/notifications/css/lobibox.min.css')}}">
    <!-- loader-->
    <link href="{{ asset('/assets/admin/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{ asset('/assets/admin/js/pace.min.js')}}"></script>
    <link href="{{ asset('assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('/assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/dark-theme.css')}}"/>
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/semi-dark.css')}}"/>
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/header-colors.css')}}"/>
    <title>@yield('title')</title>
</head>

<body>
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{ asset('/assets/admin/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Fortune Academy</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            @if(auth()->user()->can('categories'))
                <li>
                    <a href="{{ route('categories.index') }}">
                        <div class="parent-icon"><i class='bx bx-grid-alt'></i>
                        </div>
                        <div class="menu-title">Category</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('sub-categories'))
                <li>
                    <a href="{{ route('sub-categories.index') }}">
                        <div class="parent-icon"><i class='bx bx-cookie'></i>
                        </div>
                        <div class="menu-title">Sub-Category</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('classes'))
                <li>
                    <a href="{{ route('classes.index') }}">
                        <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class="menu-title">Classes</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('users'))
                <li>
                    <a href="{{ route('users.index') }}">
                        <div class="parent-icon"><i class='bx bx-user-circle'></i>
                        </div>
                        <div class="menu-title">Users</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('instructors'))
                <li>
                    <a href="{{ route('instructors.index') }}">
                        <div class="parent-icon"><i class='bx bx-user'></i>
                        </div>
                        <div class="menu-title">Instructors</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('students'))
                <li>
                    <a href="{{ route('students.index') }}">
                        <div class="parent-icon"><i class='bx bx-pen'></i>
                        </div>
                        <div class="menu-title">Students</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('roles'))
                <li>
                    <a href="{{ route('roles.index') }}">
                        <div class="parent-icon"><i class='bx bx-user-voice'></i>
                        </div>
                        <div class="menu-title">Roles</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('permissions'))
                <li>
                    <a href="{{ route('permissions.index') }}">
                        <div class="parent-icon"><i class='bx bx-lock'></i>
                        </div>
                        <div class="menu-title">Permissions</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('promo_codes'))
                <li>
                    <a href="{{ route('promo_codes.index') }}">
                        <div class="parent-icon"><i class='bx bx-lock'></i>
                        </div>
                        <div class="menu-title">Promo Code</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('groups'))
                <li>
                    <a href="{{ route('groups.index') }}">
                        <div class="parent-icon"><i class='bx bx-user'></i>
                        </div>
                        <div class="menu-title">Groups</div>
                    </a>
                </li>
            @endif

            @if(auth()->user()->can('class_rooms'))
                <li>
                    <a href="{{ route('class_rooms.index') }}">
                        <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                        </div>
                        <div class="menu-title">Class Rooms</div>
                    </a>
                </li>
            @endif

        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                <div class="top-menu ms-auto"></div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('/assets/images/avatar.png') }}" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{ auth()->user()->name }}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('dashboard') }}"><i
                                    class='bx bx-home-circle'></i><span>Dashboard</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class='bx bx-log-out-circle'></i><span>Logout</span></a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}"
                              method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-wrapper">
        <div class="page-content">
            @yield('content')
        </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
</div>
<!-- Bootstrap JS -->
<script src="{{asset('/assets/admin/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('/assets/admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/assets/admin/plugins/notifications/js/lobibox.min.js')}}"></script>
<script src="{{asset('/assets/admin/plugins/notifications/js/notifications.min.js')}}"></script>
<script src="{{asset('/assets/admin/plugins/notifications/js/notification-custom-script.js')}}"></script>
<script src="{{asset('/assets/admin/js/index.js')}}"></script>
<link href="{{asset('/assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"/>
<link href="{{asset('/assets/admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
<script src="{{asset('/assets/admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/assets/admin/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<!--app JS-->
<script>
    window.authRole = {!! auth()->user()->toJson() !!};
</script>
@stack('scripts')
<script src="{{asset('/assets/admin/js/app.js')}}"></script>
<script>
    new PerfectScrollbar('.customers-list');
    new PerfectScrollbar('.store-metrics');
    new PerfectScrollbar('.product-list');
</script>
</body>

</html>
