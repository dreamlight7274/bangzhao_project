<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8 ">

        <nav class="bg-gray-100 w-full py-5">
            <div>
                <a href="/post">
                    <img src="/images/page_logo.svg" alt="Blog Logo" width="200" height="20">
                </a>
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
    
    




</body>