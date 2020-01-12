<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Organizer;
use App\Attendee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo ='/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'userType' =>['required'],
            'phoneNumber' =>['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8',],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if ($data['userType'] == 1) {


        $user = User::create([
            'email' => $data['email'],
            'userType' =>$data['userType'],
            'phoneNumber' => $data['phoneNumber'],
            'password' => Hash::make($data['password']),
        ])->id;
        $organizer = Organizer::create([
            'user_id'=> $user,
            'companyName' => $data['companyName'],
            'companyEmail' => $data['companyEmail'],
            'companyCountry' => $data['companyCountry'],
            'companyPhoneNumber' => $data['companyPhoneNumber'],
            'companyPhoneNumber2' => $data['companyPhoneNumber2'],
            'companyProfile' => $data['companyProfile'],
            ]);
        return($organizer);
        }
        elseif ($data['userType'] == 2) {
        $user = User::create([
            'email' => $data['email'],
            'userType' =>$data['userType'],
            'phoneNumber' => $data['phoneNumber'],
            'password' => Hash::make($data['password']),
        ])->id;
        $attendee = Attendee::create([
            'user_id'=> $user,
            'name' => $data['name'],
            ]);
        }
        else{}

    }
}
