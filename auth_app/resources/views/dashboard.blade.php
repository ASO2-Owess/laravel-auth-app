@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<div class="card">
    <h1>Tableau de bord</h1>

    <p style="color:#6b6a65; margin-top:0.5rem;
              font-size:15px; line-height:1.7">
        Bienvenue,
        <strong style="color:#1a1a18">
            {{ Auth::user()->name }}
        </strong> !
        Tu es connecté avec
        <strong style="color:#1a1a18">
            {{ Auth::user()->email }}
        </strong>.
    </p>

    <div style="margin-top:1.5rem; padding:1rem;
                background:#f5f5f3; border-radius:8px;
                font-size:13px; color:#6b6a65">
        Compte créé le :
        {{ Auth::user()->created_at->format('d/m/Y à H:i') }}
    </div>
</div>
@endsection
