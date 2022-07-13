<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class ArticlesIndex extends Component
{
    public $articulos;
    public $categoria;
    public $search = null;

    // public function mount()
    // {
    //     $this->articles = Article::where('title', 'like', "%{$this->search}%")->get();
    // }

    public function render()
    {

        $this->articulos = Article::where('title', 'like', "%{$this->search}%")->get();

        return view('livewire.articles.articles-index');
    }
}
