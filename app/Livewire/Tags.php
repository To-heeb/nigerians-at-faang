<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class Tags extends Component
{
    use WithPagination;
    // , WithoutUrlPagination;

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
        // $this->dispatch('searchStarted');
        $this->resetPage(); // Reset to page 1 when search changes
    }

    public function render()
    {
        $searchTerm = trim($this->search ?? '');
        // info("Search term before", [$searchTerm]);

        $tags = Tag::query()->when(!empty($searchTerm), function ($query) use ($searchTerm) {
            return $query->where('name', 'like', '%' . $searchTerm . '%');
        })->paginate($this->perPage);

        return view('livewire.tags',  compact('tags'));
    }
}
