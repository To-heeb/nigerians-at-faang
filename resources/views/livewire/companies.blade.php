 <!-- Features Section -->
 <section id="features" class="features section py-5">
     <!-- Section Title -->
     {{-- data-aos="fade-up" --}}

     <div class="container section-title search-container">
         <h5>Search for Company</h5>
         <p class="mb-3"> Search companies to explore more.</p>
         <input type="search" wire:model.live.debounce.500ms="search"
             wire:keydown.enter.prevent="if ($event.target.value.trim() === '') {return false;} else {$wire.$refresh();}"
             class="form-control" id="company-search" placeholder="Company Name" autocomplete="off" autofocus="on"
             aria-describedby="searchHelp" wire:keydown.space.prevent
             @keyup.space="if($event.target.value.trim() === '') $event.target.value = ''" />
     </div>
     <!-- End Section Title -->

     <div class="container text-center">
         <h4 wire:loading.delay.shortest wire:target="search" class="text-success fw-bold pb-2">
             <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
             <span>
                 <span>Searching...</span>
             </span>
         </h4>
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

         {{-- Nothing in the world is as soft and yielding as water. --}}
         <div class="row gy-4">
             @forelse($companies as $company)
                 <x-company-card wire:key="{{ $company->id }}" :company="$company" :delay="$loop->index % 100" />
             @empty
                 <p class="text-muted">No companies found for "{{ $search }}".</p>
             @endforelse
         </div>


         <!-- Pagination -->
         @if ($companies->hasPages())
             <div class="container text-center mt-3">
                 <h4 wire:loading wire:target="nextPage,gotoPage,previousPage"
                     class="text-success text-center fw-bold pb-2">
                     <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                     <span>
                         <span>Loading companies...</span>
                     </span>
                 </h4>
             </div>

             <div class="pagination-container mt-4 mb-2">
                 {{ $companies->links('livewire.custom-pagination') }}
             </div>
         @endif
     </div>
 </section>
 <!-- /Features Section -->

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
