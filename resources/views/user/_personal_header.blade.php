<header class="flex justify-center w-full">
    <div class="flex">
        <a href="/user/personalbasic/{{ $user_in_html->id }}" class="bg-blue-200 px-2 py-2 rounded-xl hover:bg-blue-500">Edit basic information</a>

    </div>
    <div class="flex">
        <form method="POST" action="/user/account/delete/{{ $user_in_html->id }}">
            @csrf
            @method('DELETE')
            <button class="bg-red-200 px-2 py-2 rounded-xl hover:bg-red-500">Delete the account</button>

        </form>

    </div>

</header>