<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function show(): View
    {
        return view('auth.login');
    }

    public function login()
    {
        // Validate
        $validatedAttributes = request()->validate([
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::default()]
        ]);
        // Attempt to log in the user
        if (!Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                'attempt' => 'Credenziali errate, ricontrolla i campi di input e ritenta.'
            ]);
        }
        // regenerate session token
        request()->session()->regenerate();
        // Redirect
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
