<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion - Budgetly</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="auth-shell">
            <section class="auth-panel">
                <div class="brand auth-brand"><div class="brand-badge">€</div><div><h1>Budgetly</h1><small>Mon compte</small></div></div>
                <p class="eyebrow">Espace personnel</p>
                <h2>Se connecter</h2>
                <p class="auth-intro">Retrouvez votre suivi des dépenses.</p>
                @if ($errors->any())
                    <div class="error-box">{{ $errors->first() }}</div>
                @endif
                <form method="POST" action="{{ route('login.store') }}" class="auth-form">
                    @csrf
                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required autofocus>
                    <label for="password">Mot de passe</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required>
                    <label class="check-label"><input type="checkbox" name="remember"> Se souvenir de moi</label>
                    <button type="submit" class="btn-add">Se connecter</button>
                </form>
                <p class="auth-footer">Pas encore de compte ? <a href="{{ route('register') }}">Créer un compte</a></p>
            </section>
        </div>
    </body>
</html>
