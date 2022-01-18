<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;

class BlogPosts extends Component
{
    public $title;
    public $body;
    public $categoryId = 3;
    public $search;

    public $rules = [
        'title' => 'required',
        'body' => 'required'
    ];

    public function addpost()
    {
        $this->validate();

        Post::create([
            'category_id' => $this->categoryId,
            'slug' => Str::slug($this->title),
            'title' => $this->title,
            'body' => $this->body
        ]);
    }

    public function render()
    {
        $posts = Post::latest();
        if($this->search) {
            $posts->where('title', 'like', '%' . $this->search . '%')
            ->orWhere('body', 'like', '%' . $this->search . '%');
        }
        return view('livewire.blog-posts', [
            'posts' => $posts->get()
        ]);
    }
}
