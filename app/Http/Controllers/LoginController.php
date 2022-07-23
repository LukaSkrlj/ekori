<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Schema\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(!Auth::attempt($credentials)) {
            throw \Illuminate\Validation\ValidationException::withMessages(['email' => [__('auth.failed')]]);
        }
        return $request->user();
    }

    public function logout() {
        Auth::logout();
    }
}
