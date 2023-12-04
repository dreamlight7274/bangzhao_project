<x-layout_pro>
    
    <section class="px-6 py-8">
        <form method="POST" action="/admin/update/{{ $post_in_html->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

        <div class="mb-6">

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


            <label class="block mb-2 uppercase font-bold text-xs" for="title">
                Title
            </label>
            {{-- for connect id --}}
            <input class="border border-blue-400 p-2 w-full" type="text" name="title" 
            id="title" value="{{ old('title', $post_in_html->title) }}" required>
            @error('title')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror



            <label class="block mb-2 uppercase font-bold text-xs" for="thumbnail">
                Thumbnail
            </label>
            {{-- for connect id --}}
            <input class="border border-blue-400 p-2 w-full" type="file" name="thumbnail" 
            id="thumbnail" value="{{ old('thumbnail', $post_in_html->thumbnail) }}">
            {{-- <img src="{{ asset('storage/' . $post_in_html->thumbnail) }}" alt="" class="rounded-xl"> --}}
            @error('thumbnail')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror



            <label class="block mb-2 uppercase font-bold text-xs" for="excerpt">
                Excerpt
            </label>
            {{-- for connect id --}}
            <textarea class="border border-blue-400 p-2 w-full" type="text" name="excerpt" 
            id="excerpt" rows="2" required>{{ old('excerpt', $post_in_html->excerpt) }}</textarea>
            @error('excerpt')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror

            <label class="block mb-2 uppercase font-bold text-xs" for="body">
                Body
            </label>
            {{-- for connect id --}}
            <textarea class="border border-blue-400 p-2 w-full" type="text" name="body" 
            id="body" rows="10" required>{{ old('body', $post_in_html->body) }}</textarea>
            @error('body')
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