<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = Post::latest();
        // if (request('search')){
        //     $posts->where('title','like','%'. request('search'). '%')
        //     ->orWhere('body', 'like', '%'.request('search').'%');
        // }
        return view('post', [
            // 'posts_in_html' => $posts->get(),
            // 'posts_in_html' => $this->GetPosts(),
            // 'posts'=> Post::latest()->Filter()->get(),
            'posts_in_html'=> Post::latest()->Filter(request(['search','category']))->get(),
            'categories_in_html' => Category::all(),
            'currentCategory' => Category::where('id', request('category'))->first()
    
        ]);
    }
    
    public function show(Post $post)
    {
        return view('subpost',[
            'post_in_html' => $post
        ]);
    }

    // protected function GetPosts(){
    //     return Post::latest()->Filter()->get();
    //     // $posts = Post::latest();
    //     // if (request('search')){
    //     //     $posts->where('title','like','%'. request('search'). '%')
    //     //     ->orWhere('body', 'like', '%'.request('search').'%');
    //     // }
    //     // return $posts->get();

    // }


}
