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
        $validated = $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|string|exists:students',
            'password' => 'required|string',
        ]);
        // checking if user is exist in student
        $task = new user();
        $task->fname = $request->input('fname');
        $task->lname = $request->input('lname');
        $task->email = $request->input('email');
        $task->password = $request->input('password');
        $task->father = $request->input('father');
        $task->mobile = $request->input('mobile');
        $task->address = $request->input('address');
        $task->classNumber = $request->input('classNumber');
        $task->class = $request->input('class');
        $task->save();
        return redirect()->route('login')->with('message', 'New Student Created Successfully');
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
            return redirect()->back()->with('message', 'No User Found');
        }
        // checking if user password is Correct
        if ($request->input('password') != $query[0]->password) {
            return redirect()->back()->with('message', 'Invalid Password');
        }
        // storing session
        session(['user' => $query]);
        return redirect()->route('dashboard');
    }
    
    // Logout
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect(route('login'));
    }
}
