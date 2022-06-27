<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Collection;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Role::where('id', 2)->first()->users()->get();
        $i=1;
        return view('admin.trainers.index', compact('users','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = new User();
        return view('admin.trainers.create',['roles'=>Role::all()],compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $trainers = new Trainer();
        // $trainers->name = $request->name;
        // $trainers->phone = $request->phone;
        // $trainers->gender = $request->gender;
        // $trainers->address = $request->address;
        // $trainers->dob = $request->dob;
        // $trainers->doj = $request->doj;
        // $trainers->email = $request->email;
        // $trainers->password = $request->Hash::make($trainers['password']);
        // $trainers->save();
        // $request->session()->flash('message','Record Saved');
        // return redirect()->back();

        $newUser = new CreateNewUser;
        $users = $newUser->create($request->only(['name', 'phone', 'gender', 'address', 'dob', 'doj', 'email', 'password', 'password_confirmation']));

        $users->roles()->sync($request->roles);
        Password::sendResetLink($request->only(['email']));
        $request->session()->flash('success','New User Added Successfully');

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
        $users = User::find($id);
        return view('admin.trainers.edit',['roles'=>Role::all()],compact('users'));
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
        $users = User::findOrFail($id);
        if(!$users){
            $request->session()->flash('error','You cannot edit this trainer.');
            return redirect()->back();
        }
        $users->update($request->except(['_token', 'roles']));
        $users->roles()->sync($request->roles);
        $request->session()->flash('success','Record Updated Successfully');
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
        User::destroy($id);
        $request->session()->flash('error','You have deleted the trainer successfully.');
        return redirect()->back();
    }
}
