@extends('app')
@section('title', "Appointment")
@section('content')
<!-- Page Header Start -->
<div class="py-6 my-6 mt-0 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="mb-4 text-white display-4 animated slideInDown">Appointment</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="mb-0 breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Appointment Start -->
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
                <h6 class="mb-2 text-primary text-uppercase">Appointment</h6>
                <h1 class="mb-4 display-6">Make An Appointment To Pass Test & Get A License On The First Try</h1>
                <form>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="border-0 form-control bg-light" id="gname" placeholder="Gurdian Name">
                                <label for="gname">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="border-0 form-control bg-light" id="gmail" placeholder="Gurdian Email">
                                <label for="gmail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="border-0 form-control bg-light" id="cname" placeholder="Child Name">
                                <label for="cname">Courses Type</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="border-0 form-control bg-light" id="cage" placeholder="Child Age">
                                <label for="cage">Car Type</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="border-0 form-control bg-light" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="py-3 btn btn-primary w-100" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->

@endsection
