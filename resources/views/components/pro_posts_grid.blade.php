@props(['posts'])
@if ($posts->count())
@foreach ($posts as $post)
    <x-pro_post_card :post="$post" />
@endforeach


@else
    <p class="text-center"> Sorry, there is no suitbale posts</p>
@endif