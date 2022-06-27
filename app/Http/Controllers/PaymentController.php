<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function create(Request $input)
    {
        $input->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'date'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            // 'password' => $this->passwordRules(),
        ]);

        User::create([
            'name' => $input['name'],
            'phone' => $input['phone'],
            'gender' => $input['gender'],
            'address' => $input['address'],
            'dob' => $input['dob'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        return 'hello world';
        return view('frontend.payment');


    }


    public function verification(Request $request)
    {
        //hit the khalit server
        $args = http_build_query(array(
            'token' => $request->input('trans_token'),
            'amount'  => $request->input('amount')
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $headers = ['Authorization: Key test_secret_key_90df94c93e484414b5dc9f9f5d1dc6c9'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response = curl_exec($ch);
        // dd($response); //see the response from khalti server
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $res = json_decode($response, true);//decode the response
        if(isset($res['idx']))  //check whether there is idx and also the amount in response with your database(I havenot done that)
        {
            //perform your database operation here,,,
            return response()->json([  //returns success to ajax
                'success' => 'Your Account is succesfully credited.',
            ], 200);

        }else{

            return response()->json([ //returns failure to ajax
                'error' => 'Something went Wrong.',
            ], 404);
        }

    }
}
