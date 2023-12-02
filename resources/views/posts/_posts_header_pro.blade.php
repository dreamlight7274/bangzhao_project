<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Search the <span class="text-blue-500">Title</span> or the <span class="text-red-500">author</span>
    </h1>

    
        
        <div class="relative flex inline-flex items-center rounded-xl px-3 py-2">
            <form method="GET" action="#">   
                <input type="text" name="search" 
                        placeholder="Find something"
                        class="bg-gray-200 font-semibold w-80 h-10 rounded-xl"
                        value="{{ request('search') }}">
            </form>
            {{-- 4 pixels one word --}}
        </div>
    
    </header>