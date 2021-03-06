<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/list';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'label' => 'max:255',
            'salutation' => 'max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'label' => $data['label'] ?? $data['name'],
            'salutation' => 'mr',
            'company' => '',
            'vatid' => '',
            'title' => '',
            'firstname' => '',
            'lastname' => '',
            'address1' => '',
            'address2' => '',
            'address3' => '',
            'postal' => '',
            'city' => '',
            'state' => '',
            'langid' => '',
            'countryid' => '',
            'telephone' => '',
            'telefax' => '',
            'website' => '',
            'longitude' => 0,
            'latitude' => 0,
            'birthday' => '2017-03-09',
            'vdate' => '2017-03-09',
            'status' => 1,
            'editor' => 'register:register',
        ]);
    }
}
