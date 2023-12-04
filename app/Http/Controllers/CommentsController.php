<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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

    public function index_the_comments(){
        return view('admin.admin_comments', [
            'comments_in_html' => Comment::paginate(60)

        ]);

    }

    public function delete_the_comment(Comment $comment){
        $comment->delete();
        return back()->with('success','comment delete');

    }
    
}
