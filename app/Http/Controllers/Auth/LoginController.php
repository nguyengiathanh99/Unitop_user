<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(LoginRequest $request)
    {
        $data = [
            'name' => $request['login_username'],
            'password' => $request['login_password'],
        ];
        if (Auth::attempt($data)) {
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Username or Password is incorrect');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
