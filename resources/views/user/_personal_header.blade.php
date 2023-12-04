<header class="flex justify-center w-full">
    <div class="flex mx-2">
        <a href="/user/personalbasic/{{ $user_in_html->id }}" class="bg-blue-200 px-2 py-2 rounded-xl hover:bg-blue-500">Edit basic information</a>

    </div>
    <div class="flex mx-2">
        <a href="/user/password/{{ $user_in_html->id }}" class="bg-yellow-200 px-2 py-2 rounded-xl hover:bg-yellow-400">modify the password</a>

    </div>
    <div class="flex mx-2">
        <form method="POST" action="/user/account/delete/{{ $user_in_html->id }}">
            @csrf
            @method('DELETE')
            <button class="bg-red-200 px-2 py-2 rounded-xl hover:bg-red-500">Delete the account</button>

        </form>

    </div>

</header>