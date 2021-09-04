<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminAuth extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }


    public function loginReq(Request $request)
    {
        // checking if user email is exist in database
        $query = admin::where('username', $request->input('username'))->get();
        if (count($query) < 1) {
            return redirect()->back()->with('message', 'No Admin Found');
        }
        // checking if user password is Correct
        if ($request->input('password') != $query[0]->password) {
            return redirect()->back()->with('message', 'Invalid Admin Password');
        }
        // storing session
        session(['admin' => $query]);
        return redirect()->route('adminDashboard');
    }
}
