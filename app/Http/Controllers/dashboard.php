<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        $totalComplain = complaint::where('email',session('user')[0]->email)->get();
        return view('dashboard.index',[
            'totalComplain' => $totalComplain,
        ]);
    }
}
