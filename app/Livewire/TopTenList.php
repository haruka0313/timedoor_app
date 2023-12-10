<?php

namespace App\Livewire;

use App\Models\Booklist;
use Livewire\Component;

class TopTenList extends Component
{
    public function render()
    {

        $topAuthors = Booklist::orderByDesc('voter')
            ->take(10)
            ->get();

            return view('livewire.top-ten-list', ['topAuthors' => $topAuthors]);
    }
}
