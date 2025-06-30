<x-app-layout>

    <x-slot:title>
        About Us
    </x-slot>

    <!-- Page Title -->
    <x-header-banner page="About" />
    <!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row position-relative">

                <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img
                        src="{{ asset('assets/img/hero-carousel/hero-carousel-16.jpg') }}">
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="inner-title">FAANG Dreams, Naija Roots</h2>
                    <div class="our-story">
                        <h4>Est 2025</h4>
                        <h3>Our Story</h3>
                        <p>Nigerians @ FAANG is a platform celebrating the journeys of Nigerians who’ve landed roles in
                            top tech companies. Whether they started in Lagos, London, or Toronto — their paths inspire
                            others.</p>
                        {{-- <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Expertise that delivers – Precision and skill
                                        in every solution we provide</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Your vision, our mission – Tailored approaches
                                        for your unique needs</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Reliable partnership – Consistency you can
                                        trust, results you can count on</span>
                                </li>
                            </ul> --}}
                        <p>As Nigerian <strong>obstacles don’t define us—they refine us.</strong> Every rejection, visa
                            hurdle, or
                            technical
                            interview setback has been a stepping stone for Nigerians in tech. We dissect challenges,
                            adapt strategies, and emerge stronger, turning barriers into blueprints for success.
                            Resilience isn’t just our trait; it’s our competitive edge.</p>

                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="{{ asset('assets/img/promo-video/promo-preview-video-1.mp4') }}"
                                class="glightbox stretched-link">Watch
                                Video</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

</x-app-layout>
