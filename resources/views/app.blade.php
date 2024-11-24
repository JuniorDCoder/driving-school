<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} -  @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="p-0 container-fluid bg-dark text-light">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="px-5 col-lg-7 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Bryn Celine Llansamlet, Swansea SA7 9SG, United Kingdom</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="px-5 col-lg-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small class="me-2">+44 7943883854</small>
                    <small>+44 7436175697</small>
                </div>
                {{-- <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="border-0 btn btn-square btn-link rounded-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="border-0 btn btn-square btn-link rounded-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="border-0 btn btn-square btn-link rounded-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="p-0 bg-white navbar navbar-expand-lg navbar-light sticky-top">
        <a href="index.html" class="px-4 navbar-brand d-flex align-items-center border-end px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Brilliant Driving</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="p-4 navbar-nav ms-auto p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a>
                <a href="{{ route('licenses') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'licenses' ? 'active' : '' }}">Licenses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="m-0 dropdown-menu bg-light">
                        <a href="{{route('features')}}" class="dropdown-item">Features</a>
                        <a href="{{route('appointment')}}" class="dropdown-item">Appointment</a>
                        <a href="{{route('testimonials')}}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" >Contact</a>
            </div>
            <a href="{{route('contact')}}" class="py-4 btn btn-primary px-lg-5 d-none d-lg-block">Get in touch<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')


    <!-- Footer Start -->
    <div class="py-6 my-6 mb-0 container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4 text-white">Get In Touch</h4>
                    <h2 class="mb-4 text-primary"><i class="text-white fa fa-car me-2"></i>Brilliant Driving</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bryn Celine Llansamlet, Swansea SA7 9SG, United Kingdom</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+44 7943883854</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4 text-light">Quick Links</h4>
                    <a class="btn btn-link" href="{{route('about')}}">About Us</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contact Us</a>
                    <a class="btn btn-link" href="{{route('features')}}">Our Services</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4 text-light">Popular Links</h4>
                    <a class="btn btn-link" href="{{route('about')}}">About Us</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contact Us</a>
                    <a class="btn btn-link" href="{{route('features')}}">Our Services</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4 text-light">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="p-3 border-0 form-control" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="mt-4 mb-3 text-white">Follow Us</h6>
                    <div class="pt-2 d-flex">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="py-4 container-fluid copyright text-light wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                    &copy; <a href="{{route('home')}}">Brilliant Driving School</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
