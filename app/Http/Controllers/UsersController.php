<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index_the_users(){
        return view('admin.admin_users', [
            'users_in_html' => User::paginate(60)

        ]);

    }

    public function delete_the_user(User $user){
        $user->delete();
        return back()->with('success','user delete');

    }

    public function edit_the_user(User $user){
        return view('admin.edit_user', [
            'user_in_html' => $user

        ]);


    }

    public function change_the_level(User $user){
        $attributes = request()->validate([

            'level' => 'required',
        ]);
        $user->update($attributes);
        return redirect('/admin/user/index')->with('success','user level has been changed');

        


    }





}
