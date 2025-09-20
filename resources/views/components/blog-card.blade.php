@props(['blog', 'delay'])

<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="{{ $delay }}">
    <article class="position-relative h-100">
        <div class="post-img position-relative overflow-hidden">
            <img src="{{ $blog->image ? cdn_image('storage/blog/' . $blog->image) : cdn_image('storage/blog/blog-default.jpg') }}"
                class="img-fluid" alt="" />
            <span class="post-date">{{ date('F j', strtotime($blog->published_at)) }}</span>
        </div>

        <div class="post-content d-flex flex-column">
            <h3 class="post-title">
                {{ $blog->title }}
            </h3>

            <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <span class="ps-2">{{ $blog->profile ? $blog->profile->name : $blog->author }}</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i>
                    <span class="ps-2">{{ $blog->tags->first() ?? 'Politics' }}</span>
                </div>
            </div>

            <p>{!! str($blog->body)->limit(100) !!}</p>
            {{-- ->markdown()->sanitizeHtml() --}}

            <hr />

            <a href="{{ route('blogs.show', $blog) }}" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>
        </div>
    </article>
</div>
