<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/post', function () {
    // \Illuminate\Support\Facades\DB::listen(function ($query){
    //     logger($query->sql, $query->bindings);

    // });
    // $posts = Post::all();
    
    // $document = YamlFrontMatter::parseFile(
    //     resource_path('posts/post1.html')
    // );
    // $document = YamlFrontMatter::parseFile(
    //     resource_path('posts/post1.html')
    // );
    // ddd($document);
    // return view('post', [
    //     // 'posts' => $posts
    //     'posts' => Post::all()
    // ]);


          // collection approach
    // $files = File::files(resource_path("posts"));
    // $posts = [];
    // $posts = collect($files)
    //     ->map(function ($file){
    //         $document = YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $document->title,
    //         $document->link,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body()
    //     );

    //     });

    
        //array approach
    // $posts = array_map(function ($file){
    //     $document = YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $document->title,
    //         $document->link,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body()
    //     );

    // }, $files);

    // another way to get all the contents

    // foreach ($files as $file) {
    //     $document = YamlFrontMatter::parseFile($file);

        // $posts[] = new Post(
        //     $document->title,
        //     $document->link,
        //     $document->excerpt,
        //     $document->date,
        //     $document->body()

    //     );
    // }
    // ddd($posts[0]->excerpt);


    // all of them as been removed to controller
    //     $posts = Post::latest();
    // if (request('search')){
    //         $posts->where('title','like','%'. request('search'). '%')
    //         ->orWhere('body', 'like', '%'.request('search').'%');
    //     }
    //     return view('post', [
        // 'posts_in_html'=> Post::all()
        // how many posts you have, how many sqls you will 
        // 'posts_in_html'=> Post::with('category')->get()
        // 'posts_in_html' => $posts->get(),
        // 'posts_in_html'=> Post::latest()->get(),  
        //->with('category','user'), we add it in model
        // 'categories_in_html' => Category::all()

    // ]);

// })->name('home');

Route::get('/post', [PostsController::class, 'index_with_rule'])->name('home');
Route::get('/post/{post}', [PostsController::class, 'show_one'])->whereAlphaNumeric('post');
Route::get('/register', [RegisterController::class, 'create']);


// if you want to use "Post $post" in function, the name in {} should be the same one."
// Route::get('/post/{post}', function ($post_input) {

    // if you don't wan to use default key: ID to find the post: write as below:
        // Route::get('/post/{post:slug(key you want to use to identity)}', function (Post $post) { equal to:  Post::where('slug', $post)->firstOrFall()
    
    
    // Route::get('/post/{post}', function (Post $post) {
    //$post = Post::find($post_input);
    // dd($post_input);


    // return view('subpost',[
        // 'post_in_html' => Post::find($post_input)
        //'post_in_html' => Post::find($post)
        
        
    //     'post_in_html' => $post
    // ]);
    // $path = __DIR__ . "/../resources/posts/{$post_input}.html";
    // //$post = file_get_contents(__DIR__ . "/../resources/posts/{$post_input}.html");

    //  if (! file_exists($path)){
    //       dd("file does not exit");
    //     //   abort(404);
    //     //   return redirect('/');


    //  }
    // $post =  cache()->remember("post.{$post_input}",now()->addMinutes(5), function() use($path){
    //     var_dump("It's file in the cache");
    //     return file_get_contents($path);

    //  });

    // return view('subpost', [
    //     'post_in_html'=> $post
    // ]);
// })->whereAlphaNumeric('post');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('categories/{category}', function (Category $category) {
//     return view('post', [
//         'posts_in_html'=> $category->posts, //->load(['category','user']) we add with in model
//         'currentCategory' => $category,
//         'categories_in_html' => Category::all()

//     ]); // make the select more efficient
// })->name('category');


// the route is the old one
// Route::get('authors/{user:username}', function (User $user) {
//     return view('posts.index_with_rule', [
//         'posts_in_html'=> $user->posts, //->load(['category','user'])
//         'categories' => Category::all()
//     ]);
// });

