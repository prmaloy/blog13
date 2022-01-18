<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;

class SinglePost extends Component
{
    public Post $post;
    public $title;
    public $body;
    public $categoryId;

    public $rules = [
        'title' => 'required',
        'body' => 'required'
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function updatePost($postid)
    {
        $this->validate();
        $newpost = Post::find($postid);
        $newpost->category_id = $this->categoryId;
        $newpost->slug = Str::slug($this->title);
        $newpost->title = $this->title;
        $newpost->body = $this->body;
        $newpost->save();

        return redirect('/posts/' . $postid);
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.single-post', [
            'categories' => $categories
        ]);
    }
}
