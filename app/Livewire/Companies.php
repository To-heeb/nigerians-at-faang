<?php

namespace App\Livewire;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;
// use Livewire\WithoutUrlPagination;

class Companies extends Component
{
    use WithPagination;
    // , WithoutUrlPagination;

    public $page = 1;
    public $perPage = 16;
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

        $companies = Company::query()->when(!empty($searchTerm), function ($query) use ($searchTerm) {
            // info("Search term", [$searchTerm]);
            return $query->where('name', 'like', '%' . $searchTerm . '%');
            // ->orWhere('email', 'like', '%' . $this->search . '%')
            //->orWhere('website', 'like', '%' . $this->search . '%')
        })->paginate($this->perPage);

        return view('livewire.companies', compact('companies'));
    }
}
