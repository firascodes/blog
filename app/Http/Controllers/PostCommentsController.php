<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post) //Used to store a comment
    {

        //validation
        request()->validate([
            'body' => 'required'
        ]);

        //add a comment to given post
        //User must be logged in!
        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}