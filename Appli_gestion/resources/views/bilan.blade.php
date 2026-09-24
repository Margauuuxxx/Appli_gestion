<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bilan mensuel - Budgetly</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <aside class="sidebar">
                <div class="brand">
                    <div class="brand-badge">€</div>
                    <div><h1>Budgetly</h1><small>Mon compte</small></div>
                </div>
                <nav class="nav">
                    <a href="{{ route('home') }}">Accueil</a>
                    <a href="{{ route('depenses.create') }}">Dépenses</a>
                    <a href="{{ route('bilan') }}" class="active">Historique</a>
                </nav>
            </aside>
            <main class="main">
                <header class="topbar">
                    <div><p>Analyse</p><h2>Bilan de {{ $monthLabel }}</h2></div>
                    <a href="{{ route('depenses.create') }}" class="btn-add">+ Ajouter une dépense</a>
                </header>
                <section class="summary-grid">
                    <article class="card primary"><h4>Total dépensé</h4><p class="value">{{ number_format($monthTotal, 2, ',', ' ') }} €</p><div class="small-text">{{ $categoryTotals->count() }} catégorie(s) ce mois-ci</div></article>
                    <article class="card"><h4>{{ ucfirst($previousMonthLabel) }}</h4><p class="value">{{ number_format($previousTotal, 2, ',', ' ') }} €</p><div class="small-text">{{ $difference >= 0 ? '+' : '' }}{{ number_format($difference, 2, ',', ' ') }} € par rapport à ce mois</div></article>
                    <article class="card"><h4>Évolution</h4><p class="value">{{ $percentageChange === null ? 'N/A' : number_format($percentageChange, 1, ',', ' ') . ' %' }}</p><div class="small-text">Par rapport à {{ $previousMonthLabel }}</div></article>
                </section>
                <section class="panel">
                    <div class="panel-head"><h3>Dépenses par catégorie</h3><a href="{{ route('home') }}">Retour à l’accueil</a></div>
                    <div class="category-list category-list-large">
                        @forelse ($categoryTotals as $category)
                            <div><span>{{ $category->category }}</span><strong>{{ number_format($category->total, 2, ',', ' ') }} €</strong></div>
                        @empty
                            <div class="empty-state">Aucune dépense ce mois-ci.</div>
                        @endforelse
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
