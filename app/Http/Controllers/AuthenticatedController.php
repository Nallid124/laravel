<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthenticatedController extends Controller
{
    public function formRegister() {
        return view('register');
    }

    public function register(Request $request) {
        $validated = $request->validate([
            'login' => 'required|string|max:30|unique:users',
            'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/',
            'password_confirmation' => 'required_with:password|same:password|min:8'
        ]);
        $user = new User();
        $user->login = $validated['login'];
        $user->password = Hash::make($validated['password']);
        $user->save();
        return redirect('/')->with('etat', 'Votre demande de connection a bien été reçue.');
    }

    public function formLogin() {
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string'
        ]);
        $credentials = ['login' => $request->input('login'),
                        'password' => $request->input('password')];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('page');
        }
        return back()->withErrors(['account' => 'Le compte n\'existe pas !']);
    }

    public function page() {
        return view('page');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('etat', 'Vous vous êtes déconnecté !');
    }
}
