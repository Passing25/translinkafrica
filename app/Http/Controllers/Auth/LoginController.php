<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index() {
        return view('pages.auth.login');
    }

    public function connecter(Request $request) {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'required' => 'Ce champ est obligatoire',
                'email' => "L'adresse email est incorrect"
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return redirect()->back()->with('error', 'Adress email ou mot de passe incorrect');
    }
}
