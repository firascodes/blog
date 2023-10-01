<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))
                ->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        //Find a post by its slug and pass it to a view called "post"
        return view('posts.show', [
            'post' => $post,
            'categories' => Category::all()
        ]);

    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['nullable', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');

        // Generate slug if it's not provided
        if (empty($attributes['slug'])) {
            $baseSlug = \Illuminate\Support\Str::slug($attributes['title']);
        } else {
            $baseSlug = $attributes['slug'];
        }

        // Check if the slug exists and handle duplicates
        $slugCounter = 1;
        $slug = $baseSlug;

        while (Post::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $slugCounter;
            $slugCounter++;
        }

        $attributes['slug'] = $slug;
        Post::create($attributes);

        return redirect('/');
    }
    //index,show,create,store,edit,update & destroy -> 7 RESTful actions
}