@extends('modele')

@section('titre', 'Se Connecter')

@section('content')
<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center bg-light">

    <!-- Message de session si présent -->
    @if(session('etat'))
        <div class="alert alert-success text-center w-50" role="alert">
            {{ session('etat') }}
        </div>
    @endif

    <!-- Image et titre -->
    <div class="text-center mb-5">
        <img src="{{ asset('image.png') }}" alt="Mon Logo" class="img-fluid rounded-circle shadow mb-4" style="width: 120px; height: 120px;">
        <h1 class="h3 fw-bold text-dark">Bienvenue</h1>
        <p class="text-muted">Veuillez vous connecter pour continuer</p>
    </div>

    <!-- Formulaire de Connexion -->
    <div class="card shadow-lg p-4 w-100" style="max-width: 400px;">
        <h2 class="text-center h4 fw-bold mb-4 text-primary">Se Connecter</h2>

        <form method="post">
            @csrf

            <!-- Champ Login ou Numéro de Téléphone -->
            <div class="mb-3">
                <label for="login_or_phone" class="form-label">Login ou Numéro de Téléphone :</label>
                <input type="text" name="login_or_phone" id="login_or_phone" 
                       class="form-control @error('login_or_phone') is-invalid @enderror" placeholder="Entrez votre login ou numéro de téléphone" value="{{ old('login_or_phone') }}">
                @error('login_or_phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Mot de Passe -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de Passe :</label>
                <input type="password" name="password" id="password" 
                       class="form-control @error('password') is-invalid @enderror" placeholder="Entrez votre mot de passe">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Bouton de Connexion -->
            <button type="submit" class="btn btn-primary w-100">Se Connecter</button>
        </form>

        <!-- Lien vers l'inscription -->
        <div class="mt-4 text-center">
            <p>Pas encore inscrit ? <a href="{{ route('register') }}" class="text-primary">Créez un compte</a></p>
        </div>
    </div>
</div>
@endsection

<!-- Ajout de styles personnalisés -->
@section('styles')
<style>
    body {
        background-color: #f8f9fa; /* Couleur de fond claire */
    }

    .card {
        border-radius: 10px; /* Arrondir les coins de la carte */
    }

    .btn-primary {
        background-color: #007bff; /* Couleur personnalisée pour le bouton */
        border: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Changer la couleur au survol */
    }

    .alert {
        border-radius: 8px;
        font-size: 1rem;
    }

    .invalid-feedback {
        font-size: 0.9rem;
        color: #dc3545; /* Couleur rouge pour les erreurs */
    }

    .rounded-circle {
        border: 3px solid #007bff; /* Bordure bleue autour de l'image */
    }

    .card-body {
        padding: 1.5rem;
    }

    .text-muted {
        font-size: 1rem;
    }

    .text-primary {
        color: #007bff;
    }

    .form-control {
        border-radius: 5px;
    }

    .form-label {
        font-weight: 600;
    }
</style>
@endsection
