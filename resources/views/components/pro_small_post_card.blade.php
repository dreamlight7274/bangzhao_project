@props(['post'])
<article 
class="transition-color duration-300 border border-black hover:bg-pink-200 hover:border-opacity-5 rounded-xl col-span-6">
<div class="py-6 px-5">
    <div>
        @if ($post->thumbnail)
        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">
            @else
            <img src="/images/default_post.jpg" alt="Blog Post illustration" class="rounded-xl">
        @endif
        
    </div>
    <div class="mt-4">
        <h1 class="text-3xl">
            <a href="/post/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </h1>
        

        <span class="mt-2 block text-gray-400 text-xs">
            Published <time>{{ $post->created_at->diffForHumans() }}</time>
        </span>
    </div>
</article>