<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class SinglePost extends Component
{
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.single-post');
    }
}
