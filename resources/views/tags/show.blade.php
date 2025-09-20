<x-app-layout>

    <x-slot:title>
        {{ $tag->name }}
    </x-slot>

    <x-slot:description>
        Related to {{ $tag->name }} on {{ config('app.name') }}
    </x-slot>

    <x-slot:type>
        tag
    </x-slot>

    <!-- Page Title -->
    <x-header-banner-two page="#{{ $tag->name }}" above_page="Tags" above_page_route="{{ route('tags.index') }}" />
    <!-- End Page Title -->

    <section id="tag-profile" class="tag-profile section py-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Tag Header -->
                    <div class="tag-header">
                        <div class="d-flex align-items-center">
                            <div>
                                <h1 class="h2 border border-success-subtle">#{{ ucfirst($tag->name) }}</h1>
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
                    {{-- Profile --}}
                    <div>
                        <h3 class="h4 mb-3">Profiles</h3>
                        <div class="bg-light p-4 mb-3 rounded">
                            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 gx-3 gy-3">
                                @forelse ($tagProfiles as $profile)
                                    <div class="col" style="">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <p class="card-text d-flex align-items-center">
                                                    <img src="{{ $profile->image ? cdn_image('storage/profile/' . $profile->image) : cdn_image('storage/profile/avatar-head-profile.webp') }}"
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
                                        <b>No related profile for "{{ $tag->name }}" tag yet</b>
                                    </div>
                                @endforelse
                            </div>

                            {{-- @if (!empty($tagProfiles) && $tagProfiles->isNotEmpty())
                                <div class="row mt-3">
                                    <div class="col-12 d-flex justify-content-center">
                                        <a class="btn btn-success btn-sm"
                                            href="{{ route('profiles.index', ['q' => $tag->name]) }}"
                                            role="button">View All Profiles for #{{ $tag->name }}</a>
                                    </div>
                                </div>
                            @endif --}}
                        </div>
                    </div>

                    {{-- Company --}}
                    <div class="mt-4">
                        <h3 class="h4 mb-3 mt-2">Companies</h3>
                        <div class="bg-light p-4 mb-3 rounded">
                            <div class="row">
                                @forelse ($tagCompanies as $company)
                                    {{-- <div class="card w-100 mb-3">
                                        <div class="card-body">
                                            <h6 class="card-title"><a
                                                    href="{{ route('companies.show', $blog) }}">{{ $blog->title }}</a>
                                            </h6>
                                            <p class="card-text">{!! str($blog->body)->limit(100) !!}</p>
                                            <a href="{{ route('companies.show', $blog) }}"
                                                class="readmore stretched-link"><span>Read More</span><i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div> --}}
                                    <x-company-card-two :company="$company" :delay="$loop->index % 100" />

                                @empty
                                    <div class="col">
                                        <b>No company for "{{ $tag->name }}" tag yet</b>
                                    </div>
                                @endforelse
                            </div>
                        </div>

                        @if (!empty($tagCompanies) && $tagCompanies->isNotEmpty())
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-center">
                                    <a class="btn btn-success btn-sm"
                                        href="{{ route('blogs.index', ['q' => $tag->name]) }}" role="button">View
                                        All Companies for #{{ $tag->name }}</a>
                                </div>
                            </div>
                        @endif
                    </div>

                    {{-- Blog --}}
                    <div class="mt-4">
                        <h3 class="h4 mb-3 mt-2">Blogs</h3> {{-- Career Insights & Success Stories --}}
                        <div class="bg-light p-4 mb-3 rounded">
                            <div class="row">
                                @forelse ($tagBlogs as $blog)
                                    <div class="card w-100 mb-3">
                                        <div class="card-body">
                                            <h6 class="card-title"><a
                                                    href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a>
                                            </h6>
                                            <p class="card-text">{!! str($blog->body)->limit(100) !!}</p>
                                            <a href="{{ route('blogs.show', $blog) }}"
                                                class="readmore stretched-link"><span>Read More</span><i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col">
                                        <b>No blog for "{{ $tag->name }}" tag yet</b>
                                    </div>
                                @endforelse
                            </div>

                            @if (!empty($tagBlogs) && $tagBlogs->isNotEmpty())
                                <div class="row mt-3">
                                    <div class="col-12 d-flex justify-content-center">
                                        <a class="btn btn-success btn-sm"
                                            href="{{ route('blogs.index', ['q' => $tag->name]) }}" role="button">View
                                            All Blogs for #{{ $tag->name }}</a>
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
                            <h5 class="card-title mb-0">Related Tags</h5>
                        </div>
                        <div class="card-body">
                            @forelse($relatedTags as $relatedTag)
                                <div class="row mb-2">
                                    <x-tag-card-two :tag="$relatedTag" :delay="$loop->index % 100" />
                                </div>
                            @empty
                                <p class="text-muted">No related tag found.</p>
                            @endforelse

                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <a class="btn btn-success btn-sm" href="{{ route('tags.index') }}"
                                        role="button">View All
                                        Tags</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
