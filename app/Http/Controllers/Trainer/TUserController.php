<?php

namespace App\Http\Controllers\Trainer;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Packageuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class TUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Role::where('id', 3)->first()->users()->get();
        $i=1;
        $pkgs = Packageuser::
        select('packages.type','packages.amount','packageusers.*')
        ->join("packages", "packages.id", "=", "packageusers.package_id")
        ->get();
        return view('trainer.member.index', compact('users','i','pkgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $users = new User();
        // return view('trainer.member.create',['roles'=>Role::all()],compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {

        // $newUser = new CreateNewUser;
        // $users = $newUser->create($request->only(['name', 'phone', 'gender', 'address', 'dob', 'email', 'password', 'password_confirmation']));

        // $users->roles()->sync($request->roles);
        // Password::sendResetLink($request->only(['email']));
        // $request->session()->flash('success','New User Added Successfully');

        // return redirect()->back();
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
        return view('trainer.member.edit',['roles'=>Role::all()],compact('users'));
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
        return redirect()->back();



        // $members = Member::find($id);
        // $members->name = $request->name;
        // $members->email = $request->email;
        // $members->phone = $request->phone;
        // $members->location = $request->location;
        // $members->map = $request->map;
        // if($request->hasFile('logo')){
        //     $fileName = $request->logo;
        //     $newName = time() . $fileName->getClientOriginalName();
        //     $fileName->move('members',$newName);
        //     $members->logo = 'members/' . $newName;
        // }
        // $members->update();
        // $request->session()->flash('message','Record Update');
        // return redirect()->back();
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
