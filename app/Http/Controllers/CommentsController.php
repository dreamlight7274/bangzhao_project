<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store_to_db(Post $post)
    {
        request()->validate([
            'body' => 'required'
        ]);
        // dd($post);
        $post->comments()->create([
            'user_id' => request()->user()->id,
            // 'user_id' => request()->user()->id,
            'body' =>request('body')
        ]);

        return back();
        // return redirect('/post/{post}')->with('success','update successfully');

    }
}
