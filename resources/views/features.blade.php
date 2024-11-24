@extends('app')
@section('title', "Features")
@section('content')
 <!-- Page Header Start -->
 <div class="py-6 my-6 mt-0 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="mb-4 text-white display-4 animated slideInDown">Features</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="mb-0 breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" >Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Features</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Features Start -->
<div class="py-6 container-xxl">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="mb-2 text-primary text-uppercase">Why Choose Us!</h6>
                <h1 class="mb-4 display-6">Top Driving Training Agency in Your Area</h1>
                <p class="mb-5">We are committed to helping you pass your driving test with ease and confidence. Our comprehensive training programs are designed to ensure success on the first attempt, offering both theory and practical lessons tailored to your needs.</p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="mb-3 d-flex align-items-center">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="text-white fa fa-check"></i>
                            </div>
                            <h5 class="mb-0">Fully Licensed</h5>
                        </div>
                        <span>We are certified by the UK's official driving authorities, ensuring trusted and professional services.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="mb-3 d-flex align-items-center">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="text-white fa fa-check"></i>
                            </div>
                            <h5 class="mb-0">Online Progress Tracking</h5>
                        </div>
                        <span>Track your learning progress and schedule lessons easily through our online portal.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="mb-3 d-flex align-items-center">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="text-white fa fa-check"></i>
                            </div>
                            <h5 class="mb-0">Affordable Fees</h5>
                        </div>
                        <span>We offer flexible pricing plans to suit your budget without compromising on quality.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="mb-3 d-flex align-items-center">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="text-white fa fa-check"></i>
                            </div>
                            <h5 class="mb-0">Experienced Trainers</h5>
                        </div>
                        <span>Learn from the best! Our trainers are highly qualified and experienced in helping students succeed.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="pt-5 overflow-hidden position-relative pe-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="Driving Training" style="object-fit: cover;">
                    <img class="top-0 pb-3 bg-white position-absolute end-0 ps-3" src="img/about-2.jpg" alt="Driving Lessons" style="width: 200px; height: 200px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

@endsection
