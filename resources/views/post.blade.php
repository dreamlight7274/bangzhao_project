<x-layoutc>
    @include('_posts_header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post_card_horizon />


        <div class="lg:grid lg:grid-cols-2">
            <x-post_card />
            <x-post_card />


            
        </div>

        <div class="lg:grid lg:grid-cols-3">
        <x-post_card />
        <x-post_card />
        <x-post_card />
        </div>
    </main>

</x-layoutc>