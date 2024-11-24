@extends('app')
@section('title', "Licenses")
@section('content')
<!-- Page Header Start -->
<div class="py-6 my-6 mt-0 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="mb-4 text-white display-4 animated slideInDown">License</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="mb-0 breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">License</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Courses Start -->
<div class="py-6 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="mb-2 text-primary text-uppercase">Tranding Courses</h6>
            <h1 class="mb-4 display-6">Our Courses Upskill You With Driving Training</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden courses-item d-flex flex-column bg-light h-100">
                    <div class="p-4 pt-0 text-center">
                        <div class="px-4 py-1 mb-4 text-white d-inline-block bg-primary fs-5">€120</div>
                        <h5 class="mb-3">Provisional License Test</h5>
                        <p>Comprehensive test to obtain your provisional driving license.</p>
                        <ol class="mb-0 breadcrumb justify-content-center">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>1 Week</li>
                        </ol>
                    </div>
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/courses-1.jpg" alt="">
                        <div class="courses-overlay">
                            <a class="border-2 btn btn-outline-primary" href="{{route('appointment')}}">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden courses-item d-flex flex-column bg-light h-100">
                    <div class="p-4 pt-0 text-center">
                        <div class="px-4 py-1 mb-4 text-white d-inline-block bg-primary fs-5">$200</div>
                        <h5 class="mb-3">Full Driving License Test</h5>
                        <p>Complete test to obtain your full driving license.</p>
                        <ol class="mb-0 breadcrumb justify-content-center">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Intermediate</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Weeks</li>
                        </ol>
                    </div>
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/courses-2.jpg" alt="">
                        <div class="courses-overlay">
                            <a class="border-2 btn btn-outline-primary" href="{{route('appointment')}}">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden courses-item d-flex flex-column bg-light h-100">
                    <div class="p-4 pt-0 text-center">
                        <div class="px-4 py-1 mb-4 text-white d-inline-block bg-primary fs-5">€150</div>
                        <h5 class="mb-3">Motorcycle License Test</h5>
                        <p>Specialized test to obtain your motorcycle driving license.</p>
                        <ol class="mb-0 breadcrumb justify-content-center">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Advance</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>1.5 Weeks</li>
                        </ol>
                    </div>
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/courses-3.jpg" alt="">
                        <div class="courses-overlay">
                            <a class="border-2 btn btn-outline-primary" href="{{route('appointment')}}">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->
@endsection
