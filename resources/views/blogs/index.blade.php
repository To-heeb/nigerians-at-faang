<x-app-layout>
    <!-- Page Title -->
    <x-header-banner page="Blog" />
    <!-- End Page Title -->

    <!-- TODO(toheeb): Make this a livewire component that is searchable, paginated or loading on getting there  -->
    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
        <div class="container">
            <div class="row gy-4">
            </div>
        </div>
    </section>
    <!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">
        <div class="container">
            <div class="d-flex justify-content-center">
                <ul>
                    <li>
                        <a href="#"><i class="bi bi-chevron-left"></i></a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>...</li>
                    <li><a href="#">10</a></li>
                    <li>
                        <a href="#"><i class="bi bi-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /Blog Pagination Section -->

</x-app-layout>
