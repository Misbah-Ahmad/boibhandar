<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Social Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for using social accounts.
    |
    */


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dash';

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
     * Redirect the user to the authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Provider (SocialSites).
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {

        try {

            $user = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            logger('Web - Third Party Signin Exception: ' . $e->getMessage() . '\nStack Trace: ' . $e->getTraceAsString());
            return redirect('/login');
        }
        logger('user from provider: ' . json_encode($user));
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // log them in

            logger('Existing user: ' . json_encode($existingUser));

            auth()->login($existingUser);

            return redirect()->intended($this->redirectTo);
        } else {
            // create a new user

            $first_name = ucwords(strtolower(explode(" ", $user->name)[0]));

            $name_array = explode(" ", $user->name);

            array_shift($name_array);

            $last_name = ucwords(strtolower(implode(" ", $name_array)));

            try {
                $newUser = User::create([
                    'title' => null,
                    'fname' => $first_name,
                    'sname' => $last_name,
                    'email' => $user->email,
                    'phone' => null,
                    'password' => "",
                    'google_id' => $provider == 'google' ? $user->id : null,
                    'fb_id' => $provider == 'facebook' ? $user->id : null,
                    'email_verified_at' => date('Y-m-d h:i:s', time()),
                ]);

                auth()->login($newUser);

                return redirect()->intended($this->redirectTo);
            } catch (\Exception $e) {
                logger('Web - Third Party Signin Exception: ' . $e->getMessage() . '\nStack Trace: ' . $e->getTraceAsString());
                return redirect('/login');
            }
        }

        return redirect('/login');
    }
}
