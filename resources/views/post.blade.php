<x-layout>

    <article>
        <h1>{{ $post->title }}</h1>
        <!-- We are recieving the post variable from route 
         'post' => $post_path -->
        {!! $post->body !!}
    </article>

    <a href="/">Go Back</a>

</x-layout>