<x-layout_pro>
    @include('admin._admin_header')
    
    <section class="px-6 py-8">
        <form method="POST" action="/admin/user/update/{{ $user_in_html->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

        <div class="mb-6">
        <h1 class="font-blod">Edit the level: {{ $user_in_html->username }}<h1>
            
            <label class="block mb-2 uppercase font-bold text-xs" for="level">
                Level
            </label>
            {{-- for connect id --}}
            <input class="border border-blue-400 p-2 w-full" type="number" name="level" 
            id="level" value="{{ old('level', $user_in_html->level) }}" required>
            @error('level')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror

            <div class="flex justify-start"> 

                <button type="submit" 
                class="border border-black rounded-xl mx-2 px-6 py-1 font-bold bg-blue-500 text-white hover:bg-white hover:text-black">
                Update
                </button> 

            </div> 
    </section>

</x-layout_pro >