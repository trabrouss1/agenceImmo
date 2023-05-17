<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        // User::create([
        //     'name' => 'Toumani',
        //     'email' => 'tou27@gmail.com',
        //     'password' => Hash::make("aze000")
        // ]);
        return view('auth.login');
    }

    public function doLogin(AuthFormRequest $request)
    {
        $credentials = $request->validated();
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.property.index'));
        }

        return back()->withErrors([
            'email' => "Identifiants incorrect"
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login')->with('success', 'Vous êtes maintenant dèconnecté.');
    }
}