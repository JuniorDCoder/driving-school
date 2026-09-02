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
                        <img class="img-fluid" src="{{ asset('new-assets/photo_2026-09-02_18-42-41.jpg') }}" alt="Driving school learner documentation">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="{{ asset('new-assets/photo_2026-09-02_18-42-49.jpg') }}" alt="Driving school learner documentation">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="{{ asset('new-assets/photo_2026-09-02_18-42-53.jpg') }}" alt="Driving school learner documentation">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="{{ asset('new-assets/photo_2026-09-02_18-43-00.jpg') }}" alt="Driving school learner documentation">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="{{ asset('new-assets/photo_2026-09-02_18-43-04.jpg') }}" alt="Driving school learner documentation">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <img class="img-fluid" src="{{ asset('new-assets/photo_2026-09-02_18-43-14.jpg') }}" alt="Driving school learner documentation">
                    </div>
                </div>
            </div>
            @for ($licenseImage = 1; $licenseImage <= 6; $licenseImage++)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $licenseImage % 3 === 0 ? '0.5s' : ($licenseImage % 3 === 1 ? '0.1s' : '0.3s') }}">
                    <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                        <div class="mt-auto position-relative">
                            <img class="img-fluid" src="{{ asset('img/licenses/' . $licenseImage . '.jpeg') }}" alt="Student licence image {{ $licenseImage }}">
                        </div>
                    </div>
                </div>
            @endfor
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden bg-white licenses-item d-flex flex-column h-100">
                    <div class="mt-auto position-relative">
                        <video class="img-fluid" controls preload="metadata">
                            <source src="{{ asset('new-assets/video_2026-09-02_18-42-11.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Proof of Licenses End -->
