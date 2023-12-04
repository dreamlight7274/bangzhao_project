<x-layout_pro>
    <section class="px-6 py-8">
        <form method="POST" action="/user/password/update/{{ $user_in_html->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

        <div class="mb-6">
        <h1 class="font-blod">create a new password<h1>




            

            <label class="block mb-2 uppercase font-bold text-xs" for="password">
                Password
            </label>
            <input class="border border-blue-400 p-2 w-full" type="password" name="password" 
            id="password" required>
            @error('password')
            <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror

            <label class="block mb-2 uppercase font-bold text-xs" for="password_confirm">
                Password_confirm
            </label>
            <input class="border border-blue-400 p-2 w-full" type="password" name="password_confirm" 
            id="password_confirm" required>
            @error('password_confirm')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror

            <div class="flex justify-start"> 

                <button type="submit" 
                class="border border-black rounded-xl mx-2 px-6 py-1 font-bold bg-blue-500 text-white hover:bg-white hover:text-black">
                Update
                </button> 

            </div> 
    </section>
</x-layout_pro>