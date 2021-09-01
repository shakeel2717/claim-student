<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use App\Models\student;
use Illuminate\Http\Request;

class adminDashboard extends Controller
{
    public function index()
    {
        $totalComplain = complaint::get();
        $totalStudent = student::get();
        return view('admin.dashboard.index', [
            'totalComplain' => $totalComplain,
            'totalStudent' => $totalStudent,
        ]);
    }

    public function complainIndex()
    {
        $totalComplain = complaint::get();
        return view('admin.dashboard.complain.index', [
            'totalComplain' => $totalComplain,
        ]);
    }


    public function complaintUpdate($complaint,$status)
    {
        $task = complaint::findOrFail($complaint);
        $task->status = strtoupper($status);
        $task->save();
        return redirect()->back()->with('message', 'Status Changed Successfully');
    }
}
