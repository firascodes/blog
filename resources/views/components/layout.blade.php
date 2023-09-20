<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.0/dist/cdn.min.js"></script>


</head>

<body class="bg-black text-white">
    <section class="px-8 py-4 bg-black">
        <nav class="flex justify-between">
            <div>
                <a href="/">
                    <img src="/images/logo1.png" alt="Logo" width="165">
                </a>
            </div>


            <div class="mt-5 md:mt-0 flex items-center">
                @auth
                <span class="px-4 text-white bg-green-600 rounded-full uppercase font-semibold py-1 mx-2">Hi,
                    {{auth()->user()->name}}!</span>
                <form action="/logout" method="POST" class="font-semibold  mx-3">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
                @else
                <a href="/register"
                    class="px-4 text-white bg-blue-800 rounded-full uppercase font-semibold py-1 mx-2">Register</a>
                <a href="/login" class="px-4 text-white bg-blue-600 rounded-full uppercase font-semibold py-1 mx-2 ">Log
                    In</a>
                @endauth
                {{-- <a href="" class="px-3 text-white">About Us</a> --}}
                <a href="" class="text-white bg-gray-800 rounded-full font-semibold uppercase px-3 py-1 mx-2 ">Subscribe
                    For
                    More!</a>
            </div>
        </nav>


        {{ $slot }}

        <footer class="bg-gray-900 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.png" alt="" class="mx-auto " style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none text-blue-600 focus:border-gray-300 border border-transparent">

                        </div>

                        <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>



    </section>

    <x-flash />



</body>

</html>