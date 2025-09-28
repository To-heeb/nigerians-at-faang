@props(['services'])

<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <span class="sitename">
                        <img src="{{ cdn_image('assets/img/logos/nigerians@faang-vertical.png') }}" alt=""
                            class="rounded-1">
                        {{ config('app.name') }}
                    </span>
                </a>
                <p><i> FAANG Dreams, Naija Roots</i></p>
                <div class="footer-contact pt-3">
                    {{-- <p>A108 Adam Street</p> --}}
                    {{-- <p>{{ config('aiv.address') }}</p>
                    <p class="mt-3"><strong>Phone:</strong> <span><a href="tel:{{ config('aiv.support_number') }}">
                                {{ config('aiv.support_number') }} </a></span></p>
                    <p><strong>Email:</strong> <span><a
                                href="mailto:{{ config('aiv.support_mail') }}">{{ config('aiv.support_mail') }}</a></span>
                    </p>
                    <p><strong>Whatsapp:</strong> <span><a
                                href="https://wa.link/a7w9dk">https://wa.link/a7w9dk</a></span></p> --}}
                    <div class="social-links d-flex mt-4">
                        <a href="{{ config('app.twitterUrl') }}"><i class="bi bi-twitter-x"></i></a>
                        <a href="{{ config('app.tiktokUrl') }}"><i class="bi bi-tiktok"></i></a>
                        <a href="{{ config('app.instagramUrl') }}"><i class="bi bi-instagram"></i></a>
                        <a href="{{ config('app.linkedInUrl') }}"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('profiles.index') }}">Profiles</a></li>
                    <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('companies.index') }}">Companies</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                    <li><a href="{{ route('terms') }}">Terms of Use</a></li>
                    <li><a href="{{ route('privacy-policy') }}">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Subscribe to our newsletter and receive the latest update about profile and blog added!</p>
                <form action="{{ route('subscribers.store') }}"
                    data-recaptcha-site-key="{{ config('services.recaptcha.site_key') }}" method="post"
                    class="php-email-form" id="newsletter">
                    @csrf
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                            value="Join 🚀"></div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>©{{ date('Y') }} <strong class="px-1 sitename">{{ config('app.name') }}</strong>
            <span>All Rights Reserved</span>
        </p>
        <div class="credits">
        </div>
    </div>

</footer>

@push('page-script')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
@endpush
