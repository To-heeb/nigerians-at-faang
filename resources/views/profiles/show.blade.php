<x-app-layout>

    <x-slot:title>
        {{ $profile->name }}
    </x-slot>

    <x-slot:type>
        profile
    </x-slot>

    <!-- Page Title -->
    <x-header-banner-two page="{{ $profile->name }}" above_page="Profiles"
        above_page_route="{{ route('profiles.index') }}" />
    <!-- End Page Title -->

    <section id="profile" class="profile section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Company Header -->
                    <div class="profile-header">
                        <div class="d-flex align-items-center">
                            <div class="profile-img me-3">
                                <img src="{{ $profile->image ? cdn_image('storage/profile/' . $profile->image) : cdn_image('storage/profile/avatar-head-profile.webp') }}"
                                    width="100px" height="100px" alt="{{ $profile->image }}'s image"
                                    class="border border-success-subtle rounded-circle img-fluid">
                            </div>
                            <div>
                                <h1 class="h2 mb-0">{{ $profile->name }} </h1>
                                <span class="">{{ $profile->job_title }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- About Section -->
                    <div>
                        <h3 class="h4 mb-3">About</h3>
                        <div class="bg-light p-4 mb-3 rounded">
                            <div class="row mb-2">
                                <p class="text-muted mb-3">{!! str($profile->short_bio)->markdown() !!}</p>
                                <p>
                                    <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-outline-success">I want
                                        to tell my story</a>
                                </p>
                            </div>
                            <div class="row row-cols-2 row-cols-sm-2 row-cols-lg-3 gx-1 mb-2">
                                <div class="col mt-2" style="">
                                    <div>
                                        {{-- TODO(toheeb): tooltip the links --}}
                                        <div class="text-muted">Connect via</div>
                                        <strong>
                                            @if ($profile->website_url)
                                                <a href="{{ $profile->website_url }}" target="_blank"><i
                                                        class="bi bi-globe me-1"></i></a>
                                            @endif
                                            @if ($profile->twitter_url)
                                                <a href="{{ $profile->twitter_url }}" target="_blank"><i
                                                        class="bi bi-twitter-x me-1"></i></a>
                                            @endif
                                            @if ($profile->linkedin_url)
                                                <a href="{{ $profile->linkedin_url }}" target="_blank"><i
                                                        class="bi bi-linkedin me-1"></i></a>
                                            @endif
                                            @if ($profile->instagram_url)
                                                <a href="{{ $profile->instagram_url }}" target="_blank"><i
                                                        class="bi bi-instagram me-1"></i></a>
                                            @endif
                                            @if ($profile->tiktok_url)
                                                <a href="{{ $profile->tiktok_url }}" target="_blank"><i
                                                        class="bi bi-tiktok me-1"></i></a>
                                            @endif
                                        </strong>
                                    </div>
                                </div>
                                <div class="col mt-2">
                                    <div>
                                        <strong><a href="{{ route('companies.show', $profile->company) }}"
                                                rel="noopener noreferrer">{{ $profile->company->name }}</a></strong>
                                        <div class="text-muted">Company</div>
                                    </div>
                                </div>
                                <div class="col mt-2">
                                    <div>
                                        {{-- {{ $company->career_page_url }} --}}
                                        <div class="text-muted">Inspire Others by sharing <i
                                                class="bi bi-box-arrow-up-right"></i></div>
                                        <strong>
                                            <a href="{{ share_link('twitter', request()->fullUrl(), "Check out $profile->name and other Nigerians @ " . $profile->company->name . ' .') }}"
                                                target="_blank"><i class="bi bi-twitter-x me-1"></i></a>
                                            <a href="{{ share_link('linkedin', request()->fullUrl(), "Check out $profile->name and other Nigerians @ " . $profile->company->name . ' .') }}"
                                                target="_blank"><i class="bi bi-linkedin me-1"></i></a>
                                            <a href="{{ share_link('facebook', request()->fullUrl(), "Check out $profile->name and other Nigerians @ " . $profile->company->name . ' .') }}"
                                                target="_blank"><i class="bi bi-facebook me-1"></i></a>
                                            <a href="{{ share_link(
                                                'whatsapp',
                                                request()->fullUrl(),
                                                "Check $profile->name  and other Nigeria @ " . $profile->company->name . ' .',
                                            ) .
                                                ' on ' .
                                                request()->fullUrl() }} "
                                                target="_blank"><i class="bi bi-whatsapp me-1"></i></a>
                                        </strong>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h3 class="h4 mb-3">Blogs</h3>
                            <div class="bg-light p-4 mb-3 rounded">
                                <div class="row">
                                    @forelse ($profile->blogs as $blog)
                                        <div class="card w-100 mb-3">
                                            <div class="card-body">
                                                <h6 class="card-title"><a
                                                        href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a>
                                                </h6>
                                                <p class="card-text">{!! str($blog->body)->limit(100) !!}</p>
                                                <a href="#" class="readmore stretched-link"><span>Read
                                                        More</span><i class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col">
                                            <b>No blog from {{ $profile->name }} yet</b>
                                        </div>
                                    @endforelse
                                </div>

                                @if (!empty($profile->blogs) && $profile->blogs->isNotEmpty())
                                    <div class="row mt-3">
                                        <div class="col-12 d-flex justify-content-center">
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('blogs.index', ['q' => $profile->name]) }}"
                                                role="button">View All Blogs from {{ $profile->name }}</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="share-section mt-5">
                        <h3 class="h4 mb-3">Share On</h3>
                        <p class="text-muted mb-4">
                            Spread the word about {{ $profile->name }} on your favorite social
                            platforms.
                        </p>

                        <div class="row text-center g-3">
                            <div class="col-6 col-md-3">
                                <a href="{{ share_link('twitter', request()->fullUrl(), "Check out $profile->name and other Nigerians @ " . $profile->company->name . ' .') }}"
                                    target="_blank" class="btn btn-outline-twitter w-100">
                                    <i class="bi-twitter-x"></i> Twitter
                                </a>
                            </div>

                            <div class="col-6 col-md-3">
                                <a href="{{ share_link('facebook', request()->fullUrl(), "Check out $profile->name and other Nigerians @ " . $profile->company->name . ' .') }}"
                                    target="_blank" class="btn btn-outline-facebook w-100">
                                    <i class="bi bi-facebook"></i> Facebook
                                </a>
                            </div>

                            <div class="col-6 col-md-3">
                                <a href="{{ share_link('linkedin', request()->fullUrl(), "Check out $profile->name and other Nigerians @ " . $profile->company->name . ' .') }}"
                                    target="_blank" class="btn btn-outline-linkedin w-100">
                                    <i class="bi bi-linkedin"></i> LinkedIn
                                </a>
                            </div>

                            <div class="col-6 col-md-3">
                                <a href="{{ share_link(
                                    'whatsapp',
                                    request()->fullUrl(),
                                    "Check $profile->name  and other Nigeria @ " . $profile->company->name . ' .',
                                ) .
                                    ' on ' .
                                    request()->fullUrl() }} "
                                    target="_blank" class="btn btn-outline-whatsapp w-100">
                                    <i class="bi bi-whatsapp"></i> Whatsapp
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Other Nigerians @ {{ $profile->company->name }}</h5>
                        </div>
                        <div class="card-body">
                            @forelse($otherProfiles as $otherProfile)
                                <div class="row mb-2">
                                    <x-featured-profile-card :profile="$otherProfile" :delay="$loop->index % 100" />
                                </div>
                            @empty
                                <p class="text-muted">No related profile from {{ $profile->company->name }} found.</p>
                            @endforelse

                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <a class="btn btn-success btn-sm"
                                        href="{{ route('profiles.index', ['q' => $profile->company->name]) }}"
                                        role="button">View All Profiles from {{ $profile->company->name }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
