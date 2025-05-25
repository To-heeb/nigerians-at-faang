 <!-- Blog Section -->
 <section id="blog-posts" class="blog-posts section-home blog-section py-5">

     <!-- Section Title -->
     <div class="container section-title search-container">
         <h3 class="mb-2">Nigerian Excellence in Global Tech</h3>
         <p class="mb-4">Unfiltered career blueprints from Nigerians at FAANG+ companies.
             Learn how they conquered technical interviews,
             negotiated offers, and navigated relocations.</p>
         <input type="search" wire:model.live.debounce.500ms="search"
             wire:keydown.enter.prevent="if ($event.target.value.trim() === '') {return false;} else {$wire.$refresh();}"
             class="form-control" id="company-search" placeholder="Search by 'Blog Title' Or 'Profile Name'"
             autocomplete="off" autofocus="on" aria-describedby="searchHelp" wire:keydown.space.prevent
             @keyup.space="if($event.target.value.trim() === '') $event.target.value = ''" />
     </div>
     <!-- End Section Title -->

     <div class="container text-center py-3" wire:loading.delay.shortest wire:target="search">
         <div class="d-flex align-items-center justify-content-center gap-2">
             <!-- Modern spinner -->
             <div class="spinner-border text-success" style="width: 1.5rem; height: 1.5rem;" role="status">
                 <span class="visually-hidden">Loading...</span>
             </div>
             <!-- Dynamic search text -->
             <span class="fw-semibold text-muted">
                 Finding
                 <span class="text-success"
                     x-text="$wire.search ? 'matches for ' + $wire.search  : 'blogs by title or profile'">
                 </span> ...
             </span>
         </div>
         <!-- Progress bar -->
         <div class="progress mt-2" style="height: 3px; width: 120px; margin: 0 auto;">
             <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%"></div>
         </div>
     </div>

     <div class="container" x-data x-init="AOS.init({
         duration: 600,
         once: false, // Crucial for pagination
         offset: 120
     });

     Livewire.on('refresh-aos', () => {
         setTimeout(() => {
             AOS.refreshHard(); // Force complete reinitialization
         }, 300);
     });

     Livewire.on('scroll-to-top', () => {
         window.scrollTo({
             top: 0,
             behavior: 'smooth'
         });
     });">
         <div class="row gy-4">
             @forelse($blogs as $blog)
                 <x-blog-card wire:key="{{ $blog->id }}" :blog="$blog" :delay="$loop->index % 100" />
             @empty
                 <p class="text-muted">No blog with "{{ $search }}" title found.</p>
             @endforelse
         </div>
     </div>

     <!-- Pagination -->
     @if ($blogs->hasPages())
         <div class="container text-center mt-3" wire:loading.flex wire:target="nextPage,gotoPage,previousPage">
             <div class="d-flex align-items-center justify-content-center gap-3 p-3 bg-light rounded-3"
                 style="max-width: 300px; margin: 0 auto;">
                 <!-- Modern spinner with company-themed icon -->

                 <div class="position-relative" style="width: 24px; height: 24px;">
                     <div class="spinner-border text-success" style="width: 100%; height: 100%;" role="status">
                         <span class="visually-hidden">Loading...</span>
                     </div>
                     <i class="fas fa-building position-absolute top-50 start-50 translate-middle"
                         style="font-size: 0.6rem; color: var(--bs-success);"></i>
                 </div>

                 <!-- Animated text with progress -->
                 <div class="text-start">
                     <p class="my-0 fw-semibold text-dark">Loading more blogs</p>
                     <div class="progress" style="height: 3px; width: 180px;">
                         <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                             style="width: 100%"></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="pagination-container mt-4 mb-2">
             {{ $blogs->links('livewire.custom-pagination') }}
         </div>
     @endif
     <!-- End Pagination -->

 </section>
 <!-- /Blog Section -->

 <script>
     // Extend AOS with refreshHard method
     document.addEventListener('DOMContentLoaded', () => {
         AOS.refreshHard = function() {
             AOS.elements = document.querySelectorAll('[data-aos]');
             AOS.init({
                 disable: 'mobile'
             });
         };

         // Refresh AOS on Livewire events
         document.addEventListener('livewire:load', () => {
             Livewire.on('pageChanged', () => {
                 setTimeout(() => AOS.refreshHard(), 300);
             });
         });
     });
 </script>
