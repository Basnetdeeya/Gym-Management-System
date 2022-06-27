<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Package;
use App\Models\Packageuser;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Password;


class MemberController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all( );
        $i=1;
        return view('admin.member.index', compact('users','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = new User();
        return view('admin.member.create',['roles'=>Role::all()],compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:10|min:10',
            'gender' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);
        $newUser = new CreateNewUser;
        $users = $newUser->create($request->only(['name', 'phone', 'gender', 'address', 'dob', 'email', 'password', 'password_confirmation']));

        $users->roles()->sync($request->roles);
        Password::sendResetLink($request->only(['email']));
        $request->session()->flash('success','New User Added Successfully');

        return redirect()->route('admin.member.index');
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
        return view('admin.member.edit',['roles'=>Role::all()],compact('users'));
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
            $request->session()->flash('error','You cannot edit this user.');
            return redirect()->back();
        }
        $users->update($request->except(['_token', 'roles']));
        $users->roles()->sync($request->roles);
        $request->session()->flash('success','Record Updated Successfully');
        return redirect()->route('admin.member.index');
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
        $request->session()->flash('error','You have deleted the user successfully.');
        return redirect()->back();

    }
}
