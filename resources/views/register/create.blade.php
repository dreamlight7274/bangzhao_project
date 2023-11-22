<x-layoutc>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto p-6  bg-pink-100 rounded-xl">
            <h1 class="text-center font-bold text-xl text-red-400"> 
                Register here
            </h1>
            <form method="POST" action="/register" class="mt-10">

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs" for="username">Username</label>
                    {{-- for connect id --}}
                    <input class="border border-blue-400 p-2 w-full" type="text" name="username" id="username" required>
                </div>

            </form>

        </main>
    </section>


</x-layoutc>