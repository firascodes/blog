<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

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

    //index,show,create,store,edit,update & destroy -> 7 RESTful actions
}