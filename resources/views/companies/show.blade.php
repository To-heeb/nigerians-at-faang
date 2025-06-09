<x-app-layout>

    <x-slot:title>
        {{ $company->name }}
    </x-slot>

    <!-- Page Title -->
    <x-header-banner-two page="{{ $company->name }}" above_page="Companies"
        above_page_route="{{ route('companies.index') }}" />
    <!-- End Page Title -->

    <section id="company-profile" class="company-profile section py-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Company Header -->
                    <div class="company-header">
                        <div class="d-flex align-items-center">
                            <div class="company-logo me-3">
                                <img src="{{ asset('storage/company/' . $company->mini_logo) }}"
                                    alt="{{ $company->name }}'s logo" width="55px" height="55px"
                                    class="border border-success-subtle">
                            </div>
                            <div>
                                <h1 class="h2">{{ $company->name }}</h1>
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
                    <!-- Top Insights Section -->
                    {{-- <div class="insights-section">
                        <h3 class="h4 mb-3">Top Insights</h3>
                        <p class="text-muted mb-4">
                            Contribute something unique about Databricks that may be helpful for others (ex. interview
                            tips,
                            choosing teams, unique culture, etc).
                        </p>

                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Add Insight">
                            </div>
                            <div class="col-md-4 mt-2 mt-md-0">
                                <button class="btn btn-primary w-100">Submit</button>
                            </div>
                        </div>
                    </div> --}}

                    <!-- About Section -->
                    <div>
                        <h3 class="h4 mb-3">About</h3>
                        <div class="bg-light p-4 mb-3 rounded">
                            {{-- <p class="text-muted mb-0">No company description available yet.</p> --}}
                            <div class="row">
                                <p class="text-muted mb-3">{{ $company->name }}</p>
                            </div>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gx-1">
                                <div class="col" style="border: 1px solid red;">
                                    <div class="p-3">Row column</div>
                                </div>
                                <div class="col" style="border: 1px solid red;">
                                    <div class="p-3">Row column</div>
                                </div>
                                <div class="col" style="border: 1px solid red;">
                                    <div class="p-3">Row column</div>
                                </div>
                                <div class="col" style="border: 1px solid red;">
                                    <div class="p-3">Row column</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3 class="h4 mb-3 mt-2">Featured Nigerians</h3>
                        <div class="bg-light p-4 mb-3 rounded">
                            <div class="row row-cols-md-1 row-cols-lg-2 gx-3 gy-3">
                                @forelse ($companyProfiles as $profile)
                                    <div class="col" style="">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <p class="card-text d-flex align-items-center">
                                                    <img src="{{ $profile->image ? asset('storage/profile/' . $profile->image) : asset('storage/profile/avatar-head-profile.webp') }}"
                                                        class="rounded-circle img-fluid border border-success-subtle me-3"
                                                        width="50px" height="50px"
                                                        alt="{{ $profile->name }}'s image">
                                                    <span>
                                                        <strong><a href="{{ route('profiles.show', $profile) }}">
                                                                {{ $profile->name }} </a>
                                                        </strong><br />
                                                        <small>{{ $profile->job_title }}</small>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col">
                                        <b>No featured profile for {{ $company->name }} yet</b>
                                    </div>
                                @endforelse
                            </div>

                            @if (!empty($companyProfiles) && $companyProfiles->isNotEmpty())
                                <div class="row mt-3">
                                    <div class="col-12 d-flex justify-content-center">
                                        <a class="btn btn-success btn-sm"
                                            href="{{ route('profiles.index', ['q' => $company->name]) }}"
                                            role="button">View All Profiles from {{ $company->name }}</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3 class="h4 mb-3">Career Insights & Success Stories</h3>
                        <div class="bg-light p-4 mb-3 rounded">
                            <div class="row">
                                @forelse ($companyBlogs as $blog)
                                    <div class="card w-100 mb-3">
                                        <div class="card-body">
                                            <h6 class="card-title"><a
                                                    href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a>
                                            </h6>
                                            <p class="card-text">{!! str($blog->body)->limit(100) !!}</p>
                                            <a href="#" class="readmore stretched-link"><span>Read More</span><i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col">
                                        <b>No blog for {{ $company->name }} yet</b>
                                    </div>
                                @endforelse
                            </div>

                            @if (!empty($companyBlogs) && $companyBlogs->isNotEmpty())
                                <div class="row mt-3">
                                    <div class="col-12 d-flex justify-content-center">
                                        <a class="btn btn-success btn-sm"
                                            href="{{ route('blogs.index', ['q' => $company->name]) }}"
                                            role="button">View All Blogs from {{ $company->name }}</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Related Companies</h5>
                        </div>
                        <div class="card-body">
                            @forelse($relatedCompanies as $relatedCompany)
                                <div class="row mb-2">
                                    <x-company-card-two :company="$relatedCompany" :delay="$loop->index % 100" />
                                </div>
                            @empty
                                <p class="text-muted">No related company found.</p>
                            @endforelse

                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <a class="btn btn-success btn-sm" href="{{ route('companies.index') }}"
                                        role="button">View All
                                        Companies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-app-layout>
