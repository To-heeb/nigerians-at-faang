<x-app-layout>

    <x-slot:title>
        {{ $blog->title }}
    </x-slot>

    <x-slot:type>
        article
    </x-slot>

    <x-slot:description>
        {{ config('app.name') }}: {{ $blog->title }}
    </x-slot>

    <!-- Page Title -->
    <x-header-banner-two page="{{ $blog->title }}" above_page="Blogs" above_page_route="{{ route('blogs.index') }}" />
    <!-- End Page Title -->

    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section py-10">
                    <div class="container">

                        <article class="article">

                            <div class="post-img">
                                <img src="{{ $blog->image ? asset('storage/blog/' . $blog->image) : asset('assets/img/blog/blog-1.jpg') }}"
                                    alt="" class="img-fluid">
                            </div>

                            <h2 class="title">{{ $blog->title }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{ route('profiles.show', $blog->profile) }}">{{ $blog->profile_id ? $blog->profile->name : $blog->author }}</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-details.html"><time
                                                datetime="{{ $blog->published_at }}">{{ date('M j, Y', strtotime($blog->published_at)) }}</time></a>
                                    </li>
                                    {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="#">12 Comments</a></li> --}} <!--TODO(toheeb): add comments and uncomment this-->
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                {{-- ->sanitizeHtml() --}}
                                {!! str($blog->body)->markdown() !!}
                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-eye"></i>
                                <ul class="cats">
                                    <li><a href="#">{{ $blog->views_count }}</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    @foreach ($blog->tags->take(3)->pluck('name') as $tag)
                                        <li><a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a></li>
                                    @endforeach
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article>

                    </div>
                </section>
                <!-- /Blog Details Section -->

                <!-- Blog Comments Section -->
                {{-- <section id="blog-comments" class="blog-comments section">

                    <div class="container">

                        <h4 class="comments-count">8 Comments</h4>

                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div class="comment-img">
                                    <img src="{{ asset('assets/img/blog/comments-1.jpg') }}" alt="">
                                </div>
                                <div>
                                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut
                                        sapiente quis molestiae est qui cum soluta.
                                        Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End comment #1 -->

                        <div id="comment-2" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe.
                                        Officiis illo ut beatae.
                                    </p>
                                </div>
                            </div>

                            <div id="comment-reply-1" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt="">
                                    </div>
                                    <div>
                                        <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam
                                            aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed
                                            necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus.
                                            Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                                            Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in
                                            porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi.
                                            Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos
                                            distinctio laborum minima fugiat.

                                            Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis
                                            error dolorum non autem quisquam vero rerum neque.
                                        </p>
                                    </div>
                                </div>

                                <div id="comment-reply-2" class="comment comment-reply">
                                    <div class="d-flex">
                                        <div class="comment-img"><img src="assets/img/blog/comments-4.jpg"
                                                alt=""></div>
                                        <div>
                                            <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i
                                                        class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time datetime="2020-01-01">01 Jan,2022</time>
                                            <p>
                                                Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia
                                                dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam.
                                                Placeat porro est commodi est officiis voluptas repellat quisquam
                                                possimus. Perferendis id consectetur necessitatibus.
                                            </p>
                                        </div>
                                    </div>

                                </div><!-- End comment reply #2-->

                            </div><!-- End comment reply #1-->

                        </div><!-- End comment #2-->

                        <div id="comment-3" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia
                                        nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem
                                        aspernatur aut quam ut. Voluptatem est accusamus iste at.
                                        Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est
                                        consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et
                                        optio veniam. Quam officia sit nostrum dolorem.
                                    </p>
                                </div>
                            </div>

                        </div><!-- End comment #3 -->

                        <div id="comment-4" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt="">
                                </div>
                                <div>
                                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit
                                        tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in
                                        fugiat.
                                    </p>
                                </div>
                            </div>

                        </div><!-- End comment #4 -->

                    </div>

                </section> --}}
                <!-- /Blog Comments Section -->

                <!-- Comment Form Section -->
                {{-- <section id="comment-form" class="comment-form section">
                    <div class="container">

                        <form action="">

                            <h4>Post Comment</h4>
                            <p>Your email address will not be published. Required fields are marked * </p>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control"
                                        placeholder="Your Website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </div>

                        </form>

                    </div>
                </section> --}}
                <!-- /Comment Form Section -->

            </div>

            <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                    <!-- Blog Author Widget -->
                    <div class="blog-author-widget widget-item">

                        <div class="d-flex flex-column align-items-center">
                            @if ($blog->profile_id)
                                {{-- {{ $blog->profile_id ? $blog->profile->name : $blog->author }} --}}
                                <img src="{{ $blog->profile->image ? asset('storage/profile/' . $blog->profile->image) : asset('storage/profile/avatar-head-profile.webp') }}"
                                    class="rounded-circle flex-shrink-0" alt="">
                                <h4>{{ $blog->profile->name }}</h4>
                                <div class="social-links">
                                    @if ($blog->profile->twitter_url)
                                        <a href="{{ $blog->profile->twitter_url }}" target="__blank"><i
                                                class="bi bi-twitter-x"></i></a>
                                    @endif
                                    @if ($blog->profile->website_url)
                                        <a href="{{ $blog->profile->website_url }}" target="__blank"><i
                                                class="bi bi-globe"></i></a>
                                    @endif
                                    @if ($blog->profile->instagram_url)
                                        <a href="{{ $blog->profile->instagram_url }}" target="__blank"><i
                                                class="bi bi-instagram"></i></a>
                                    @endif
                                    @if ($blog->profile->linkedin_url)
                                        <a href="{{ $blog->profile->linkedin_url }}" target="__blank"><i
                                                class="bi bi-linkedin"></i></a>
                                    @endif
                                </div>
                            @else
                                <img src="{{ asset('storage/profile/avatar-head-profile.webp') }}"
                                    class="rounded-circle flex-shrink-0" alt="">
                                <h4>{{ $blog->author }}</h4>
                            @endif

                            <a class="btn btn-outline-success btn-sm mt-2"
                                href="{{ route('profiles.show', $blog->profile) }}" role="button">View
                                Profile</a>

                        </div>
                    </div><!--/Blog Author Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <h3 class="widget-title">Recent Blogs</h3>

                        @foreach ($recentBlogs as $recentBlog)
                            <div class="post-item">
                                {{-- ->sanitizeHtml()  --}}
                                <h4><a href="{{ route('blogs.show', $recentBlog) }}">{!! str($recentBlog->title)->limit(30) !!}</a></h4>
                                <time
                                    datetime="{{ $blog->published_at }}">{{ date('M j, Y', strtotime($blog->published_at)) }}</time>
                            </div><!-- End recent post item-->
                        @endforeach

                    </div>
                    <!--/Recent Posts Widget -->

                    <!-- Tags Widget -->
                    <div class="tags-widget widget-item">

                        <h3 class="widget-title">Tags</h3>
                        <ul>
                            @foreach ($blog->tags as $tag)
                                <li><a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>

                    </div>
                    <!--/Tags Widget -->

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
