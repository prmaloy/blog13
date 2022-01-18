<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class BlogPosts extends Component
{

    public function render()
    {
        $posts = Post::latest()->get();
        return view('livewire.blog-posts', [
            'posts' => $posts
        ]);
    }
}
