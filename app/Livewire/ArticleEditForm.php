<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleEditForm extends Component
{
    public $title; //! This is the title of the article we are editing
    public $subtitle; //! This is the subtitle of the article we are editing
    public $body;   //! This is the body of the article we are editing
    public $article; //! This is the article we are editing

    public function update()
    {
        
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        session()->flash('articleUpdated', 'Article successfully updated.');

        /* return redirect()->route('articles.index'); */
    }

    //*lifecycle hooks 
    public function mount($article)
    {
        $this->article = $article;
        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->body = $article->body;
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
