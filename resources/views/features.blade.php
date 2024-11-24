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
@include('sections.features')
<!-- Features End -->

@endsection
