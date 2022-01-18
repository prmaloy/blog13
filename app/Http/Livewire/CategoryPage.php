<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryPage extends Component
{
    public Category $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $posts = $this->category->posts;
        
        return view('livewire.blog-posts', [
            'posts' => $posts
        ]);
    }
}
