<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class ArticlesIndex extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.articles-index', [
            'articles' => \App\Models\Article::paginate(5),
        ]);
    }
}
