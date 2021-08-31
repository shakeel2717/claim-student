<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class auth extends Controller
{
    public function register()
    {
        return view('auth.register');
    }


    public function regsiterReq(Request $request)
    {
        $task = new user();
        $task->fname = $request->input('fname');
        $task->lname = $request->input('lname');
        $task->email = $request->input('email');
        $task->password = $request->input('password');
        $task->save();
        return redirect()->route('login');
    }


    public function login()
    {
        return view('auth.login');
    }


    public function loginReq(Request $request)
    {
        // checking if user email is exist in database
        $query = user::where('email', $request->input('email'))->get();
        if (count($query) < 1) {
            return "No User Found";
        }
        // checking if user password is Correct
        if ($request->input('password') != $query[0]->password) {
            return "Invalid Password";
        }
        // storing session
        session(['user' => $query]);
        return redirect()->route('dashboard');
    }
}
