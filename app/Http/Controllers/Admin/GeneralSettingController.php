<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = GeneralSettings::get()->all();
        return view('admin.settings.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $settings = new GeneralSettings();
        $settings->name = $request->name;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->location = $request->location;
        $settings->map = $request->map;
        if($request->hasFile('logo')){
            $fileName = $request->logo;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('generalsettings',$newName);
            $settings->logo = 'generalsettings/' . $newName;
        }
        $settings->save();
        $request->session()->flash('success','Settings Saved');
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
        $settings = GeneralSettings::findOrFail($id);
        return view('admin.settings.edit', compact('settings'));
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
        $settings = GeneralSettings::find($id);
        $settings->name = $request->name;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->location = $request->location;
        $settings->map = $request->map;
        if($request->hasFile('logo')){
            $fileName = $request->logo;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('generalsettings',$newName);
            $settings->logo = 'generalsettings/' . $newName;
        }
        $settings->update();
        $request->session()->flash('message','Record Update');
        return redirect()->back();
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
