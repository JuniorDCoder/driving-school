@extends('app')
@section('title', "About")
@section('content')
 <!-- Page Header Start -->
 <div class="py-6 my-6 mt-0 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="mb-4 text-white display-4 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="mb-0 breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" >Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="py-6 container-xxl">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="pt-5 overflow-hidden position-relative ps-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                    <img class="top-0 pb-3 bg-white position-absolute start-0 pe-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="mb-2 text-primary text-uppercase">About Us</h6>
                    <h1 class="mb-4 display-6">Get Your UK Driver's License Easily Online</h1>
                    <p>At Brilliant Driving School, we offer a unique and streamlined process to help you obtain your UK driver's license without the need for a traditional driving test. Our online process is designed to be simple, efficient, and stress-free.</p>
                    <p class="mb-4">With our innovative approach, you can secure your driver's license through an easy online application. Our team is dedicated to providing you with all the necessary resources and support to ensure a smooth experience from start to finish. Join us and take the hassle out of getting your UK driver's license.</p>
                    <div class="pb-2 mb-4 row g-2">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Fully Accredited
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Flexible Scheduling
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Affordable Packages
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Expert Trainers
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="px-5 py-3 btn btn-primary" href="{{route('contact')}}">Learn More</a>
                        </div>
                        <div class="col-sm-6">
                            <a class="p-2 border-2 d-inline-flex align-items-center btn btn-outline-primary" href="tel:+447943883854">
                                <span class="flex-shrink-0 btn-square bg-primary">
                                    <i class="text-white fa fa-phone-alt"></i>
                                </span>
                                <span class="px-3">+44 7943883854</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- About End -->
@endsection
