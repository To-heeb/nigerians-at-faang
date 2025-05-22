 <!-- Profiles Section -->
 <section id="team" class="team section-home profile-section py-5">
     <!-- Section Title -->

     <div class="container section-title search-container">
         <h3 class="mb-2">Discover Nigerian Talent at Top Companies</h3>
         <p class="mb-4">Search FAANG and beyond to explore career journeys, interview tips, and insider insights.</p>
         <input type="search" wire:model.live.debounce.500ms="search"
             wire:keydown.enter.prevent="if ($event.target.value.trim() === '') {return false;} else {$wire.$refresh();}"
             class="form-control" id="company-search" placeholder="Search by 'Name' Or 'Job Title' Or 'Company'"
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
             <!-- Animated text -->
             <span class="fw-semibold text-muted">
                 Discovering talent at
                 <span class="text-success" x-text="$wire.search || 'companies'"></span> ...
             </span>
         </div>
         <!-- Optional progress bar -->
         <div class="progress mt-2" style="height: 3px; width: 120px; margin: 0 auto;">
             <div class="progress-bar progress-bar-striped progress-bar-animated text-bg-success" style="width: 100%">
             </div>
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
             @forelse($profiles as $profile)
                 <x-profile-card wire:key="{{ $profile->id }}" :profile="$profile" :delay="$loop->index % 100" />
             @empty
                 <p class="text-muted">No profile or job title or company found for "{{ $search }}".</p>
             @endforelse
         </div>
     </div>

     <!-- Pagination -->
     @if ($profiles->hasPages())
         {{-- <div class="container text-center mt-3">
             <div class="text-center mt-3" wire:loading.flex wire:target="nextPage,gotoPage,previousPage">
                 <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-light">
                     <div class="spinner-border spinner-border-sm text-success" role="status"></div>
                     <span class="text-muted small">Loading company data...</span>
                 </div>
             </div>
         </div> --}}

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
                     <p class="mb-0 fw-semibold text-dark">Loading more profiles</p>
                     <div class="progress" style="height: 3px; width: 180px;">
                         <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                             style="width: 100%"></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="pagination-container mt-4 mb-2">
             {{ $profiles->links('livewire.custom-pagination') }}
         </div>
     @endif
 </section>

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
