<x-layout_pro>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto my-20">
            <article class="mx-auto grid grid-cols-12 ">
                    <div class="col-span-3">

                        <a href="/post"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        @if ($post_in_html->user->portrait)
                        <img src="{{ asset('storage/' . $post_in_html->user->portrait) }}" alt="portrait" class="rounded-xl">
                        @else
                        <img src="/images/default_portrait.png" alt="protrait" class="rounded-xl">
                        @endif
                        <div class="text-left">
                            <h5 class="font-bold">
                                {{-- {{ $post_in_html->user->username }} --}}
                                <a href="/post/?author={{ $post_in_html->user->username }}">{{ $post_in_html->user->username }}</a>
                            
                            </h5>
                        </div>
                        <p class="mt-4 block text-gray-400 text-xs">
                            Published <time>{{ $post_in_html->created_at->diffForHumans() }}</time>
                        </p>


                    </div>
                    <div class="col-span-9">
                        @if ($post_in_html->thumbnail)
                    <img src="{{ asset('storage/' . $post_in_html->thumbnail) }}" alt="" class="rounded-xl">
                    @else
                    <img src="/images/default_post.jpg" alt="the thumbnail" class="rounded-xl">
                    @endif
                    </div>
                    <section class="col-span-12">
                        <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                            {{ $post_in_html->title }}
                        </h1>
    
                        <div class="space-y-4 lg:text-lg leading-loose space-y-4">
                            {!! $post_in_html->body !!}
    
                        </div>

                    </section>

                


            </article>
            
        </main>
    </section>
        
</x-layout_pro>