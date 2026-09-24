<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajouter une dépense - Budgetly</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <aside class="sidebar">
                <div class="brand"><div class="brand-badge">€</div><div><h1>Budgetly</h1><small>Mon compte</small></div></div>
                <nav class="nav">
                    <a href="{{ route('home') }}">Accueil</a>
                    <a href="{{ route('depenses.create') }}" class="active">Dépenses</a>
                    <a href="{{ route('bilan') }}">Historique</a>
                </nav>
            </aside>
            <main class="main">
                <header class="topbar">
                    <div><p>Nouvelle entrée</p><h2>Ajouter une dépense</h2></div>
                    <a href="{{ route('home') }}" class="back-link">Retour à l’accueil</a>
                </header>
                <section class="panel form-panel">
                    @if ($errors->any())
                        <div class="notice error-notice">{{ $errors->first() }}</div>
                    @endif
                    <form method="POST" action="{{ route('depenses.store') }}">
                        @csrf
                        <label for="category">Catégorie</label>
                        <select id="category" name="category" required>
                            <option value="">Choisir une catégorie</option>
                            <option {{ old('category') === 'Courses' ? 'selected' : '' }}>Courses</option>
                            <option {{ old('category') === 'Loyer' ? 'selected' : '' }}>Loyer</option>
                            <option {{ old('category') === 'Transport' ? 'selected' : '' }}>Transport</option>
                            <option {{ old('category') === 'Loisirs' ? 'selected' : '' }}>Loisirs</option>
                            <option {{ old('category') === 'Santé' ? 'selected' : '' }}>Santé</option>
                            <option {{ old('category') === 'Autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                        <label for="amount">Montant (€)</label>
                        <input id="amount" name="amount" type="number" value="{{ old('amount') }}" min="0.01" step="0.01" placeholder="0,00" required>
                        <label for="spent_at">Date</label>
                        <input id="spent_at" name="spent_at" type="date" value="{{ old('spent_at', now()->format('Y-m-d')) }}" required>
                        <button type="submit" class="btn-add">Ajouter la dépense</button>
                    </form>
                </section>
            </main>
        </div>
    </body>
</html>
