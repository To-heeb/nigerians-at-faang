<x-app-layout>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-8.jpg') }}" alt="">
                <div class="container">
                    <h2>Nigerians @ FAANG</h2>
                    <p>A tribute to every Nigerian rewriting the global tech story—one line of code at a time.</p>
                    <a href="{{ route('profiles.index') }}" class="btn-get-started">Explore Profiles</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-7.jpg') }}" alt="">
                <div class="container">
                    <h2>Spotlighting Nigerian Excellence in Big Tech</h2>
                    <p>Real stories from Nigerians who’ve made it to FAANG and beyond.</p>
                    <a href="{{ route('profiles.create') }}" class="btn-get-started">Submit a profile</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-6.jpg') }}" alt="">
                <div class="container">
                    <h2>Nigerians Breaking Barriers in Big Tech</h2>
                    <p>Discover career journeys, interview tips, and actionable advice from Nigerians at Google, Meta,
                        Amazon, and more.</p>
                    <a href="{{ route('profiles.index') }}" class="btn-get-started">Explore Profiles</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-5.jpg') }}" alt="">
                <div class="container">
                    <h2>Nigerian Brilliance in the Heart of Tech</h2>
                    <p>Meet the Nigerians shaping innovation at Google, Apple, Meta, Amazon, Netflix & beyond.</p>
                    <a href="{{ route('profiles.index') }}" class="btn-get-started">Explore Profiles</a>
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
    <section id="team" class="team section-home profile-section mt-2">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Profile</h2>
            <p>Recently Featured Nigerians at FAANG</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                @foreach ($profiles as $profile)
                    <x-profile-card :profile="$profile" :delay="$loop->index * 100" />
                @endforeach
            </div>
        </div>

        <div class="container section-title" data-aos="fade-up">
            <a href="{{ route('profiles.index') }}" class="btn btn-sm btn-outline-success mt-4">View All Profiles</a>
        </div>
    </section>
    <!-- /Profile Section -->

    <!-- Blog Section -->
    <section id="blog-posts" class="blog-posts section-home">
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
                        <x-blog-card :blog="$blog" :delay="$loop->index * 100" />
                    @endforeach
                </div>
            </div>

            <div class="container section-title" data-aos="fade-up">
                <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-outline-success mt-4">View Blogs</a>
            </div>
        </div>
    </section>
    <!-- /Blog Section -->

    <!-- Get Involved Section -->
    <section id="pricing" class="pricing section-home">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Get Involved</h2>
            <p>Let’s Spotlight More Nigerians</p>
        </div>
        <!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <x-get-involved-card name="Submit a Story"
                    description="Are you a Nigerian making waves in Big Tech? Share your journey and help inspire others who want to walk a similar path."
                    cta_text="Share Your Story" cta_route="{{ route('blogs.create') }}"
                    under_text="Your story could be the spark someone needs." id="submit-a-story" />
                <x-get-involved-card name="Nominate Someone"
                    description="Know a brilliant Nigerian working at FAANG or other Big Tech? Nominate them to be featured and recognized."
                    cta_text="Submit Now" cta_route="{{ route('profiles.create') }}"
                    under_text="We verify all nominations before publishing." id="nominate-someone" />
                <x-get-involved-card name="Join the Community"
                    description="Be part of a growing network of Nigerians in tech. Connect, learn, and grow with others like you."
                    cta_text="Join Us" cta_route="{{ route('profiles.create') }}"
                    under_text="We’re building something powerful — together." id="join-the-community" />
            </div>
        </div>
    </section>
    <!-- /Get Involved Section -->

    <!-- FAQ Section -->
    <section id="faq" class="faq section-home mb-5">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>FAQ</h2>
            <p>Frequently Asked Questions</p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is Nigerians @ FAANG?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Nigerians @ FAANG</strong> is a community-powered platform
                            that highlights the journeys and achievements of Nigerians who are working or have worked at
                            top global tech companies — popularly known as <code>FAANG (Facebook, Amazon, Apple,
                                Netflix, Google) </code> and similar big tech organizations serving as inspiration for
                            current and aspiring tech professionals.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Who is this platform for?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong> This platform is for:</strong>
                            <ul>
                                <li>Aspiring Nigerian tech professionals looking for inspiration and guidance aiming for
                                    top global tech companies.</li>
                                <li>Nigerians currently working in Big Tech who want to give back by sharing their
                                    stories.</li>
                                <li> Recruiters, educators, and community leaders interested in discovering Nigerian
                                    tech talent.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Can I submit a story or nominate someone?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Yes! We encourage you to either:</strong>
                            <ul>
                                <li>
                                    <strong>Submit your own</strong> story if you've worked at a FAANG or similar tech
                                    company.
                                </li>
                                <li>
                                    <strong>Nominate someone</strong> whose story deserves to be featured. We review
                                    every submission to ensure it aligns with our mission.
                                </li>
                            </ul>
                            You can do this directly from the <a href="#pricing">“Submit a Story”</a> or <a
                                href="#pricing"> “Nominate”</a>
                            section on the homepage.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What kinds of stories are published?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>We feature stories that are:</strong>
                            <ul>
                                <li>Authentic and detailed</li>
                                <li>Inspirational and informative</li>
                                <li>Related to working in tech at a global level</li>
                                <li>Centered on the Nigerian experience — both local and in diaspora</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            What kinds of stories are published?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>We feature stories that are:</strong>
                            Yes. While <code>“FAANG”</code> is the theme, we welcome stories from Nigerians at other top
                            tech
                            companies like Microsoft, Twitter (X), Shopify, Salesforce, TikTok, Stripe, etc. If you're
                            doing amazing work in global tech, we want to hear about it.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Do I need to be a developer or engineer?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Not necessarily.</strong>We feature Nigerians across multiple tech roles including:
                            <ul>
                                <li>Software Engineering</li>
                                <li>Product Management</li>
                                <li>Growth Management</li>
                                <li>Data Science</li>
                                <li>UX/UI Design</li>
                                <li>Cybersecurity</li>
                                <li>Developer Advocacy</li>
                                <li>Technical Program Management, and more.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Are stories verified?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                <string>Yes.</string> All submissions go through a verification process. We check public
                                profiles (like LinkedIn), validate employment claims, and review the content before
                                publishing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Can I comment on stories?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                No for now. We are still working on this.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Is there a newsletter or email subscription?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Not necessarily.</strong>We feature Nigerians across multiple tech roles including:
                            <ul>
                                <li>Software Engineering</li>
                                <li>Product Management</li>
                                <li>Growth Management</li>
                                <li>Data Science</li>
                                <li>UX/UI Design</li>
                                <li>Cybersecurity</li>
                                <li>Developer Advocacy</li>
                                <li>Accounting</li>
                                <li>Technical Program Management, and more.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            Is there a newsletter or email subscription?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Coming soon!</strong>We're working on a monthly email that shares:
                            <ul>
                                <li>Newly published stories</li>
                                <li>Curated resources for Nigerian techies</li>
                                <li>Event highlights and interviews</li>
                            </ul>
                            You’ll be able to subscribe from the landing page soon.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            How can I support this platform?
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            You can support in any of the following ways:
                            <ul>
                                <li>Submit or share a story</li>
                                <li>Spread the word on social media</li>
                                <li>Collaborate with us on partnerships or sponsorships</li>
                                <li>Reach out if you'd like to volunteer or help build the platform</li>
                                <li>Buy Us a Coffee</li>
                            </ul>
                            You’ll be able to subscribe from the landing page soon.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ Section -->

</x-app-layout>
