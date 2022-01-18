<div>
    <form wire:submit.prevent='updatePost({{ $post->id }})'>
        <input wire:model='title' name="title" type="text" placeholder="{{ $post->title }}">
        <textarea wire:model='body' name="body" cols="30" rows="10" placeholder="{{ $post->body }}"></textarea>
        <select wire:model='categoryId' name="categories">
            <option>Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Update Post">
    </form>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="/categories/{{ $post->category_id }}">
        <p>{{ $post->category->name }}</p>
    </a>
    <hr>
    <a href="/">All Posts</a>
</div>
