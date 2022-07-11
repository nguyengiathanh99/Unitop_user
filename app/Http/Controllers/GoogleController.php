<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleGoogleCallBack()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $findUser = User::where("google_id", $user->id)->first();
            if (!empty($findUser)) {
                Auth::login($findUser);
                return redirect('/');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('my-google'),
                ]);
                Auth::login($newUser);
                return redirect('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
