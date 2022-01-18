<div>
    <a href="/posts/{{ $post->id }}">
        <h3>{{ $post->title }}</h3>
    </a>
    <p>{{ $post->body }}</p>
    <a href="/categories/{{ $post->category_id }}">
        <p>{{ $post->category->name }}</p>
    </a>
    <button wire:click='deletePost({{ $post->id }})'>Delete</button>
    <hr>
</div>
