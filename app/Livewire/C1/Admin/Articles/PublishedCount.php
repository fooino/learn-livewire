<?php

namespace App\Livewire\C1\Admin\Articles;

use App\Models\Article;
use Livewire\Attributes\Lazy;
use Livewire\Component;


#[Lazy()]
class PublishedCount extends Component
{

    public int $count = 0;

    public function mount()
    {
        sleep(3);

        $this->count = Article::wherePublished(1)->count();
    }

    public function placeholder()
    {
        return '<div>loading...</div>';
    }

    public function render()
    {
        return view('livewire.c1.admin.articles.published-count');
    }
}
