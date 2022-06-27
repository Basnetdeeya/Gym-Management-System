<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Packageuser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
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
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'phone' => $input['phone'],
            'gender' => $input['gender'],
            'address' => $input['address'],
            'dob' => $input['dob'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

            $package = new Packageuser;
            $package->user_id = $user->id;
            $package->package_id = $input['pkg'];
            $package->validtill = Carbon::now()->addDays(30);
            if(isset($input['paid'])){
                $package->paid = 1;
            }else{
                $package->paid = 0;
            }
            $package->save();

        return $user;


    }

    public function setBirthDateAttribute($value){
        $this->attributes['dob'] = Carbon::createFromFormat('m/d/Y',$value)->format('Y-m-d');
    }

    // public function gettBirthDateAttribute(){
    //     return Carbon::createFromFormat('Y-m-d', $this->attributes['dob'])->format('m/d/Y');
    // }
}
