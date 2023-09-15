<header class="mt-10 text-center">
    <div class="container mx-auto">
        <h1 class="text-4xl">
            Latest information about <span id="typed-output" class="text-blue-300"></span>!
        </h1>

        <!-- Include Typed.js Library -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <!-- Initialize Typed.js -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var options = {
                    strings: ["Hyperzod"],
                    typeSpeed: 40,  // typing speed in milliseconds
                    backSpeed: 60,  // backspacing speed
                    backDelay: 1000,  // delay before starting to backspace
                    startDelay: 750,  // start delay in milliseconds
                    loop: true  // loop the animation indefinitely
                };

                var typed = new Typed("#typed-output", options);
            });
        </script>

        <h2 class="inline-flex mb-5 text-xl">By Firas Mtz <img src="./images/lary-head.svg" alt="logo"></h2>
        <p class="text-xl">
            This is just some random text that I am typing to fill this space
            New blog posts will be coming out every alternate day!
        </p>
    </div>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8 text-blue-600">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-10 text-sm font-semibold">
                <option value="category" disabled selected>Category
                </option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22"
                viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                    </path>
                </g>
            </svg>
        </div>

        <!-- Other Filters -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-10 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22"
                viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                    </path>
                </g>
            </svg>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-blue-600 font-semibold text-sm px-2">
            </form>
        </div>
    </div>
</header>