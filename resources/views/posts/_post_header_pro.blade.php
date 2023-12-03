@auth
@if (auth()->user()->id == $post_in_html->user->id)
    

<header class="flex justify-between w-full">
    <div class="flex">
        <a href="/user/action/{{ $post_in_html->id }}/edit" class="bg-blue-200 px-2 py-2 rounded-xl hover:bg-blue-500">Edit</a>

    </div>
    <div class="flex justify-center">
        <form method="POST" action="/user/delete/{{ $post_in_html->id }}">
            @csrf
            @method('DELETE')
            <button class="bg-red-200 px-2 py-2 rounded-xl hover:bg-red-500">Delete</button>

        </form>

    </div>

</header>
@endif
@endauth
