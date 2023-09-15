<x-layout>
    @include ('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured-card :post="$posts[0]" />

        <div class=" grid grid-cols-2 space-x-4">

            @foreach($posts->skip(1) as $post)
            <x-post-card :post="$post" />
            @endforeach


            {{-- <article
                class="transition-colors duration-300 hover:bg-blue-900 bg-gray-900 border border-gray-600 border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5">
                    <div class="flex-1 lg:mr-8">
                        <img src="./images/illustration-1.png" alt="Illustration">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="mt-8 space-x-2">
                                <a href="#"
                                    class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                    style="font-size: 10px">Techniques</a>

                                <a href="#"
                                    class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                    style="font-size: 10px">Updates</a>

                                <div class="mt-4">
                                    <h1 class="text-2xl">
                                        This is a big title and it will look great on two or even three lines.
                                        Wooohoo!
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>

                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>

                            <p class="mt-4">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat
                                nulla pariatur.
                            </p>
                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold">Firas Mtz</h5>
                                    <h6>Intern at Hyperzod</h6>
                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <a href="#"
                                    class="transition-colors duration-300 text-xs font-semibold bg-blue-400 hover:bg-blue-600 rounded-full py-2 px-8">Read
                                    More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>
            <article
                class="transition-colors duration-300 hover:bg-blue-900 bg-gray-900 border border-gray-600 border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5">
                    <div class="flex-1 lg:mr-8">
                        <img src="./images/illustration-2.png" alt="Illustration">
                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="mt-8 space-x-2">
                                <a href="#"
                                    class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                    style="font-size: 10px">Techniques</a>

                                <a href="#"
                                    class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                    style="font-size: 10px">Updates</a>

                                <div class="mt-4">
                                    <h1 class="text-2xl">
                                        This is a big title and it will look great on two or even three lines.
                                        Wooohoo!
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>1 day ago</time>
                                    </span>
                                </div>

                            </div>
                        </header>

                        <div class="text-sm mt-2">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>

                            <p class="mt-4">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat
                                nulla pariatur.
                            </p>
                        </div>

                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="./images/lary-avatar.svg" alt="Lary avatar">
                                <div class="ml-3">
                                    <h5 class="font-bold">Firas Mtz</h5>
                                    <h6>Intern at Hyperzod</h6>
                                </div>
                            </div>

                            <div class="hidden lg:block">
                                <a href="#"
                                    class="transition-colors duration-300 text-xs font-semibold bg-blue-400 hover:bg-blue-600 rounded-full py-2 px-8">Read
                                    More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article> --}}
        </div>

        {{-- <div class="grid grid-cols-3 space-x-4">
            <x-post-card />
            <x-post-card />
            <x-post-card />

        </div> --}}
    </main>




    {{-- @foreach ($posts as $post)

    <article>
        <h1>
            <a href="/posts/{{$post->slug}}">
                {{$post->title}} </a>
        </h1>

        <p>
            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a
                href="/categories/{{$post->category->slug}}">{{
                $post->category->name}}</a>
        </p>

        <div>
            {!!$post->excerpt!!}
        </div>
    </article>
    @endforeach --}}

</x-layout>