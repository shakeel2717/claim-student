<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use App\Models\user;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        $totalComplain = user::find(session('user')[0]->id)->complaint;
        return view('dashboard.index', [
            'totalComplain' => $totalComplain,
        ]);
    }
}
