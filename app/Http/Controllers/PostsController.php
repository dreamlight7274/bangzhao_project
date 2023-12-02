<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends Controller
{
    public function index_with_rule()
    {
        // $posts = Post::latest();
        // if (request('search')){
        //     $posts->where('title','like','%'. request('search'). '%')
        //     ->orWhere('body', 'like', '%'.request('search').'%');
        // }
        // return view('posts.index_with_rule', [
        return view('posts.pro_index_posts', [
            // 'posts_in_html' => $posts->get(),
            // 'posts_in_html' => $this->GetPosts(),
            // 'posts'=> Post::latest()->Filter()->get(),

            // 'posts_in_html'=> Post::latest()->Filter(request(['search','category','author']))->get(),
            'posts_in_html'=> Post::latest()->Filter(request(['search','category','author']))
            ->paginate(4)->withQueryString(),
            
            
            'categories_in_html' => Category::all(),
            'currentCategory' => Category::where('id', request('category'))->first()
    
        ]);
    }
    
    public function show_one(Post $post)
    {
        return view('posts.show_one',[
            'post_in_html' => $post
        ]);
    }

    public function create_a_post(){

        // if (auth()->guest()) {
        //     abort(Response::HTTP_FORBIDDEN);
        // }

        // if (auth()->user()->username != 'dreamlight7274'){
        //     abort(Response::HTTP_FORBIDDEN);
        // }

        return view('posts.create_post');
    }

    public function post_store_to_db(){
        // $path = request()->file('thumbnail')->store('thumbnails');
        // return 'done'. $path;

        
        $attributes = request()->validate([
            'category_id' => ['required', Rule::exists('categories','id')],
            'title' => 'required',
            'thumbnail' => 'required|image',
            'excerpt' => 'required',
            'body' => 'required'
            
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);
        





        

        
        

        // Post::create([
        //     'user_id'=> auth()->id(),
        //     'category_id' => request('category_id'),
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]);
        // Post::create([

        //     'title' => $attributes['title']

        // ]);
        return redirect('/post');
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
