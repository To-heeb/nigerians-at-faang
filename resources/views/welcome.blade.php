<x-app-layout>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-8.jpg') }}" alt="">
                <div class="container">
                    <h2>Nigerians @ FAANG</h2>
                    <p>A tribute to every Nigerian rewriting the global tech story—one line of code at a time.</p>
                    <a href="{{ route('about') }}" class="btn-get-started">Explore Profiles</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-7.jpg') }}" alt="">
                <div class="container">
                    <h2>Spotlighting Nigerian Excellence in Big Tech</h2>
                    <p>Real stories from Nigerians who’ve made it to FAANG and beyond.</p>
                    <a href="{{ route('about') }}" class="btn-get-started">Submit a profile</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-6.jpg') }}" alt="">
                <div class="container">
                    <h2>Nigerians Breaking Barriers in Big Tech</h2>
                    <p>Discover career journeys, interview tips, and actionable advice from Nigerians at Google, Meta,
                        Amazon, and more.</p>
                    <a href="{{ route('about') }}" class="btn-get-started">Explore Profiles</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-5.jpg') }}" alt="">
                <div class="container">
                    <h2>African Brilliance in the Heart of Tech</h2>
                    <p>Meet the Nigerians shaping innovation at Google, Apple, Meta, Amazon, Netflix & beyond.</p>
                    <a href="{{ route('about') }}" class="btn-get-started">Explore Profiles</a>
                </div>
            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>
    </section>
    <!-- /Hero Section -->


    <!-- Profile Section -->
    <section id="team" class="team section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Profile</h2>
            <p>Recently Featured Nigerians at FAANG</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                @foreach ($profiles as $profile)
                    <x-profile-card :profile="$profile" />
                @endforeach
            </div>
        </div>

        <div class="container section-title" data-aos="fade-up">
            <a href="{{ route('profiles.index') }}" class="btn btn-sm btn-outline-success">View All Profiles</a>
        </div>
    </section>
    <!-- /Profile Section -->

    <!-- Blog Section -->
    <section id="blog-posts" class="blog-posts section">
        <div class="container">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Blog</h2>
                <p>FAANG Insights & Stories</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @foreach ($blogs as $blog)
                        <x-blog-card :blog="$blog" />
                    @endforeach
                </div>
            </div>

            <div class="container section-title" data-aos="fade-up">
                <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-outline-success">View Blog</a>
            </div>
        </div>
    </section>
    <!-- /Blog Section -->


</x-app-layout>
