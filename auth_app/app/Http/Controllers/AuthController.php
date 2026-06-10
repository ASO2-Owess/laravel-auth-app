<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //afficher la page de connexion
    public function showLogin(){
        return view('auth.login');
    }


    // traiter le formulaire de connexion

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Ces identifiants ne correspondent a aucun compte.',
        ]);
    }

    // afficher la page d'inscription
    public function showRegister(){
        return view('auth.register');
    }

    // traiter le formulaire d'inscription
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
                ]);

                Auth::login($user);
                return redirect()->route('dashboard');
    }

    // deconnexion
    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Auth::logout();
        return redirect()->route('login');
    }

    // dashboard proteger
    public function dashboard(){
        return view('dashboard');
    }
}
