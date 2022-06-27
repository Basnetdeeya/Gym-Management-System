<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhatProvide;
use Illuminate\Http\Request;

class WhatProvideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provide = WhatProvide::get()->all();
        $i=1;
        return view('admin.whatweprovide.index',compact('provide','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provide = new WhatProvide();
        return view('admin.whatweprovide.create',compact('provide'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provide = new WhatProvide();
        if($request->hasFile('serviceimage')){
            $fileName = $request->serviceimage;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('serviceimage/',$newName);
            $provide->serviceimage = 'serviceimage/' . $newName;
        }
        $provide->title = $request->title;
        $provide->description = $request->description;
        $provide->save();
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
        $provide = WhatProvide::find($id);
        return view('admin.whatweprovide.edit', compact('provide'));
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
        $provide = WhatProvide::findOrFail($id);
        $provide->title = $request->title;
        $provide->description = $request->description;
        $provide->update();
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
        WhatProvide::destroy($id);
        $request->session()->flash('error','You have deleted the row successfully.');
        return redirect()->back();
    }
}
