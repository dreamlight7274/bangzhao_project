<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function edit_basic_info(User $user){
        
        
        return view('user.edit_basic_info',

        
        ['user_in_html' => $user]
        
    );
}
    public function update_basic_info(User $user){
        $attributes = request()->validate([
            // if something is no need to change use Rule::unique('table','slug')->ignore($entity->attribute)

            // 'category_id' => ['required', Rule::exists('categories','id')],
            'name' => 'required',
            'username' => 'required|max:100',
            'email' => 'required|email',
            'portrait' => 'image'
            
        ]);

        if(isset($attributes['portrait'])){
            $attributes['portrait'] = request()->file('portrait')->store('portraits');
        }

        $user->update($attributes);
        return redirect('/user/personal/'. $user->id)->with('success','update personal information successfully');
        




    }

    public function user_delete_the_account(User $user){
        
        
        $user->delete();
        auth()->logout();
        return redirect('/post')->with('success','account delete, we are looking forward to seeing you again');
        

    }
    public function modify_password(User $user){
        return view('user.modify_password',

        
        ['user_in_html' => $user]
    );

    }

    public function password_update(User $user){
        $attributes = request()->validate([
            // if something is no need to change use Rule::unique('table','slug')->ignore($entity->attribute)

            // 'category_id' => ['required', Rule::exists('categories','id')],
            'password' => 'required|min:10',
            'password_confirm' => 'required|same:password'
            
        ]);
        $user->update(['password'=> Hash::make($attributes['password'])]);
        // update


        return redirect('/user/personal/'. $user->id)->with('success','update password successfully');
        




    }


}
