<x-layout>
    <section class="px-6 py-8">
        <div class="border border-gray-200 p-6 rounded-xl max-w-sm mx-auto">
            <form action="/admin/posts" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold ">
                        Title
                    </label>
                    <input type="text" name="title" id="title" class="text-black border border-gray-800 p-2 w-full">
                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold ">
                        Excerpt
                    </label>
                    <textarea type="text" name="excerpt" id="excerpt"
                        class="text-black border border-gray-800 p-2 w-full"></textarea>
                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold ">
                        Body
                    </label>
                    <textarea type="text" name="body" id="body"
                        class="text-black border border-gray-800 p-2 w-full"></textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="category_id" class="block mb-2 uppercase font-bold ">
                        category
                    </label>
                    <select name="category_id" id="category_id" class="text-black px-2 py-2 rounded-xl">

                        @php
                        $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
                        @endforeach

                    </select>
                    @error('category')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>



                <div class="mb-6">
                    <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
                        Publish
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>