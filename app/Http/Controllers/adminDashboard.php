<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use Illuminate\Http\Request;

class adminDashboard extends Controller
{
    public function index()
    {
        $totalComplain = complaint::get();
        return view('admin.dashboard.index',[
            'totalComplain' => $totalComplain,
        ]);
    }

    public function complainIndex()
    {
        $totalComplain = complaint::where('email',session('user')[0]->email)->get();
        return view('dashboard.complain.index',[
            'totalComplain' => $totalComplain,
        ]);
    }
}
