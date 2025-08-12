<?php

namespace App\Livewire\C1\Article;

use App\Models\Article;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Search extends Component
{

    #[Url(except: '')]
    public $searched = '';


    #[On('clear:search-articles-results')]
    public function clear()
    {
        $this->reset('searched');
    }

    public function render()
    {
        return view(
            view: 'livewire.c1.article.search',
            data: [
                'articles' => Article::search($this->searched)->get()
            ]
        );
    }
}
