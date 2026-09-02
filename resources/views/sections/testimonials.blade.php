@php
    $testimonials = [
        ['quote' => 'The booking process was straightforward and the team explained each step clearly.', 'label' => 'Isla Jenkins'],
        ['quote' => 'I appreciated the practical guidance and quick answers when I had questions.', 'label' => 'Arthur Hughes'],
        ['quote' => 'The support team helped me understand what I needed before arranging my lessons.', 'label' => 'Freya Davies'],
        ['quote' => 'Clear communication made it much easier to plan my next step with confidence.', 'label' => 'George Taylor'],
        ['quote' => 'The online enquiry process was simple and I received a helpful response promptly.', 'label' => 'Lily Evans'],
        ['quote' => 'I found the information easy to follow and the team was patient throughout.', 'label' => 'Harry Clark'],
        ['quote' => 'The team listened to what I needed and gave me useful, practical guidance.', 'label' => 'Florence Walker'],
        ['quote' => 'A professional and friendly service that made the initial enquiry feel easy.', 'label' => 'Oscar Wright'],
        ['quote' => 'The follow-up was clear and helped me decide which option suited me best.', 'label' => 'Mia Roberts'],
        ['quote' => 'Everything was explained in plain language, which made the process less stressful.', 'label' => 'Recent learner'],
    ];

    $visibleTestimonials = array_slice($testimonials, 0, $limit ?? count($testimonials));
@endphp

<!-- Testimonial Start -->
<div class="py-6 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 560px;">
            <h6 class="mb-2 text-primary text-uppercase">Testimonials</h6>
            <h1 class="mb-4 display-6">What Our Clients Are Saying</h1>
            <p class="mb-0 small text-muted">Illustrative sample feedback for this demonstration site. Publish customer reviews only with permission.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($visibleTestimonials as $testimonial)
                        <div class="text-center testimonial-item">
                            <div class="mb-5 position-relative">
                                <img class="mx-auto img-fluid rounded-circle" src="{{ asset('new-assets/photo_2026-09-02_18-43-17.jpg') }}" alt="{{ $testimonial['label'] }}">
                                <div class="bg-white position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">&ldquo;{{ $testimonial['quote'] }}&rdquo;</p>
                            <hr class="mx-auto w-25">
                            <h5>{{ $testimonial['label'] }}</h5>
                            <span>Valuable feedback</span>
                        </div>
                    @endforeach
                </div>
                @if (($limit ?? count($testimonials)) < count($testimonials))
                    <div class="mt-4 text-center">
                        <a class="px-4 py-2 btn btn-outline-primary" href="{{ route('testimonials') }}">View all testimonials</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
