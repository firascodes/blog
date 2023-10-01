<x-layout>
    <script src="https://cdn.tiny.cloud/1/bce5c3zhyxmz26qhi6tq55vuzew3vshlvtalf5xoqn5oyhly/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea', // Change this value according to your HTML
            plugins: 'link code emoticons image link lists media searchreplace table visualblocks wordcount checklist',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | outdent indent | link code | emoticons charmap',
            // Optional: Add more configurations and plugins as needed.
        });
    </script>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">Publish New Post!</h1>
        <div class="border border-gray-200 p-6 rounded-xl ">
            <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold ">
                        Title
                    </label>
                    <input type="text" name="title" id="title" value="{{old('title')}}"
                        class="text-black border border-gray-800 p-2 w-full">
                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold ">
                        slug
                    </label>
                    <input type="text" name="slug" id="slug" value="{{old('slug')}}"
                        class="text-black border border-gray-800 p-2 w-full">
                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="thumbnail" class="block mb-2 uppercase font-bold ">
                        thumbnail
                    </label>
                    <input type="file" name="thumbnail" id="thumbnail" value="{{old('thumbnail')}}"
                        class="text-black border border-gray-800 p-2 w-full bg-white">
                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold ">
                        Excerpt
                    </label>
                    <textarea type="text" name="excerpt" id="excerpt"
                        class="text-black border border-gray-800 p-2 w-full">{{old('excerpt')}}</textarea>
                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold ">
                        Body
                    </label>
                    <textarea type="text" name="body" id="body"
                        class="text-black border border-gray-800 p-2 w-full">{{old('body')}}</textarea>
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
                        <option value="{{$category->id}}" {{old('category_id')==$category->id ? 'selected' :
                            ''}}>{{ucwords($category->name)}}</option>
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