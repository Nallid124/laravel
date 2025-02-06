@extends('modele')

@section('titre', 'Page')

@section('content')
<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center bg-light">
    <div class="card shadow-lg p-4 w-100" style="max-width: 400px;">
        <h1 class="text-center h3 fw-bold mb-4 text-success">Félicitations !</h1>

        <p class="text-center text-muted mb-4">Vous avez réussi à vous connecter avec succès.</p>

        <form action="{{ route('logout') }}" method="POST" class="d-flex justify-content-center">
            @csrf
            <button type="submit" class="btn btn-danger btn-lg px-5">Se déconnecter</button>
        </form>
    </div>
</div>
@endsection
