@props(['posts'])

@if ($posts->count())
<x-post_card_horizon :post="$posts[0]" />

    @if ($posts->count() > 1)
        <div class="lg:grid lg:grid-cols-6">
            @foreach ($posts->skip(1) as $post)
                {{-- @dd($loop) --}}
                <x-post_card :post="$post" class="bg-red-500 {{ $loop->iteration<=2 ? 'col-span-3' : 'col-span-2' }}"/>
            @endforeach  

        </div>
    @endif
@else
    <p class="text-center"> Sorry, there is no post now.</p>

@endif