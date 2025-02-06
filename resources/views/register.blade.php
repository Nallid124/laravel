@extends('modele')

@section('titre', 'Inscription')

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
        <h1 class="h3 fw-bold text-dark">Créez votre Compte</h1>
        <p class="text-muted">Veuillez remplir le formulaire pour vous inscrire</p>
    </div>

    <!-- Formulaire d'Inscription -->
    <div class="card shadow-lg p-4 w-100" style="max-width: 400px;">
        <h2 class="text-center h4 fw-bold mb-4 text-primary">Créer un Compte</h2>

        <form method="post">
            @csrf

            <!-- Champ Login -->
            <div class="mb-3">
                <label for="login" class="form-label">Login :</label>
                <input type="text" name="login" id="login" value="{{ old('login') }}" 
                       class="form-control @error('login') is-invalid @enderror" placeholder="Entrez votre login">
                @error('login')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Numéro de Téléphone -->
            <div class="mb-3">
                <label for="phone_number" class="form-label">Numéro de Téléphone :</label>
                <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" 
                       class="form-control @error('phone_number') is-invalid @enderror" placeholder="Entrez votre numéro de téléphone">
                @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Mot de Passe -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de Passe :</label>
                <input type="password" name="password" id="password" 
                       class="form-control @error('password') is-invalid @enderror" placeholder="Entrez votre mot de passe">
                <small class="form-text text-muted">
                    Au moins une majuscule, un chiffre, un caractère spécial et de taille 8.
                </small>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Confirmation du Mot de Passe -->
            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Confirmation du Mot de Passe :</label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                       class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmez votre mot de passe">
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Bouton Soumettre -->
            <button type="submit" class="btn btn-primary w-100">Créer un Compte</button>
        </form>

        <!-- Lien vers la page de connexion avec le même style que la page de login -->
        <div class="mt-4 text-center">
            <p>Compte déjà existant ? <a href="{{ route('login') }}" class="text-primary">Se connecter</a></p>
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

    .btn-success {
        background-color: #28a745; /* Couleur personnalisée pour le bouton de connexion */
        border: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s;
    }

    .btn-success:hover {
        background-color: #218838; /* Changer la couleur au survol */
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
