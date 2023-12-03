@props(['post'])

<article class="transition-color duration-300 bg-blue-200 border border-black hover:bg-white hover:border-opacity-5 rounded-xl">
    <div class="flex flex-1">
        <div class="flex-1 py-1 px-1">
            @if ($post->thumbnail)
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">
        @else
        <img src="/images/default_post.jpg" alt="Blog Post illustration" class="rounded-xl">
        @endif
        </div>


        <div class="flex-1">
            <header>    
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
            </header>

            <div class="text-sm mt-4 space-y-4">

                    {!! $post->excerpt !!}
            </div>

            </div>
    </div>
    <div class="flex flex-1 hover:bg-yellow-100">
        <div>
            @if ($post->user->portrait)
            <img src="{{ asset('storage/' . $post->user->portrait) }}" width="100" height="100" class="rounded-xl" alt="portrait">
            @else
            <img src="/images/default_portrait.png" width="100" height="100" class="rounded-xl" alt="portrait">
            @endif
        </div>
        <div class="flex flex-col justify-center">
            
            <a href="/post/?author={{ $post->user->username }}" class="py-2 px-3 text-medium bg-white font-bold rounded-xl my-2">{{ $post->user->username }}</a>
            

        </div>

    </div>

    
</article>