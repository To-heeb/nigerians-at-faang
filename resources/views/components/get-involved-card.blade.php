@props(['name', 'description', 'cta_text', 'cta_route', 'under_text'])

<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
    <div class="pricing-item">
        <h3>{{ $name }}</h3>
        <p class="description">
            {{ $description }}
        </p>
        {{-- <h4><sup>$</sup>0<span> / month</span></h4> --}}
        <a href="{{ $cta_route }}" class="cta-btn">{{ $cta_text }}</a>
        <p class="text-center small">{{ $under_text }}</p>
    </div>
</div>
