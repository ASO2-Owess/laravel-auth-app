@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
<div class="card">
    <h1>Connexion</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="ton@email.com"
                required
                autofocus
            >
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="••••••••"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Se connecter
        </button>
    </form>

    <p class="form-link">
        Pas encore de compte ?
        <a href="{{ route('register') }}">S'inscrire</a>
    </p>
</div>
@endsection
