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
                        </div>
                    </div>

                    {{-- Company --}}
                    <div class="mt-4">
                        <h3 class="h4 mb-3 mt-2">Companies</h3>
                        <div class="bg-light p-4 mb-3 rounded">
                        </div>
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
