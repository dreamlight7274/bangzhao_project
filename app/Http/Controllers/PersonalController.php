<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function personal_page(User $user){
        $user_posts = $user->posts;
        return view('user.personal_info',

        
        ['user_in_html' => $user,
         'posts_of_user' => $user_posts
         
        
        ]
        
    );
    }
}
