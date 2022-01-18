<div>
    <form wire:submit.prevent='updatePost({{ $post->id }})'>
        <input wire:model='title' name="title" type="text" placeholder="{{ $post->title }}">
        <textarea wire:model='body' name="body" cols="30" rows="10" placeholder="{{ $post->body }}"></textarea>
        <input type="submit" value="Update Post">
    </form>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <hr>
    <a href="/">All Posts</a>
</div>
