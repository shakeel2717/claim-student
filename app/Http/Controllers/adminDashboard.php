<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use App\Models\complaintReply;
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


    public function complaintReply($complaint)
    {
        $complaint = complaint::findOrFail($complaint);
        return view('admin.dashboard.complain.reply',[
            'complaint' => $complaint,
        ]);
    }

    public function complaintReplyReq(Request $request)
    {
        $task = new complaintReply();
        $task->complaint_id = $request->input('complaint_id');
        $task->value = $request->input('value');
        $task->save();

        // chaing the status of Complain to reply
        $task = complaint::find($request->input('complaint_id'));
        $task->status = "Reply";
        $task->save();
        return redirect()->back()->with('message', 'Reply Sent Successfully');
    }
}