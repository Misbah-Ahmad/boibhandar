<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
    protected $redirectTo = '/email/verify';

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
     * Override origin showRegistrationForm() method of RegistersUsers Trait
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $data = [
            'login_tab' => '',
            'login_show' => '',
            'register_tab' => 'active',
            'register_show' => 'show',
        ];



        if(old('form', '') == 'login') 
        {
            $data = [
                'register_tab' => '',
                'register_show' => '',
                'login_tab' => 'active',
                'login_show' => 'show',
            ];

        }
 
        return view('auth.login_register', $data);
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
            'g-recaptcha-response' => 'required|captcha',
            'title' => ['required', 'string', 'regex:/^(mr|ms)$/i'],
            'fname' => ['required', 'string', 'min:1', 'max:255'],
            'sname' => ['required', 'string', 'min:1', 'max:255'],
            'phone' => ['required', 'string', 'unique:users', 'regex:/^(01)[3-9]{1,1}[0-9]{8,8}$/i'],            
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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
        return User::create([
            'title' => $data['title'],
            'fname' => $data['fname'],
            'sname' => $data['sname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
