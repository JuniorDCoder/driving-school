<!-- Conversations & Delivery Proof Start -->
<div class="py-6 container-xxl conversations-section">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 560px;">
            <h6 class="mb-2 text-primary text-uppercase">Real Conversations, Real Deliveries</h6>
            <h1 class="mb-4 display-6">See Our Work Speak For Itself</h1>
            <p class="mb-0 text-muted">Genuine client chats and hand-off videos from recent orders &mdash; because trust is earned, not just promised.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="conversation-card position-relative overflow-hidden bg-white shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#conversationLightbox" data-src="{{ asset('conversations-and-delivery/client-conversation-1.jpeg') }}" data-type="image">
                    <img class="img-fluid w-100" src="{{ asset('conversations-and-delivery/client-conversation-1.jpeg') }}" alt="Client conversation screenshot" style="height: 280px; object-fit: cover;">
                    <div class="conversation-overlay">
                        <i class="fa fa-search-plus"></i>
                    </div>
                    <span class="conversation-badge"><i class="fa fa-comment-dots me-1"></i>Chat</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="conversation-card position-relative overflow-hidden bg-white shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#conversationLightbox" data-src="{{ asset('conversations-and-delivery/delivery-video-1.mp4') }}" data-type="video">
                    <video class="w-100" style="height: 280px; object-fit: cover;" muted preload="metadata">
                        <source src="{{ asset('conversations-and-delivery/delivery-video-1.mp4') }}#t=0.5" type="video/mp4">
                    </video>
                    <div class="conversation-overlay">
                        <i class="fa fa-play"></i>
                    </div>
                    <span class="conversation-badge"><i class="fa fa-video me-1"></i>Delivery</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="conversation-card position-relative overflow-hidden bg-white shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#conversationLightbox" data-src="{{ asset('conversations-and-delivery/client-conversation-2.jpeg') }}" data-type="image">
                    <img class="img-fluid w-100" src="{{ asset('conversations-and-delivery/client-conversation-2.jpeg') }}" alt="Client conversation screenshot" style="height: 280px; object-fit: cover;">
                    <div class="conversation-overlay">
                        <i class="fa fa-search-plus"></i>
                    </div>
                    <span class="conversation-badge"><i class="fa fa-comment-dots me-1"></i>Chat</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="conversation-card position-relative overflow-hidden bg-white shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#conversationLightbox" data-src="{{ asset('conversations-and-delivery/delivery-video-2.mp4') }}" data-type="video">
                    <video class="w-100" style="height: 280px; object-fit: cover;" muted preload="metadata">
                        <source src="{{ asset('conversations-and-delivery/delivery-video-2.mp4') }}#t=0.5" type="video/mp4">
                    </video>
                    <div class="conversation-overlay">
                        <i class="fa fa-play"></i>
                    </div>
                    <span class="conversation-badge"><i class="fa fa-video me-1"></i>Delivery</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="conversation-card position-relative overflow-hidden bg-white shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#conversationLightbox" data-src="{{ asset('conversations-and-delivery/client-conversation-3.jpeg') }}" data-type="image">
                    <img class="img-fluid w-100" src="{{ asset('conversations-and-delivery/client-conversation-3.jpeg') }}" alt="Client conversation screenshot" style="height: 280px; object-fit: cover;">
                    <div class="conversation-overlay">
                        <i class="fa fa-search-plus"></i>
                    </div>
                    <span class="conversation-badge"><i class="fa fa-comment-dots me-1"></i>Chat</span>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center wow fadeInUp" data-wow-delay="0.1s">
            <a href="{{ route('conversations') }}" class="px-5 py-3 btn btn-primary">
                View All Conversations &amp; Deliveries <i class="fa fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</div>

<!-- Shared lightbox modal used to enlarge a clicked photo or video -->
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
<!-- Conversations & Delivery Proof End -->
