<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Créer un compte - Budgetly</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="auth-shell">
            <section class="auth-panel">
                <div class="brand auth-brand"><div class="brand-badge">€</div><div><h1>Budgetly</h1><small>Mon compte</small></div></div>
                <p class="eyebrow">Nouveau compte</p>
                <h2>Créer un compte</h2>
                <p class="auth-intro">Une adresse e-mail ne peut être utilisée qu'une seule fois.</p>
                @if ($errors->any())
                    <div class="error-box">{{ $errors->first() }}</div>
                @endif
                <form method="POST" action="{{ route('register.store') }}" class="auth-form">
                    @csrf
                    <label for="name">Nom</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required autofocus>
                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required>
                    <label for="password">Mot de passe</label>
                    <input id="password" name="password" type="password" minlength="8" autocomplete="new-password" required>
                    <label for="password_confirmation">Confirmer le mot de passe</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" minlength="8" autocomplete="new-password" required>
                    <button type="submit" class="btn-add">Créer mon compte</button>
                </form>
                <p class="auth-footer">Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a></p>
            </section>
        </div>
    </body>
</html>
