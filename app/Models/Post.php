<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'table_name';
    use HasFactory;
    // protected $guarded = ['attribute']; 
    // in this part, add something you don't want to use mass assignment.

    protected $fillable = ['title','excerpt','body'];

    protected $with = ['category','user'];

    // public function scopeFilter($query){
    //     if (request('search')){
    //         $query->where('title','like','%'. request('search'). '%')
    //          ->orWhere('body', 'like', '%'.request('search').'%');
    //     }
    // }

    public function scopeFilter($query, array $filters){
        // $query->when($filters['search'] ?? false, function($query, $search) {
        //     $query->where('title', 'like', '%'.$search. '%');
        // });
        $query->when($filters['search'] ?? false, fn($query, $search) => 
        $query->where(fn($query) =>
        $query->where('title', 'like', '%'.$search. '%')
        )
        
        );


        // if ($filters['search'] ?? false){
        //     $query->where('title','like','%'. request('search'). '%');
        //     //  ->orWhere('body', 'like', '%'.request('search').'%');
        // }
        $query->when($filters['category'] ?? false, function($query, $category) {
            // $query->from('categories')->whereColumn('categories.id', 'posts.category_id') //add the column, or  it will use string
            //                           ->where('categories.slug', $category);
            $query->whereHas('category', fn($query)=> $query->where('id', $category));
        });

        $query->when($filters['author'] ?? false, function($query, $author) {

            $query->whereHas('user', fn($query)=> $query->where('username', $author));
        });
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
    // this is another way to design the key for route to find the data

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    // public function author() // if you want to give another name of this method. use add the foreign key
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
