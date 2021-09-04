<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use App\Models\user;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalComplain = user::find(session('user')[0]->id)->complaint;
        return view('dashboard.complain.index', [
            'totalComplain' => $totalComplain,
        ]);
    }


    public function complainReply($complaint)
    {
        // getting this Compalnt reply from database
        $query = complaint::find($complaint)->complaintReply;
        return view('dashboard.complain.viewReply', [
            'viewReply' => $query,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.complain.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new complaint();
        $task->user_id = session('user')[0]->id;
        $task->subject = $request->input('subject');
        $task->staff = $request->input('staff');
        $task->value = $request->input('message');
        $task->status = "Pending";
        $task->save();
        return redirect()->back()->with('message', 'Sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show(complaint $complaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, complaint $complaint)
    {
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(complaint $complaint)
    {
        //
    }
}
