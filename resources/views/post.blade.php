<x-layout>

    <article>
        <h1>{{ $post->title }}</h1>
        <!-- We are recieving the post variable from route 
         'post' => $post_path -->

        <p>
            <a href="/categories/{{$post->category->slug}}">{{ $post->category->name}}</a>
        </p>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go Back</a>

</x-layout>