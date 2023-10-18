<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'Revoltemobility') }}</title>
    <link href="{{ asset('css/user-styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
        id="sidenavAccordion">
        <!-- Sidenav Toggle Button-->
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i
                data-feather="menu"></i></button>
        <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="https://revoltemobility.com/">Revoltemobility</a>
        <form class="form-inline me-auto d-none d-lg-block me-3">
            <div class="input-group">
                {{-- <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" /> --}}
                <div class="input-group-text">Welcome <b style="margin-left: 5px;">{{ Auth::user()->name ?? ''}}</b>
                </div>
                <div class="input-group-text">Registration Number: <b
                        style="margin-left: 5px;">{{ Auth::user()->login_id ?? '' }} </b> </div>
            </div>
        </form>
        <!-- Navbar Items-->
        <ul class="navbar-nav align-items-center ms-auto">

            <li class="nav-item dropdown no-caret me-3 d-lg-none">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        data-feather="search"></i></a>
                <!-- Dropdown - Search-->
                <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline me-auto w-100">
                        <div class="input-group input-group-joined input-group-solid">
                            <input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2" />
                            <div class="input-group-text"><i data-feather="search"></i></div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- User Dropdown-->
            <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    @if (\Auth::user()->image != '')
                    <img class="img-fluid" src="{{ url('/') }}/public/storage/profile/{{ Auth::user()->image  }}" />
                    @else
                    <img class="img-fluid" src="../assets/img/logo.png" />
                    @endif

                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                        aria-labelledby="navbarDropdownUserImage">
                        {{-- <h6 class="dropdown-header d-flex align-items-center">
						    
					        @if (\Auth::user()->image != '')
                                 <img class="dropdown-user-img" src="{{ url('/') }}/public/storage/profile/{{ Auth::user()->image  }}"
                        />
                        @else
                        <img class="dropdown-user-img" src="../assets/img/logo.png" />
                        @endif
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                        </div>
                        </h6> --}}
                        {{-- <div class="dropdown-divider"></div> --}}
                        {{-- <a class="dropdown-item" href="#!">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account
                        </a> --}}
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            {{ __('Logout') }}
                        </a>
                    </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <!-- Sidenav Menu Heading (Core)-->
                        <div class="sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{url('user/profile')}}">
                            <div class="nav-link-icon"><i data-feather="user-plus"></i></div>
                            Personal Information
                        </a>
                        <a class="nav-link" href="{{route('profile.bank')}}">
                            <div class="nav-link-icon"><i data-feather="user"></i></div>
                            Account Information
                        </a>


                        <div class="sidenav-menu-heading">Order</div>
                        <a class="nav-link" href="{{ url('user/orders') }}">
                            <div class="nav-link-icon"><i data-feather="grid"></i></div>
                            Orders
                        </a>
                        <a class="nav-link" href="{{ url('user/qrcode') }}">
                            <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                            QR Code
                        </a>
                        
                        <div class="sidenav-menu-heading">Download</div>
                        <a class="nav-link" href="{{ url('user/approval-letter') }}">
                            <div class="nav-link-icon"><i data-feather="download"></i></div>Approval Letter
                         </a>
                        <a class="nav-link" href="{{ url('user/agreement') }}">
                            <div class="nav-link-icon"><i data-feather="download"></i></div>Agreement Letter
                        </a>
                        <a class="nav-link" href="{{ route('user.order.invoice.index') }}">
                            <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                            Invoice
                        </a>
                        {{-- <a class="nav-link" href="{{ url('user/home') }}">
                        <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                        Agreement
                        </a>
                        <a class="nav-link" href="{{ url('user/home') }}">
                            <div class="nav-link-icon"><i data-feather="layout"></i></div>
                            Invoice
                        </a> --}}


                    </div>
                </div>
                <!-- Sidenav Footer-->
                {{-- <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">{{ Auth::user()->login_id }}
        </div>
    </div>
    </div> --}}
    </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('main-content')
        </main>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright © Revoltemobility {{ now()->year }}</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        ·
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <a class="btn btn-danger" href="{{ route('userLogout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('userLogout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/user-customizer.js') }}"></script>
    <script src="{{ asset('js/user-scripts.js') }}"></script>
    @stack('scripts')
</body>

</html>
