<!doctype html>

<title>Dante's Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8 ">

        <nav class="flex justify-between bg-gray-100 w-full py-5">
            <div class="flex">
                <a href="/post">
                    <img src="/images/page_logo.svg" alt="Blog Logo" width="200" height="20">
                </a>
            </div>
            <div class="flex justify-center">
                {{-- @guest
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                @endguest --}}
                {{-- @if (! auth()->check())
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                @endif --}}
                @auth
                <span class="text-xs font-bold px-2 my-2">Welcome! {{ auth()->user()->username }}</span>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white rounded-xl px-2 py-1 mt-1">Log out</button>
                </form>

                @else
                    <a href="/login" class="text-xs font-bold uppercase bg-green-500 text-white px-2 py-2 mx-1 hover:bg-green-700">Log in</a>
                    
                    <a href="/register" class="text-xs font-bold uppercase bg-blue-500 text-white px-2 py-2 mx-1 hover:bg-blue-700">Register</a>
                @endauth


                <a href="/user/post/create" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Create a new post
                </a>
                @auth
                @if (auth()->user()->level == '1')
                <a href="/admin/post/index" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Dashboard
                </a>
                @endif
                @endauth
            </div>

        </nav>

    {{ $slot }} 
    
        <footer class="bg-gray-100 w-full my-3 text-center">
            <div class="w-full">
            <h2>If you want to go back to  main page, please click the image below</h2>
            </div>
            <a href="/post" >
                <img src="/images/T1-2015.png" class="mx-auto" alt="return to main" width="500" height="200">

            </a>
            

        </footer>

    </section>
    @if (session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
    class="fixed bg-pink-500 text-white text-sm bottom-3 right-3 py-2 px-4 ">
        <p>{{ session()->get('success') }}</p>
    </div>
    @endif
    
    




</body>