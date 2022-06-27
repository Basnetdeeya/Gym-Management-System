<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Feedbackforusers;
use App\Models\Packageuser;
use App\Models\User;
use App\Notifications\sendNotification;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function authenticate(Request $request) {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('frontend.home');

        } else {
            session()->flash('error', 'Email or Password is incorrect');
            return back()->withInput($request->only('email'));
        };
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function register($id)
    {

        return view('auth.register');
    }

    public function profile()
    {
        return view('frontend.profile');
    }

    public function feedback()
    {
        return view('frontend.feedback');
    }

    public function changepassword()
    {
        return view('auth.passwords.email');
    }
    public function notification()
    {
        $id = auth()->user()->id;
        $feedback = Feedbackforusers::where('user_id','=',$id)->orderBy('created_at', 'DESC')->get();
        return view('frontend.notification',compact('feedback'));
    }

    public function sendFeedback(Request $request)
    {
        $feed = new Feedbackforusers();
        $feed->user_id = $request->id;
        $feed->feedback = $request->feedback;
        $feed->save();

        $users = User::find($request->id);
        $enrollmentData = [
            'body' => 'Hello there,',
            'enrollmentText' => $request->feedback,
            'url'=>url('/'),
            'thankyou'=> 'Best Regards, Gym' 
        ];
        $users->notify(new sendNotification($enrollmentData));

        return redirect()->back();
    }

    public function validatepayment(Request $request){
        $feed = Packageuser::find($request->id);
        $feed->verified = 1;
        $feed->save();
        return redirect()->back();
    }
}
