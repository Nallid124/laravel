@extends('modele')

@section('titre', 'Register')

@section('content')
<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center bg-light">
    <div class="card shadow-lg p-4 w-100" style="max-width: 400px;">
        <h1 class="text-center h4 fw-bold mb-4 text-primary">Créer un Compte</h1>

        <form method="post">
            @csrf

            <div class="mb-3">
                <label for="login" class="form-label">Login :</label>
                <input type="text" name="login" id="login" value="{{ old('login') }}" 
                       class="form-control @error('login') is-invalid @enderror" placeholder="Entrez votre login">
                @error('login')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de Passe :</label>
                <input type="password" name="password" id="password" 
                       class="form-control @error('password') is-invalid @enderror" placeholder="Entrez votre mot de passe">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Confirmation du Mot de Passe :</label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                       class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmez votre mot de passe">
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Créer</button>
        </form>

        <div class="mt-4 text-center">
            <form action="{{ route('welcome') }}">
                <button class="btn btn-primary btn-lg px-5 shadow">
                    Retour
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
