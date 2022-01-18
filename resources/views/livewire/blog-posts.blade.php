<div>
    <h1>Awesome blog!</h1>
    <hr>
    <form wire:submit.prevent='addpost'>
        <input wire:model='title' name="title" type="text" placeholder="Blog Title">
        @error('title') {{ $message }} @enderror
        <input wire:model='body' name="body" type="text" placeholder="Blog Body">
        @error('body') {{ $message }} @enderror
        <input type="submit" value="Add Post">
    </form>
    <hr>
    @foreach ($posts as $post)
        <livewire:post-card :post="$post" :wire:key="$post->id">
    @endforeach
    <a href="/">All Posts</a>
</div>
