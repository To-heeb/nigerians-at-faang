<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/logos/nigerians@faang-vertical.png') }}" alt="" class="rounded-1">
            <h1 class="sitename d-none d-md-inline">{{ config('app.name') }}<span>.</span></h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                {{-- <li><a href="{{ route('portfolios.index') }}">Portfolio</a></li> --}}
                <li><a href="{{ route('profiles.index') }}">Profiles</a></li>
                <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="{{ config('app.twitterUrl') }}" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="{{ config('app.tiktokUrl') }}" class="tiktok"><i class="bi bi-tiktok"></i></a>
            <a href="{{ config('app.instagramUrl') }}" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{ config('app.linkedInUrl') }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</header>
