<x-layout_pro>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto my-20 grid grid-cols-12">
            
                <div class="col-span-3 bg-gray-200">
                    @if ($user_in_html->portrait)
                        <img src="{{ asset('storage/' . $user_in_html->portrait) }}" alt="portrait" class="rounded-xl">
                        @else
                        <img src="/images/default_portrait.png" alt="protrait" class="rounded-xl">
                    @endif
                </div>
                <div class="col-span-9 bg-gray-200">
                    <p><span class="font-bold text-2xl">Username: </span><span class="text-2xl">{{ $user_in_html->username }}</span></p>
                    <p><span class="font-bold text-2xl">Email: </span><span class="text-2xl">{{ $user_in_html->email }}</span></p>


                </div>
                @if ($posts_of_user->count())
                @foreach ($posts_of_user as $post)
                    <x-pro_small_post_card :post="$post" class="mx-2"/>

                @endforeach


                @else
                    <p class="text-center col-span-12"> You have not created one post, have a try!</p>
                @endif

            

            
        </main>


        </main>
    </section>
</x-layout_pro>