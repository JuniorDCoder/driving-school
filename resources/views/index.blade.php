@extends('app')
@section('title', "Home")
@section('content')
<!-- Carousel Start -->
<div class="p-0 container-fluid wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="mb-5 display-2 text-light animated slideInDown">Master Your Driving Skills with Our Expert Instructors</h1>
                                    <a href="{{route('about')}}" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="{{route('licenses')}}" class="btn btn-light py-sm-3 px-sm-5 ms-3">Get Your License</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="mb-5 display-2 text-light animated slideInDown">Your Journey to Safe Driving Starts Here</h1>
                                    <a href="{{route('about')}}" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="{{route('licenses')}}" class="btn btn-light py-sm-3 px-sm-5 ms-3">Get Your License</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</div>
<!-- Carousel End -->

<!-- Facts Start -->
<div class="py-5 container-fluid facts pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-4 bg-white shadow d-flex align-items-center h-100" style="min-height: 150px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="text-white fa fa-car"></i>
                        </div>
                        <div class="ps-4">
                            <h5>Comprehensive Driving Tests</h5>
                            <span>Our driving tests are designed to evaluate your skills thoroughly and ensure you are road-ready.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="p-4 bg-white shadow d-flex align-items-center h-100" style="min-height: 150px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="text-white fa fa-users"></i>
                        </div>
                        <div class="ps-4">
                            <h5>Expert Instructors</h5>
                            <span>Learn from certified instructors who provide professional guidance and support.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-4 bg-white shadow d-flex align-items-center h-100" style="min-height: 150px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="text-white fa fa-file-alt"></i>
                        </div>
                        <div class="ps-4">
                            <h5>Obtain Your License</h5>
                            <span>Our streamlined process helps you obtain your driving license efficiently and effectively.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


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
                    <h1 class="mb-4 display-6">Helping You Pass Your Test & Obtain Your License on the First Try</h1>
                    <p>Our driving school is dedicated to providing comprehensive driving tests and professional instruction to ensure you are fully prepared for the road. We focus on delivering high-quality training that helps you pass your test and obtain your license efficiently.</p>
                    <p class="mb-4">With our experienced instructors and structured lessons, we aim to make the process of getting your driving license smooth and stress-free. Join us and take the first step towards becoming a confident and responsible driver.</p>
                    <div class="pb-2 mb-4 row g-2">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Online Tracking
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Affordable Fees
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Best Trainers
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="px-5 py-3 btn btn-primary"  href="https://wa.me/447943883854" target="_blank">Know More</a>
                        </div>
                        <div class="col-sm-6">
                            <a class="p-2 border-2 d-inline-flex align-items-center btn btn-outline-primary"  href="https://wa.me/447943883854" target="_blank">
                                <span class="flex-shrink-0 btn-square bg-primary">
                                    <i class="text-white fa fa-phone-alt"></i>
                                </span>
                                <span class="px-3">+447943883854</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Licenses Start -->
<div class="py-6 pb-0 my-6 container-xxl licenses">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="mb-2 text-primary text-uppercase">Available Licenses</h6>
            <h1 class="mb-4 display-6">Get Your Driving License with Our Professional Tests</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
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
                        <div class="licenses-overlay">
                            <a class="border-2 btn btn-outline-primary" href="{{route('appointment')}}">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="p-4 pt-0 text-center">
                        <div class="px-4 py-1 mb-4 text-white d-inline-block bg-primary fs-5">€200</div>
                        <h5 class="mb-3">Full Driving License Test</h5>
                        <p>Complete test to obtain your full driving license.</p>
                        <ol class="mb-0 breadcrumb justify-content-center">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Intermediate</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>2 Weeks</li>
                        </ol>
                    </div>
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/courses-2.jpg" alt="">
                        <div class="licenses-overlay">
                            <a class="border-2 btn btn-outline-primary" href="{{route('appointment')}}">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="p-4 pt-0 text-center">
                        <div class="px-4 py-1 mb-4 text-white d-inline-block bg-primary fs-5">€150</div>
                        <h5 class="mb-3">Motorcycle License Test</h5>
                        <p>Specialized test to obtain your motorcycle driving license.</p>
                        <ol class="mb-0 breadcrumb justify-content-center">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Advanced</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>1.5 Weeks</li>
                        </ol>
                    </div>
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/courses-3.jpg" alt="">
                        <div class="licenses-overlay">
                            <a class="border-2 btn btn-outline-primary" href="{{route('appointment')}}">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-6 mb-0 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-5 text-center bg-primary">
                    <h1 class="mb-4">Make Appointment</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="border-0 form-control" id="gname" placeholder="Guardian Name">
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="border-0 form-control" id="gmail" placeholder="Guardian Email">
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="border-0 form-control" id="cname" placeholder="Course Type">
                                    <label for="cname">License Type</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="border-0 form-control" id="cage" placeholder="Car Type">
                                    <label for="cage">Vehicle Type</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="border-0 form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="py-3 btn btn-dark w-100" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Licenses End -->

<!-- Proof of Licenses Start -->
<div class="py-6 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="mb-2 text-primary text-uppercase">Proof of Licenses</h6>
            <h1 class="mb-4 display-6">Licenses Obtained by Our Students</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/licenses/1.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/licenses/2.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/licenses/3.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/licenses/4.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/licenses/5.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="img/licenses/6.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <video class="img-fluid" controls>
                            <source src="video/1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <video class="img-fluid" controls>
                            <source src="video/2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <video class="img-fluid" controls>
                            <source src="video/3.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Proof of Licenses End -->


<!-- Features Start -->
<div class="py-6 container-xxl">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="mb-2 text-primary text-uppercase">Why Choose Us!</h6>
                <h1 class="mb-4 display-6">Premier Driving Training Agency in Your City</h1>
                <p class="mb-5">Our driving school offers top-notch training programs designed to help you pass your driving tests and obtain your license with ease. We provide personalized instruction, flexible scheduling, and a supportive learning environment.</p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="mb-3 d-flex align-items-center">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="text-white fa fa-check"></i>
                            </div>
                            <h5 class="mb-0">Fully Licensed</h5>
                        </div>
                        <span>Our school is fully licensed and accredited to provide driving instruction.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="mb-3 d-flex align-items-center">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="text-white fa fa-check"></i>
                            </div>
                            <h5 class="mb-0">Online Tracking</h5>
                        </div>
                        <span>Track your progress and schedule lessons online with ease.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="mb-3 d-flex align-items-center">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="text-white fa fa-check"></i>
                            </div>
                            <h5 class="mb-0">Affordable Fees</h5>
                        </div>
                        <span>We offer competitive pricing and flexible payment options.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="mb-3 d-flex align-items-center">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="text-white fa fa-check"></i>
                            </div>
                            <h5 class="mb-0">Best Trainers</h5>
                        </div>
                        <span>Learn from experienced and certified driving instructors.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="pt-5 overflow-hidden position-relative pe-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                    <img class="top-0 pb-3 bg-white position-absolute end-0 ps-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


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