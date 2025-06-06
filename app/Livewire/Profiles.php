<?php

namespace App\Livewire;

use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;

class Profiles extends Component
{
    use WithPagination;

    public $page = 1;
    public $perPage = 12;
    public string $search = '';
    protected $paginationTheme = 'custom-pagination';

    protected $queryString = [
        'search' => ['except' => '', 'as' => 'q'], // Preserve search in URL
        'page' => ['except' => 1, 'as' => 'page'], // Preserve page in URL
    ];

    protected $listeners = ['refreshAos' => '$refresh'];

    public function updatingPage($page)
    {
        $this->dispatch('refresh-aos');
        $this->dispatch('scroll-to-top');
    }

    public function updatingSearch()
    {
        $this->resetPage(); // Reset to page 1 when search changes
    }

    public function render()
    {
        $searchTerm = trim($this->search ?? '');
        $profiles = Profile::query()
            ->publiclyVisible()
            ->inRandomOrder(now()->format('Ymd')) //Time-Based Rotation algo  now()->format('Ymd')
            // ->orderByRaw('(views_count + (DATEDIFF(NOW(), created_at) * -1)) DESC') //Algorithmic Rotation algo
            // ->orderBy('created_at', 'desc') //  Recently Added First
            // ->orderBy('last_featured_at', 'asc') // Oldest featured first - Priority Queue System
            // ->orderBy('views_count', 'asc') // // Less viewed get priority
            ->when(!empty($searchTerm), function ($query) use ($searchTerm) {
                // info("Search term", [$searchTerm]);
                return $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('job_title', 'like', '%' . $searchTerm  . '%')
                    ->orWhereHas('company', function ($q) use ($searchTerm) {
                        $q->where('name', 'like', '%' . $searchTerm . '%');
                    });
            })->paginate($this->perPage);

        return view('livewire.profiles', compact('profiles'));
    }
}
