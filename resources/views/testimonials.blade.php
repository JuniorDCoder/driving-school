@extends('app')
@section('title', "Testimonials")
@section('content')
 <!-- Page Header Start -->
 <div class="py-6 my-6 mt-0 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="mb-4 text-white display-4 animated slideInDown">Testimonial</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="mb-0 breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Testimonial</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Testimonial Start -->
<div class="py-6 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="mb-2 text-primary text-uppercase">Testimonials</h6>
            <h1 class="mb-4 display-6">What Our Clients Are Saying</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="owl-carousel testimonial-carousel">
                    <div class="text-center testimonial-item">
                        <div class="mb-5 position-relative">
                            <img class="mx-auto img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="Client Testimonial">
                            <div class="bg-white position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4">"The team exceeded our expectations with their professionalism and expertise. Their attention to detail and commitment to delivering quality results truly impressed us."</p>
                        <hr class="mx-auto w-25">
                        <h5>John Doe</h5>
                        <span>CEO, ABC Corporation</span>
                    </div>
                    <div class="text-center testimonial-item">
                        <div class="mb-5 position-relative">
                            <img class="mx-auto img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="Client Testimonial">
                            <div class="bg-white position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4">"Working with this team has been an incredible experience. Their innovative solutions and dedication to our project were exceptional."</p>
                        <hr class="mx-auto w-25">
                        <h5>Jane Smith</h5>
                        <span>Project Manager, DEF Industries</span>
                    </div>
                    <div class="text-center testimonial-item">
                        <div class="mb-5 position-relative">
                            <img class="mx-auto img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="Client Testimonial">
                            <div class="bg-white position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4">"Their customer-focused approach and excellent communication made the entire process smooth and efficient. We highly recommend their services!"</p>
                        <hr class="mx-auto w-25">
                        <h5>Michael Lee</h5>
                        <span>Founder, GHI Startups</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection
