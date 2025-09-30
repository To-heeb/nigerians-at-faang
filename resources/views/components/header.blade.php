<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ cdn_image('assets/img/logos/nigerians@faang-vertical.png') }}" alt="" class="rounded-1">
            <h1 class="sitename d-none d-md-inline">{{ config('app.name') }}<span>.</span></h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}"
                        class="{{ url()->current() === route('home') ? 'active' : '' }}">Home</a></li>
                {{-- <li><a href="{{ route('portfolios.index') }}">Portfolio</a></li> --}}
                <li><a href="{{ route('profiles.index') }}"
                        class="{{ url()->current() === route('profiles.index') ? 'active' : '' }}">Profiles</a></li>
                <li><a href="{{ route('blogs.index') }}"
                        class="{{ url()->current() === route('blogs.index') ? 'active' : '' }}">Blog</a></li>
                <li class="dropdown"><a href="{{ route('about') }}"
                        class="{{ in_array(url()->current(), [route('about'), route('companies.index'), route('tags.index')]) ? 'active' : '' }}"><span>About</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('companies.index') }}">Companies</a></li>
                        <li><a href="{{ route('tags.index') }}">Tags</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact.index') }}"
                        class="{{ url()->current() === route('contact.index') ? 'active' : '' }}">Contact Us</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            {{-- <a href="{{ config('app.tiktokUrl') }}" target="_blank" class="tiktok"><i class="bi bi-tiktok"></i></a>
            <a href="{{ config('app.instagramUrl') }}" target="_blank" class="instagram"><i
                    class="bi bi-instagram"></i></a> --}}
            <a href="{{ config('app.twitterUrl') }}" target="_blank" class="twitter"><i
                    class="bi bi-twitter-x"></i></a>
            <a href="{{ config('app.linkedInUrl') }}" target="_blank" class="linkedin"><i
                    class="bi bi-linkedin"></i></a>
            <a href="{{ config('app.githubUrl') }}" target="_blank" class="github"><i class="bi bi-github"></i></a>
            <a href="{{ config('app.naira_donation_link') }}" class="ml-1 btn btn-sm btn-outline-success">
                <span style="cursor: pointer; transition: color 0.3s ease;" onmouseover="this.style.color='white'"
                    onmouseout="this.style.color=''"><i class="bi bi-cup-hot"></i> Buy Me A
                    Coffee</span>
            </a>
            {{-- <button class="btn btn-outline-success btn-sm dropdown-toggle ml-2" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Buy Me A Coffee
            </button>
            <ul class="dropdown-menu">
                <li><a href="{{ config('app.naira_donation_link') }}" target="_blank" class="dropdown-item">In
                        Naira</a>
                </li>
                <li><a href="{{ config('app.dollar_donation_link') }}" target="_blank" class="dropdown-item">In
                        Dollar</a>
                </li>
            </ul>
        </div> --}}

        </div>
</header>
