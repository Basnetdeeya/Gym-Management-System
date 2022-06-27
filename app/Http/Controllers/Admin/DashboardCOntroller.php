<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardCOntroller extends Controller
{
    public function admindashboard(){
        return view('admin.dashboard');
    }
    public function trainerdashboard(){
        return view('trainer.dashboard');
    }


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
        $memberCount = Role::where('id', 3)->first()->users()->get()->count();
        $trainerCount = Role::where('id', 2)->first()->users()->get()->count();
        return view('admin.dashboard', compact('schedule','memberCount','trainerCount'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        // $schedule = Schedule::
        // select('schedules.*','users.name')
        // ->join("users", "users.id", "=", "schedules.user_id")
        // ->get();
        // $memberCount = Role::where('id', 3)->first()->users()->get()->count();
        // return view('trainer.dashboard', compact('schedule','memberCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
