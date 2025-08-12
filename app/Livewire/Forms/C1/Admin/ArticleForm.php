<?php

namespace App\Livewire\Forms\C1\Admin;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form
{

    public Article|null $article = null;

    #[Validate('required|min:3')]
    public $title = '';

    #[Validate('required|min:3')]
    public $content = '';


    public function setArticle(Article $article)
    {
        $this->article = $article;

        $this->title = $this->article->title;
        $this->content = $this->article->content;

        return $this;
    }


    public function update()
    {
        $this->validate();

        $this->article->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }



    public function store()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}
