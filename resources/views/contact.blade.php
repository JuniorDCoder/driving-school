@extends('app')
@section('title', "Contact")

@section('styles')
<style>
    body{
        overflow-x: hidden;
    }
</style>
@endsection

@section('content')
<!-- Page Header Start -->
<div class="py-6 my-6 mt-0 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="mb-4 text-white display-4 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="mb-0 breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="py-6 container-xxl">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                <div class="position-relative h-100">
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2475.2432426112805!2d-3.8828931238755873!3d51.65538272184735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e5faec686235d%3A0x93f2a6354cd69223!2sBryn%20Celyn%2C%20Llansamlet%2C%20Swansea%20SA7%209SG%2C%20UK!5e0!3m2!1sen!2scm!4v1732282676545!5m2!1sen!2scm" width="550" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    <iframe class="position-relative w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2475.2432426112805!2d-3.8828931238755873!3d51.65538272184735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e5faec686235d%3A0x93f2a6354cd69223!2sBryn%20Celyn%2C%20Llansamlet%2C%20Swansea%20SA7%209SG%2C%20UK!5e0!3m2!1sen!2scm!4v1732282676545!5m2!1sen!2scm"
                    frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h6 class="mb-2 text-primary text-uppercase">Contact Us</h6>
                <h1 class="mb-4 display-6">If You Have Any Query, Please Contact Us</h1>
                <p class="mb-4">We’d love to hear from you! Please fill out the contact form below to get in touch with us. Whether you have questions, feedback, or need assistance, our team is here to help. Your message matters to us, and we’ll get back to you as soon as possible.</p>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="border-0 form-control bg-light @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                <label for="name">Your Name</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="border-0 form-control bg-light @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                                <label for="email">Your Email</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="border-0 form-control bg-light @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                                <label for="subject">Subject</label>
                                @error('subject')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="border-0 form-control bg-light @error('message') is-invalid @enderror" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required>{{ old('message') }}</textarea>
                                <label for="message">Message</label>
                                @error('message')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="px-5 py-3 btn btn-primary" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
