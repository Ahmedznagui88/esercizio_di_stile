<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    public $title;
    public $subtitle;
    public $body;

    protected $rules = [
        'title' => 'required|min:3|max:25',
        'subtitle' => 'required|min:6|max:50',
        'body' => 'required|min:6|max:1000',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
   

    public function store(){
        $this->validate();
        
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

       

        session()->flash('articleCreated', 'Article successfully created.'); 
        $this->reset();
    } 


    public function render()
    {
        return view('livewire.article-create-form');
    }
}
