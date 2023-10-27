<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post{

    public $title;

    public $excerpt;

    public $date;

    public $body;

    public function __construct($title, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }
    public static function all()
    {
        $files =  File::files(resource_path("posts/"));
        return array_map(function ($file) {
            return $file->getContents();
        }, $files);


    }
    public static function find($post_input){
        //if (! file_exists($path=  __DIR__ . "/../resources/posts/{$post_input}.html")){
        if(! file_exists($path = resource_path("posts/{$post_input}.html"))) {   
                //dd("file does not exit");
                //   abort(404);
                //return redirect('/');
                throw new ModelNotFoundException();
        
        
             }
        return  cache()->remember("post.{$post_input}",now()->addSeconds(6), fn() => file_get_contents($path));
    // $post =  cache()->remember("post.{$post_input}",now()->addMinutes(5), function() use($path){
    //     var_dump("It's file in the cache");
    //     return file_get_contents($path);

    //  });
        

    }

}