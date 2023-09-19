@props(['post'])

<article {{$attributes->merge(['class'=> 'transition-colors duration-300 hover:bg-blue-900 bg-gray-900 border
    border-gray-600 border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5">
        <div class="flex-1 lg:mr-8">
            <img src="/images/illustration-1.png" alt="Illustration">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="mt-8 space-x-2">
                    <a href="#"
                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        style="font-size: 10px">{{$post->category->name}}</a>


                    <div class="mt-4">
                        <h1 class="text-xl">
                            {{$post->title}}
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs">
                            Published <time>{{$post->created_at->diffForHumans()}}</time>
                        </span>
                    </div>

                </div>
            </header>

            <div class="text-sm mt-2">
                <p>
                    {!! $post->excerpt !!}
                </p>

            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a>
                        </h5>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/posts/{{$post->slug}}"
                        class="transition-colors duration-300 text-xs font-semibold bg-blue-400 hover:bg-blue-600 rounded-full py-2 px-8">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>