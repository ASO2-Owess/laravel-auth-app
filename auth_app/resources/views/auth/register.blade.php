@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
<div class="card">
    <h1>Créer un compte</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nom complet</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Ton nom"
                required
                autofocus
            >
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="ton@email.com"
                required
            >
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Minimum 6 caractères"
                required
            >
        </div>

        <div class="form-group">
            <label for="password_confirmation">
                Confirmer le mot de passe
            </label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="••••••••"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Créer mon compte
        </button>
    </form>

    <p class="form-link">
        Déjà un compte ?
        <a href="{{ route('login') }}">Se connecter</a>
    </p>
</div>
@endsection
