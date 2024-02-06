<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Auth extends Controller
{
    public function login(Request $request)
    {
        $this->data->title('Login');
        if($request->isMethod('GET')) return $this->load('auth.login');
        if($request->isMethod('POST'))
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $credentials = $request->only('email', 'password');
            if(auth()->attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect()->route('home');
            }
            return back()->withErrors([
                'general' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function register(Request $request)
    {
        if($request->isMethod('GET')) return $this->load('auth.register');
        if($request->isMethod('POST'))
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]);

            $credentials = $request->only('name', 'email', 'password');
            $credentials['password'] = Hash::make($credentials['password']);
            $user = User::create($credentials);
            
            auth()->login($user);
            $request->session()->regenerate();
            return redirect()->route('home');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
