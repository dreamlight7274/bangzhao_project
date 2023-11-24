<x-layoutc>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto p-6  bg-pink-100 rounded-xl">
            <h1 class="text-center font-bold text-xl text-red-400"> 
                Login in here
            </h1>
            <form method="POST" action="/login" class="mt-10">
                @csrf

                <div class="mb-6">
                    {{-- for connect id --}}
                    {{-- <label class="block mb-2 uppercase font-bold text-xs" for="name">
                        Name
                    </label>
                    
                    <input class="border border-blue-400 p-2 w-full" type="text" name="name" 
                    id="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror --}}


                    <label class="block mb-2 uppercase font-bold text-xs" for="email">
                        Email
                    </label>
                    <input class="border border-blue-400 p-2 w-full" type="email" name="email" 
                    id="email" value="{{ old('email') }}" required>
                    



                    <label class="block mb-2 uppercase font-bold text-xs" for="password">
                        Password
                    </label>
                    <input class="border border-blue-400 p-2 w-full" type="password" name="password" 
                    id="password" required>
                    @error('something_wrong')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror

                    
                </div class="mb-6">
                <div>
                    <button type="submit" 
                    class="bg-blue-200 hover:bg-blue-500 border-pink-400 py-2 px-6 rounded font-bold text-white ">
                    Login
                </button>


                </div>
                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}

            </form>

        </main>
    </section>


</x-layoutc>