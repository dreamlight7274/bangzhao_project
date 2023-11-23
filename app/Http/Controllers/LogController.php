<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function clean_the_session(){
        auth()->logout();
        return redirect('/post')->with('success','See you next time');
    }
}
