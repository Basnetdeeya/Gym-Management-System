<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::
        select('schedules.*','users.name')
        ->join("users", "users.id", "=", "schedules.user_id")
        ->get();
        return view('admin.schedule.index',compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::
        select('users.id','users.name')
        ->join("role_user", "role_user.user_id", "=", "users.id")
        ->join("roles", "roles.id", "=", "role_user.role_id")
        ->where('roles.name','=','Trainer')
        ->get();
        return view('admin.schedule.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new Schedule();
        $schedule->class = $request->class;
        $schedule->day = $request->day;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->des = $request->des;
        $schedule->benifits = $request->benifits;
        $schedule->user_id = $request->user_id;
        if($request->hasFile('image1')){
            $fileName = $request->image1;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('members',$newName);
            $schedule->image1 = 'members/' . $newName;
        }
        if($request->hasFile('image2')){
            $fileName = $request->image2;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('members',$newName);
            $schedule->image2 = 'members/' . $newName;
        }
        $schedule->save();
        $request->session()->flash('success','Record Saved');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::find($id);
        $user = User::
        select('users.id','users.name')
        ->join("role_user", "role_user.user_id", "=", "users.id")
        ->join("roles", "roles.id", "=", "role_user.role_id")
        ->where('roles.name','=','Trainer')
        ->get();
        return view('admin.schedule.edit', compact('schedule','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->class = $request->class;
        $schedule->day = $request->day;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->des = $request->des;
        $schedule->benifits = $request->benifits;
        $schedule->user_id = $request->user_id;
        if($request->hasFile('image1')){
            $fileName = $request->image1;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('members',$newName);
            $schedule->image1 = 'members/' . $newName;
        }
        if($request->hasFile('image2')){
            $fileName = $request->image2;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('members',$newName);
            $schedule->image2 = 'members/' . $newName;
        }
        $schedule->update();
        $request->session()->flash('success','Record Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Schedule::destroy($id);
        $request->session()->flash('error','You have deleted the row successfully.');
        return redirect()->back();
    }
}
