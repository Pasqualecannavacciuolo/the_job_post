<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function show(): View
    {
        return view('auth.register');
    }

    public function register()
    {
        // Validation
        $validatedAttributes = request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);
        // Register user
        $user = User::create($validatedAttributes);
        // Log in User
        Auth::login($user);
        // Redirect
        return redirect('/');
    }
}
