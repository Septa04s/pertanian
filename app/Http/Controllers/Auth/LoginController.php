<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember_me = $request->has('remember_me') ? true : false;

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if (!Auth::user()->hasVerifiedEmail()) {
            //     Auth::logout();
            //     return redirect()->route('verification.notice')
            //         ->with('message', 'You need to verify your email address.');
            // }
            $request->session()->regenerate();

            // if (Auth::user()->hasRole('admin')) {
            //     return redirect()->route('dashboard');
            // }

            // if (Auth::user()->hasRole('kadis')) {
            //     return redirect()->route('dashboard');
            // }

            return redirect()->route('home');
        }
    }
}
