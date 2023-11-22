<x-dropdown>
    <x-slot name="trigger">
        <button  class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex" style="display: inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
    
            <x-arrow_icon name="down-arrow" class=" absolute pointer-events-none" style="right: 12px;"></x-down_arrow>
        </button>
    </x-slot>
    <x-dropdown_item href="/post" :active="request()->routeIs('/post')">All</x-dropdown_item> 
    {{-- change the judgement, just for /post --}}
    {{-- <a href="/post" class="block text-left px-3 hover:bg-gray-300 focus:bg-gray-300">All</a> --}}
    
    
    @foreach ($categories_in_html as $category)
    {{-- <x-dropdown_item href="/categories/{{ $category->id }}"   --}}
    {{-- <x-dropdown_item href="/post/?category={{$category->id }}"   --}}
        
        <x-dropdown_item href="/post/?category={{$category->id }}&{{ http_build_query(request()
        ->except('category', 'page')) }}"

        {{-- :active="request()->is('categories/' . $category->id)" --}}
        :active="isset($currentCategory) && $currentCategory->is($category)"
        >{{ ucwords($category->name) }}</x-dropdown_item>

    {{-- <a href="/categories/{{ $category->id }}" 
        class="block text-left px-3 hover:bg-gray-300 focus:bg-gray-300
        {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-gray-300' : '' }}">{{ ucwords($category->name) }}</a>ucword change the first word capital --}}
   
   
    @endforeach


</x-dropdown>