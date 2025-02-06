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
            'login' => 'required|string|max:30|unique:users,login',
            'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/',
            'password_confirmation' => 'required_with:password|same:password|min:8',
            'phone_number' => 'nullable|string|max:15|unique:users,phone_number',
        ], [
            'login.unique' => 'Le login est déjà utilisé. Veuillez en choisir un autre.',
            'phone_number.unique' => 'Le numéro de téléphone est déjà associé à un autre compte. Veuillez en fournir un autre.',
            'password.regex' => 'au moins une majuscule, un caractère spécial, un chiffre et de taille 8.',
            'password.min' => 'Le mot de passe doit comporter au moins 8 caractères.',
            'password_confirmation.same' => 'Les mots de passe ne correspondent pas.',
            'password_confirmation.min' => 'La confirmation du mot de passe doit comporter au moins 8 caractères.',
        ]);
    
        $user = new User();
        $user->login = $validated['login'];
        $user->password = Hash::make($validated['password']);
        $user->phone_number = $validated['phone_number'] ?? null;
        $user->save();
    
        // Redirection vers la page après l'enregistrement
    return redirect()->route('page')->with('etat', 'Votre compte a bien été créé.');
    }
    

    public function formLogin() {
        return view('login');
    }

    public function login(Request $request)
{
    $request->validate([
        'login_or_phone' => 'required|string',  // Validation du champ de login ou téléphone
        'password' => 'required|string'
    ]);

    // Recherche de l'utilisateur soit par login, soit par numéro de téléphone
    $user = User::where('login', $request->input('login_or_phone'))
                ->orWhere('phone_number', $request->input('login_or_phone'))
                ->first();

    if ($user && Hash::check($request->input('password'), $user->password)) {
        Auth::login($user); // Authentification de l'utilisateur
        $request->session()->regenerate();  // Sécurisation de la session
        return redirect()->route('page');  // Redirection vers la page après connexion
    }

    // Si la connexion échoue, renvoyer un message d'erreur
    return back()->withErrors(['account' => 'Le compte n\'existe pas ou le mot de passe est incorrect.']);
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
