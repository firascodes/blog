<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-800 border-gray-700 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="post">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs">
                        Name
                    </label>
                    <input type="text" name="name" id="name" class="text-black border border-gray-400 p-2 w-full"
                        required value="{{old('name')}}">

                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs">
                        UserName
                    </label>
                    <input type="text" name="username" id="username" value="{{old('username')}}"
                        class="text-black border border-gray-400 p-2 w-full" required>
                    @error('username')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs">
                        Email
                    </label>
                    <input type="email" name="email" id="email" value="{{old('email')}}"
                        class="text-black border border-gray-400 p-2 w-full" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs">
                        Password
                    </label>
                    <input type="password" name="password" id="password"
                        class="text-black border border-gray-400 p-2 w-full" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
                        Submit
                    </button>
                </div>

                {{-- @if ($errors->any())
                <ul>
                    @foreach ($errors->All() as $error)
                    <li class="text-red-500 text-xs">
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
                @endif --}}


            </form>
        </main>

    </section>
</x-layout>