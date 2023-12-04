<x-layout_pro>
    @include('user._personal_header')
    
    <section class="px-6 py-8">
        <form method="POST" action="/user/basicinfo/update/{{ $user_in_html->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

        <div class="mb-6">
        <h1 class="font-blod">Edit basic info<h1>
            {{-- <label class="block mb-2 uppercase font-bold text-xs" for="category_id">
                Category
            </label> --}}
            {{-- for connect id --}}
            {{-- <select name="category_id" id="category_id" >
                @php
                $categories = \App\Models\Category::all();
                @endphp
                @foreach ($categories as $category)
                    <option 
                    value="{{ $category->id }}" 
                    {{ old('category_id', $post_in_html->category->id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
                
            </select>
            @error('category_id')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror --}}


            <label class="block mb-2 uppercase font-bold text-xs" for="name">
                Name
            </label>
            {{-- for connect id --}}
            <input class="border border-blue-400 p-2 w-full" type="text" name="name" 
            id="name" value="{{ old('name', $user_in_html->name) }}" required>
            @error('name')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror

            <label class="block mb-2 uppercase font-bold text-xs" for="username">
                Username
            </label>
            {{-- for connect id --}}
            <input class="border border-blue-400 p-2 w-full" type="text" name="username" 
            id="username" value="{{ old('username', $user_in_html->username) }}" required>
            @error('username')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror

            <label class="block mb-2 uppercase font-bold text-xs" for="email">
                Email
            </label>
            <input class="border border-blue-400 p-2 w-full" type="email" name="email" 
            id="email" value="{{ old('email', $user_in_html->email) }}" required>
            @error('email')
            <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror



            <label class="block mb-2 uppercase font-bold text-xs" for="portrait">
                Portrait
            </label>
            {{-- for connect id --}}
            <input class="border border-blue-400 p-2 w-full" type="file" name="portrait" 
            id="portrait" value="{{ old('portrait', $user_in_html->portrait) }}">
            {{-- <img src="{{ asset('storage/' . $post_in_html->thumbnail) }}" alt="" class="rounded-xl"> --}}
            @error('portrait')
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