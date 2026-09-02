@extends('app')
@section('title', "Conversations & Delivery")
@section('content')

@php
    $conversationImages = collect(range(1, 9))->map(fn ($i) => "client-conversation-{$i}.jpeg");
    $deliveryVideos = collect(range(1, 12))->map(fn ($i) => "delivery-video-{$i}.mp4");
@endphp

<!-- Page Header Start -->
<div class="py-6 my-6 mt-0 container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="mb-4 text-white display-4 animated slideInDown">Conversations &amp; Delivery</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="mb-0 breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Conversations &amp; Delivery</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Intro Start -->
<div class="pt-6 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="mb-2 text-primary text-uppercase">Proof, Not Promises</h6>
            <h1 class="mb-4 display-6">Every Chat and Every Hand-Off, In One Place</h1>
            <p class="mb-0 text-muted">Below is a growing collection of genuine client conversations and delivery recordings from real orders we've completed. We keep adding to this page as new work is delivered, so you can always see the latest proof of what we do.</p>
        </div>
    </div>
</div>
<!-- Intro End -->

<!-- Conversations Gallery Start -->
<div class="py-6 container-xxl">
    <div class="container">
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="mb-2 text-primary text-uppercase"><i class="fa fa-comment-dots me-2"></i>Client Conversations</h6>
            <h2 class="mb-0 display-6">What Clients Are Actually Saying</h2>
        </div>
        <div class="row g-4">
            @foreach ($conversationImages as $index => $image)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index % 3) * 0.2 + 0.1 }}s">
                    <div class="conversation-card position-relative overflow-hidden bg-white shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#conversationLightbox" data-src="{{ asset('conversations-and-delivery/' . $image) }}" data-type="image">
                        <img class="img-fluid w-100" src="{{ asset('conversations-and-delivery/' . $image) }}" alt="Client conversation screenshot {{ $index + 1 }}" style="height: 320px; object-fit: cover;">
                        <div class="conversation-overlay">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <span class="conversation-badge"><i class="fa fa-comment-dots me-1"></i>Chat {{ $index + 1 }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Conversations Gallery End -->

<!-- Delivery Videos Start -->
<div class="py-6 container-xxl bg-light">
    <div class="container">
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="mb-2 text-primary text-uppercase"><i class="fa fa-video me-2"></i>Delivery Videos</h6>
            <h2 class="mb-0 display-6">Watch The Hand-Off Ourselves</h2>
        </div>
        <div class="row g-4">
            @foreach ($deliveryVideos as $index => $video)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index % 3) * 0.2 + 0.1 }}s">
                    <div class="conversation-card position-relative overflow-hidden bg-white shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#conversationLightbox" data-src="{{ asset('conversations-and-delivery/' . $video) }}" data-type="video">
                        <video class="w-100" style="height: 320px; object-fit: cover;" muted preload="metadata">
                            <source src="{{ asset('conversations-and-delivery/' . $video) }}#t=0.5" type="video/mp4">
                        </video>
                        <div class="conversation-overlay">
                            <i class="fa fa-play"></i>
                        </div>
                        <span class="conversation-badge"><i class="fa fa-video me-1"></i>Delivery {{ $index + 1 }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Delivery Videos End -->

<!-- Shared lightbox modal used to enlarge a clicked photo or play a video full-size -->
<div class="modal fade" id="conversationLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <button type="button" class="btn-close btn-close-white ms-auto me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0 text-center" id="conversationLightboxBody"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var lightbox = document.getElementById('conversationLightbox');
        if (!lightbox) return;
        var body = document.getElementById('conversationLightboxBody');
        lightbox.addEventListener('show.bs.modal', function (event) {
            var trigger = event.relatedTarget;
            if (!trigger) return;
            var src = trigger.getAttribute('data-src');
            var type = trigger.getAttribute('data-type');
            body.innerHTML = type === 'video'
                ? '<video class="w-100" style="max-height: 80vh;" controls autoplay><source src="' + src + '" type="video/mp4"></video>'
                : '<img class="img-fluid" style="max-height: 80vh;" src="' + src + '" alt="Conversation proof">';
        });
        lightbox.addEventListener('hidden.bs.modal', function () {
            body.innerHTML = '';
        });
    });
</script>

@endsection
