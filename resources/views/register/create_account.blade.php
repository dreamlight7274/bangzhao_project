<x-layoutc>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto p-6  bg-pink-100 rounded-xl">
            <h1 class="text-center font-bold text-xl text-red-400"> 
                Register here
            </h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs" for="name">
                        Name
                    </label>
                    {{-- for connect id --}}
                    <input class="border border-blue-400 p-2 w-full" type="text" name="name" 
                    id="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror



                    <label class="block mb-2 uppercase font-bold text-xs" for="username">
                        Username
                    </label>
                    <input class="border border-blue-400 p-2 w-full" type="text" name="username" 
                    id="username" value="{{ old('username') }}" required>
                    @error('username')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror

                    <label class="block mb-2 uppercase font-bold text-xs" for="email">
                        Email
                    </label>
                    <input class="border border-blue-400 p-2 w-full" type="email" name="email" 
                    id="email" value="{{ old('email') }}" required>
                    @error('email')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror



                    <label class="block mb-2 uppercase font-bold text-xs" for="password">
                        Password
                    </label>
                    <input class="border border-blue-400 p-2 w-full" type="password" name="password" 
                    id="password" required>
                    @error('password')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror

                    
                </div class="mb-6">
                <div>
                    <button type="submit" 
                    class="bg-blue-200 hover:bg-blue-500 border-pink-400 py-2 px-6 rounded font-bold text-white ">
                    Submit
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