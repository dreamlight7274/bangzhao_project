<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LogController extends Controller
{
    public function clean_the_session(){
        auth()->logout();
        return redirect('/post')->with('success','See you next time');
    }

    public function log_in_account(){
        return view('login.log_in_account');
    }

    public function save_account_in_session(){
        // add the message to session, oh, check first
        $attributes = request()->validate([
            'username' => 'required',
            // 'email' => 'required|email', // exists, but it will tell people someone have registered.
            'password' => 'required'

        ]);
        if (! auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'something_wrong'=> 'There is something wrong with your username or password.'
                
            ]);
            

        }
// two approaches about the error message
        // return back()->withInput()
        //              ->withErrors(['email'=> 'There is something wrong with your email or password.',
                                   
        //             ]);
        
        session()->regenerate(); // keep safe, so regenerate the session id

        return redirect('/post')->with('success','Welcome back'); 

        



    }
}
