<header class="mt-10 text-center">
    <div class="container mx-auto">
        <h1 class="text-4xl">
            Hyperzod <span id="typed-output" class="text-blue-300"></span>
        </h1>

        <!-- Include Typed.js Library -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <!-- Initialize Typed.js -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var options = {
                    strings: ["Blog!"],
                    typeSpeed: 40,  // typing speed in milliseconds
                    backSpeed: 60,  // backspacing speed
                    backDelay: 1000,  // delay before starting to backspace
                    startDelay: 750,  // start delay in milliseconds
                    loop: true  // loop the animation indefinitely
                };

                var typed = new Typed("#typed-output", options);
            });
        </script>
        <br>
        {{-- <h2 class="inline-flex mb-5 text-xl">By Firas Mtz <img src="/images/lary-head.svg" alt="logo"></h2> --}}
        <p class="text-xl">
            This is just some random text that I am typing to fill this space
            New blog posts will be coming out every alternate day!
        </p>
    </div>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8 text-blue-600">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-category-dropdown />

        </div>

        <!-- Other Filters -->

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/?{{request()->getQueryString()}}">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category')}}">
                @endif

                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-blue-600 font-semibold text-sm px-2"
                    value="{{request('search')}}">

            </form>
        </div>
    </div>
</header>