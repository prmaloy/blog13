<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostCard extends Component
{
    public $post;

    public function deletePost($postid)
    {
        Post::destroy($postid);
        return redirect('/');
    }
    
    public function render()
    {
        return view('livewire.post-card');
    }
}
