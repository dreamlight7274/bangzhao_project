<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostEditcontroller extends Controller
{
    public function index_the_posts(){
        return view('admin.admin_index', [
            'posts_in_html' => Post::paginate(50)

        ]);
    }

    public function edit_the_post(Post $post){
        return view('admin.edit_post',
        ['post_in_html' => $post]
        
    );


    }

    public function update_the_post(Post $post){
        $attributes = request()->validate([
            // if something is no need to change use Rule::unique('table','slug')->ignore($entity->attribute)

            'category_id' => ['required', Rule::exists('categories','id')],
            'title' => 'required',
            'thumbnail' => 'image',
            'excerpt' => 'required',
            'body' => 'required'
            
        ]);

        if(isset($attributes['thumbnail'])){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        


        $post->update($attributes);
        return back()->with('success','update successfully');


    }

    public function delete_the_post(Post $post){
        $post->delete();
        return back()->with('success','post delete');

    }
    
}
