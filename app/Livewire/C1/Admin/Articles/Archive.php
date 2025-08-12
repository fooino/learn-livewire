<?php

namespace App\Livewire\C1\Admin\Articles;

use App\Livewire\C1\Admin\AdminComponent;
use App\Models\Article;
use Livewire\WithPagination;

class Archive extends AdminComponent
{

    use WithPagination;

    public function delete(Article $article)
    {
        $article->deleteOrFail();
    }

    public function render()
    {
        return view(
            view: 'livewire.c1.admin.articles.archive',
            data: [
                'articles'  => Article::latest('id')->paginate(10)
            ]
        );
    }
}
