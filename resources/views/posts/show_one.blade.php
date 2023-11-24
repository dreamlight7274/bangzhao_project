<x-layoutc>
    <section class="px-6 py-8">


        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{ $post_in_html->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                {{-- {{ $post_in_html->user->username }} --}}
                                <a href="/post/?author={{ $post_in_html->user->username }}">{{ $post_in_html->user->username }}</a>
                            
                            </h5>
                            <h6>Mascot at Laracasts</h6>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
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

                        <div class="space-x-2">
                            <x-category_button :category="$post_in_html->category" />


                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{ $post_in_html->title }}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose space-y-4">
                        {!! $post_in_html->body !!}

                    </div>
                </div>
                <section class="col-span-12 mt-10">
                    <form method="POST" action="#" class="py-6 rounded-xl border"> 

                        <header class="flex items-center"> 

                            <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}" alt="pravatar" width="40" height="40"> 

                            <h1 class="ml-3"> 

                                 

                                Hi 

                            </h1> 

                        </header> 

                        <div> 

                            <textarea name="body"  

                            class="w-full border border-pink-500"  

                            cols="30" rows="10"  

                            placeholder="give your opinion"> 

                        </textarea> 

                        </div> 

                        <div> 

                            <button type="submit">Upload</button> 

                        </div> 

 

                    </form> 


                    @foreach ($post_in_html->comments as $comment)
                        <x-comment :comment="$comment" />
                    @endforeach
                    

                </section>
            </article>
        </main>

    </section>
</x-layoutc>