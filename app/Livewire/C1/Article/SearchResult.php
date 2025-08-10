<?php

namespace App\Livewire\C1\Article;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class SearchResult extends Component
{

    #[Reactive]
    public $articles = [];
    
    #[Reactive]
    public $searched = '';

    public function render()
    {
        return view('livewire.c1.article.search-result');
    }
}
