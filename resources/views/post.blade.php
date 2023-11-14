<x-layoutc>
    @include('_posts_header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts_in_html->count())
        <x-post_card_horizon :post="$posts_in_html[0]" />

            @if ($posts_in_html->count() > 1)
                <div class="lg:grid lg:grid-cols-2">
                    @foreach ($posts_in_html->skip(1) as $post)
                        <x-post_card :post="$post" class="bg-red-500"/>
                    @endforeach  

                </div>
            @endif
        @else
            <p class="text-center"> Sorry, there is no post now.</p>

        @endif
        

            
        

        {{--<div class="lg:grid lg:grid-cols-3">
        <x-post_card />
        <x-post_card />
        <x-post_card />
        </div> --}}
    </main>

</x-layoutc>