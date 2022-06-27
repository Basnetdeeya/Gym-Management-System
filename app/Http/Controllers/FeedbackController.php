<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
        // Create feedback Form
        public function createFormFeedback(Request $request) {
            return view('frontend.feedback');
          }
          // Store feedback Form data
          public function FeedbackForm(Request $request) {
              // Form validation
              $this->validate($request, [
                  'feedbacktype' => 'required',
                  'feedbackmessage' => 'required',
                  'name' => 'required',
                  'email' => 'required|email',
                  'date' => 'required',
                  'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

               ]);
              //  Store data in database
              Feedback::create($request->all());
              //
              return back()->with('success', 'We have received your feedback message and would like to thank you for writing to us.');
          }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
