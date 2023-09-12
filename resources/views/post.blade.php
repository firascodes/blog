<x-layout>

    <article>
        <h1>{{$post->title}}</h1>
        <!-- We are recieving the post variable from route 
         'post' => $post_path -->
        <div>
            {!! $post->body !!}
        </div </article>

        <a href="/">Go Back</a>

</x-layout>