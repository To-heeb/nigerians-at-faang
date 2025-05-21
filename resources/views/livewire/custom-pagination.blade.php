@if ($paginator->hasPages())
    <section id="blog-pagination" class="blog-pagination section">
        <div class="container">
            <div class="d-flex justify-content-center">
                {{-- list-unstyled d-flex align-items-center gap-1 mb-0 --}}
                <ul>
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="disabled">
                            <a class="btn disabled">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                    @else
                        <li>
                            <a class="btn" wire:click="previousPage">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                    @endif

                    {{-- Pagination Numbers --}}
                    @php
                        // Show first page, current page with neighbors, and last page
                        $current = $paginator->currentPage();
                        $last = $paginator->lastPage();
                        $showPages = [1];

                        if ($current > 3) {
                            $showPages[] = '...';
                        }

                        $rangeStart = max(2, $current - 1);
                        $rangeEnd = min($last - 1, $current + 1);

                        for ($i = $rangeStart; $i <= $rangeEnd; $i++) {
                            $showPages[] = $i;
                        }

                        if ($current < $last - 2) {
                            $showPages[] = '...';
                        }

                        if ($last > 1) {
                            $showPages[] = $last;
                        }
                    @endphp

                    @foreach ($showPages as $page)
                        @if ($page === '...')
                            <li class="disabled">
                                <span>...</span>
                            </li>
                        @else
                            <li>
                                @if ($page == $paginator->currentPage())
                                    <a class="active btn">{{ $page }}</a>
                                @else
                                    <a class="btn" wire:click="gotoPage({{ $page }})">
                                        {{ $page }}
                                    </a>
                                @endif
                            </li>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li>
                            <a class="btn" wire:click="nextPage">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                    @else
                        <li class="disabled">
                            <a class="btn disabled"><i class="bi bi-chevron-right"></i></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </section>
@endif
