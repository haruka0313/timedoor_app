<?php

namespace App\Livewire;

use App\Models\Booklist;
use Livewire\Component;
use Livewire\WithPagination;

class BooklistComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $paginate;
    public $search;
    protected $queryString = ['search'];

    public $perPage;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPaginate()
    {
        $this->resetPage();
    }


    public function render()
    {
        

        $perPage = !empty((int) $this->paginate) ? (int) $this->paginate : 10;
       

        $books = Booklist::when(!empty($this->search), function ($query) {
            $query->where('book_name', 'LIKE', "%{$this->search}%")
                  ->orWhere('author_name', 'LIKE', "%{$this->search}%");
        })
        ->paginate($this->perPage);
        

        return view('livewire.booklist', ['books' => $books]);
    }
}
