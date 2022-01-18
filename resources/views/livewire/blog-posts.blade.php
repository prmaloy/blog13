<div>
    <h1>Awesome blog!</h1>
    <hr>
    <form>
        <input wire:model='title' name="title" type="text" placeholder="Blog Title">
        <input wire:model='body' name="body" type="text" placeholder="Blog Body">
        <input type="submit" value="Add Post">
    </form>
    <hr>
    @foreach ($posts as $post)
        <livewire:post-card :post="$post" :wire:key="$post->id">
    @endforeach
    <a href="/">All Posts</a>
</div>
