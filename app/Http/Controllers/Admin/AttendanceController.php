<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Attendancedate;
use App\Models\Attendanceuser;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AttendanceController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $att = Attendancedate::orderBy('date','desc')->get() ;
    //     return view('admin.attendance.index',compact('att'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     $user = User::
    //     select('users.id','users.name')
    //     ->join("role_user", "role_user.user_id", "=", "users.id")
    //     ->join("roles", "roles.id", "=", "role_user.role_id")
    //     ->where('roles.name','=','User')
    //     ->get();
    //     $date = Carbon::now()->format('Y-m-d');
    //     return view('admin.attendance.create',compact('user','date'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {

    //     $date= new Attendancedate();
    //     $date->date = $request->date;
    //     $date->save();

    //     if($date){
    //         $arr = $request->atten;

    //         for($i=0;$i<count($arr);$i++){
    //             $aa = new Attendanceuser();
    //             $aa->att_id = $date->id;
    //             $aa->present1 = 1;
    //             $aa->user_id = $arr[$i];
    //             $aa->save();
    //         }
    //         return redirect()->back();
    //     }else{
    //         return redirect()->back();
    //     }



    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $aa = Attendanceuser::
    //     select('users.id')
    //     ->join('users','users.id','=','attendanceusers.user_id')
    //     ->where('att_id','=',$id)->get();
    //     $atdate = Attendancedate::where('id','=',$id)->first();
    //     $user = User::
    //     select('users.id','users.name')
    //     ->join("role_user", "role_user.user_id", "=", "users.id")
    //     ->join("roles", "roles.id", "=", "role_user.role_id")
    //     ->where('roles.name','=','User')
    //     ->get();
    //     return view('admin.attendance.edit', compact('user','id','aa','atdate'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     Attendanceuser::where('att_id','=',$id)->delete();

    //     $arr = $request->atten;

    //     for($i=0;$i<count($arr);$i++){
    //         $aa = new Attendanceuser();
    //         $aa->att_id = $id;
    //         $aa->present1 = 1;
    //         $aa->user_id = $arr[$i];
    //         $aa->save();
    //     }

    //     return redirect()->back();
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id, Request $request)
    // {
    //     Attendanceuser::where('att_id','=',$id)->delete();
    //     Attendancedate::where('id','=',$id)->delete();
    //     $request->session()->flash('error','You have deleted the row successfully.');
    //     return redirect()->back();
    // }
}
