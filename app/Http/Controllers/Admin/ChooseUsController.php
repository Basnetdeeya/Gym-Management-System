<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChooseUs;
use Illuminate\Http\Request;

class ChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chooseus = ChooseUs::get()->all();
        $i=1;
        return view('admin.whychooseus.index',compact('chooseus','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chooseus = new ChooseUs();
        return view('admin.whychooseus.create',compact('chooseus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chooseus = new ChooseUs();
        $chooseus->title = $request->title;
        $chooseus->description = $request->description;
        $chooseus->save();
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
        $chooseus = ChooseUs::find($id);
        return view('admin.whychooseus.edit', compact('chooseus'));
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
        $chooseus = ChooseUs::findOrFail($id);
        $chooseus->title = $request->title;
        $chooseus->description = $request->description;
        $chooseus->update();
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
        ChooseUs::destroy($id);
        $request->session()->flash('error','You have deleted the row successfully.');
        return redirect()->back();
    }
}
