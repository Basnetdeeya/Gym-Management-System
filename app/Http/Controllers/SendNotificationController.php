<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\sendNotification;

class SendNotificationController extends Controller
{
    public function sendNotification(){

        $users = User::find(38);
        $enrollmentData = [
            'body' => 'zzzzzz',
            'enrollmentText' => 'zzzzzz',
            'url'=>url('/'),
            'thankyou'=> 'zzzz' 
        ];
        $users->notify(new sendNotification($enrollmentData));
    }
}
