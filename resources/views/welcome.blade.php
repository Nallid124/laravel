@extends('modele')

@section('titre', 'Inscription')

@section('content')
<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center bg-light">
    @if(session('etat'))
        <div class="alert alert-success text-center w-50" role="alert">
            {{ session('etat') }}
        </div>
    @endif

    <div class="text-center mb-5">
        <img src="{{ asset('image.png') }}" alt="Mon Logo" class="img-fluid rounded-circle shadow mb-4" style="width: 120px; height: 120px;">
        <h1 class="h3 fw-bold text-dark">Bienvenue</h1>
        <p class="text-muted">Veuillez choisir une action pour continuer</p>
    </div>

    <div class="d-flex flex-column flex-md-row gap-3">
        <form action="{{ route('register') }}">
            <button class="btn btn-primary btn-lg px-5 shadow">
                S'enregistrer
            </button>
        </form>
        <form action="{{ route('login') }}">
            <button class="btn btn-success btn-lg px-5 shadow">
                Se connecter
            </button>
        </form>
    </div>
</div>
@endsection
