<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>LAYAD "Layanan Aduan"</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />

        <!-- Favicon -->
        <link href="{{ asset('assets/img/logos/favicon.png') }}" rel="icon" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />

        <!-- Icon Font Stylesheet -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
            rel="stylesheet"
        />
        <!-- Libraries Stylesheet -->
        <link
            href="{{ asset('assets/libs/animate/animate.min.css')}}"
            rel="stylesheet"
        />
        <link
            href="{{ asset('assets/libs/owlcarousel/owl.carousel.min.js')}}"
            rel="stylesheet"
        />

        <!-- Customized Bootstrap Stylesheet -->
        <link
            href="{{ asset('assets/css/bootstrap1.min.css')}}"
            rel="stylesheet"
        />

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet" />
    </head>

    <body>
        <!-- Spinner Start -->
        <div
            id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
        >
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
            <a
                href="/home"
                class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
                <img
                    class="logo"
                    src="{{ asset('assets/img/logos/logo.png') }}"
                    alt="Logo"
                />
                <h2 class="m-0"><i class="text-primary me-2"></i>LAYAD</h2>
            </a>
            <button
                type="button"
                class="navbar-toggler me-4"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Struktur navigasi -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mr-auto p-5 p-lg-0">
                <a href="{{ route('laporans.create') }}" class="nav-item nav-link {{$title === "home"? "active": "" }}">Home</a>
                <a href="/about" class="nav-item nav-link {{$title === "about"? "active": "" }}">About</a>
                <a href="/stats" class="nav-item nav-link {{$title === "stats"? "active": "" }}">Statistics</a>
            </div>
            <div class="navbar-nav ms-auto">
                <div class="nav-item dropdown ms-0" style="position: relative;">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/profile/user-1.jpg') }}" width="35" height="35" class="rounded-circle" style="margin-left: -130px;">
                    </a>
                    <div class="dropdown-menu bg-light m-0 ms-0" style="position: absolute; top: 100%; left: -130px;">
                        <a href="{{ route('laporans.index') }}" class="dropdown-item">My Report</a>
                        <div class="dropdown-divider"></div>
                        <a href="/login" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            
        </div>
        </nav>
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        <div
        class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn"
        data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>D.I Pandjaitan Street,
                        Purwokerto Selatan, Banyumas, Indonesia.
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>+62 87848355561
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>layananaduan@gmail.com
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="https://wa.me/6287848355561">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">LAYAD</a>, All Right
                        Reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/libs/wow/wow.min.js')}}"></script>
        <script src="{{ asset('assets/libs/easing/easing.min.js')}}"></script>
        <script src="{{ asset('assets/libs/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/libs/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main1.js')}}"></script>
    </body>
</html>
