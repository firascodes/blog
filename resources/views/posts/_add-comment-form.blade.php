@auth
<form action="/posts/{{$post->slug}}/comments" method="POST"
    class=" bg-gray-900 p-6 border border-gray-800 rounded-xl space-x-4">
    @csrf

    <header class="flex items-center">
        <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full">
        <h2 class="ml-3">Want to participate?</h2>
    </header>

    <div class="mt-6">
        <textarea name="body" id="" cols="30" rows="10"
            class="w-full text-sm rounded-xl focus:outline-non focus:ring px-4 py-2 focus:text-black"
            placeholder="Add your opinion here!" required></textarea>
        @error('body')
        <span class="text-xs text-red-500">{{$message}}</span>
        @enderror
    </div>

    <div class="flex justify-end mt-6 pt-6 ">
        <button type="submit" class="bg-blue-600 text-white font-semibold px-10 py-2">Post</button>
    </div>
</form>
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline text-blue-400">Register</a> or <a href="/login"
        class="hover:underline text-blue-400">Log in</a> to leave a comment.
</p>

@endauth