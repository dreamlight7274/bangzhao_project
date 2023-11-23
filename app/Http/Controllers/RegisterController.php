<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create_account(){
        return view('register.create_account');
    }

    public function store_to_db(){
        $attributes = request()->validate([
            'name'=> 'required|max:100',
            'username'=> 'required|max:100|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|min:10'
            // 'password'=> ['required','min:10','max:100']
        ]);
        $user = User::create($attributes); 

        session()->flash('success','Hi, You have created your account successfully');

        auth()->login($user);

        return redirect('/post');
        // return redirect('post')->with('success','successfully');
        // another choice
    }
}
