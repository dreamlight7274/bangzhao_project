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
}
