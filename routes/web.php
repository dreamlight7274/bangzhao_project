<?php
use App\Models\Post;
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



Route::get('/post', function () {
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
        return view('post', [
        'posts_in_html'=> Post::all()
    ]);

});

Route::get('/post/{post}', function ($post_input) {
    //$post = Post::find($post_input);
    // dd($post_input);


    return view('subpost',[
        'post_in_html' => Post::find($post_input)
    ]);
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
})->whereAlphaNumeric('post');

Route::get('/', function () {
    return view('welcome');
});
