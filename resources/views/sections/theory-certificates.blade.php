@php
    $theoryCertificateCount = 8;
    $theoryPreviewLimit = $limit ?? $theoryCertificateCount;
@endphp

<!-- Theory Test Certificates Start -->
<div class="py-6 container-xxl theory-certificates-section">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 560px;">
            <h6 class="mb-2 text-primary text-uppercase">Proof of Success</h6>
            <h1 class="mb-4 display-6">Theory Test Certificates</h1>
            <p class="mb-0 text-muted">Genuine theory test certificates earned by our students &mdash; real results from real preparation.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @for ($i = 1; $i <= $theoryPreviewLimit; $i++)
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="{{ ($i % 3) * 0.2 + 0.1 }}s">
                    <div class="conversation-card position-relative overflow-hidden bg-white shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#theoryCertificateLightbox" data-src="{{ asset('theory-certificates/theory-certificate-' . $i . '.jpeg') }}">
                        <img class="img-fluid w-100" src="{{ asset('theory-certificates/theory-certificate-' . $i . '.jpeg') }}" alt="Theory test certificate {{ $i }}" style="height: 260px; object-fit: cover;">
                        <div class="conversation-overlay">
                            <i class="fa fa-search-plus"></i>
                        </div>
                        <span class="conversation-badge"><i class="fa fa-certificate me-1"></i>Certificate {{ $i }}</span>
                    </div>
                </div>
            @endfor
        </div>

        @if ($theoryPreviewLimit < $theoryCertificateCount)
            <div class="mt-5 text-center wow fadeInUp" data-wow-delay="0.1s">
                <a href="{{ route('licenses') }}" class="px-5 py-3 btn btn-primary">
                    View All Certificates <i class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>
        @endif
    </div>
</div>

<!-- Lightbox used only for theory certificates (separate id from the conversations gallery lightbox) -->
<div class="modal fade" id="theoryCertificateLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <button type="button" class="btn-close btn-close-white ms-auto me-2 mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0 text-center" id="theoryCertificateLightboxBody"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var lightbox = document.getElementById('theoryCertificateLightbox');
        if (!lightbox) return;
        var body = document.getElementById('theoryCertificateLightboxBody');
        lightbox.addEventListener('show.bs.modal', function (event) {
            var trigger = event.relatedTarget;
            if (!trigger) return;
            var src = trigger.getAttribute('data-src');
            body.innerHTML = '<img class="img-fluid" style="max-height: 80vh;" src="' + src + '" alt="Theory test certificate">';
        });
        lightbox.addEventListener('hidden.bs.modal', function () {
            body.innerHTML = '';
        });
    });
</script>
<!-- Theory Test Certificates End -->
