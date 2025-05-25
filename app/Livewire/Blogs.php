<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public $page = 1;
    public $perPage = 6;
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
        $blogs = Blog::query()
            ->published()
            ->with(["profile", "tags"]) //TODO(toheeb) get just the first tag instead if everything
            ->when(!empty($searchTerm), function ($query) use ($searchTerm) {
                // info("Search term", [$searchTerm]);
                return $query->whereFullText(['title', 'body'], $searchTerm);
            })->paginate($this->perPage);

        return view('livewire.blogs',  compact('blogs'));
    }
}
