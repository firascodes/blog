<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-900 border-gray-800 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="post">
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs">
                        Name
                    </label>
                    <input type="text" name="name" id="name" class="text-black border border-gray-400 p-2 w-full"
                        required>

                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs">
                        UserName
                    </label>
                    <input type="text" name="username" id="username"
                        class="text-black border border-gray-400 p-2 w-full" required>

                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs">
                        UserName
                    </label>
                    <input type="text" name="username" id="username"
                        class="text-black border border-gray-400 p-2 w-full" required>

                </div>


            </form>
        </main>

    </section>
</x-layout>