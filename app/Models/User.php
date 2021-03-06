<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'gender',
        'address',
        'dob',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setBirthDateAttribute($value){
        $this->attributes['dob'] = Carbon::createFromFormat('m/d/Y',$value)->format('Y-m-d');
    }

    // public function gettBirthDateAttribute(){
    //     return Carbon::createFromFormat('Y-m-d', $this->attributes['dob'])->format('m/d/Y');
    // }



    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    /**
     * Check if the user has a role
     * @param string $role
     * @return bool
     */
    public function hasAnyRole( string $role){
        return null !== $this->roles()->where('name', $role)->first();
    }

    /**
     * Check if the user has any given role
     * @param array $role
     * @return bool
     */
    public function hasAnyRoles(array $role){
        return null !== $this->roles()->whereIn('name', $role)->first();
    }
}
