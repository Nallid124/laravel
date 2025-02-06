@extends('modele')

@section('titre', 'Page')

@section('content')
<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center bg-gradient p-3">
    <div class="card shadow-lg p-5 w-100" style="max-width: 400px; border-radius: 15px; background-color: #ffffff;">
        <h1 class="text-center h3 fw-bold mb-4 text-primary">Félicitations !</h1>

        <p class="text-center text-muted mb-4">Vous avez réussi à vous connecter avec succès.</p>

        <form action="{{ route('logout') }}" method="POST" class="d-flex justify-content-center">
            @csrf
            <button type="submit" class="btn btn-danger btn-lg px-5 py-2 border-0 rounded-3 transition-all hover-shadow">Se déconnecter</button>
        </form>
    </div>
</div>

@endsection

@push('styles')
<style>
    /* Ajouter une transition douce au survol des boutons */
    .btn:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Ajouter un arrière-plan de page doux */
    .bg-gradient {
        background: linear-gradient(to right, #6a11cb, #2575fc);
    }

    /* Améliorer les styles de la carte */
    .card {
        border-radius: 20px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-10px);
    }
</style>
@endpush
