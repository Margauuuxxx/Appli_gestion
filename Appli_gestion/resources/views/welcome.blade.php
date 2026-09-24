<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Budgetly</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <aside class="sidebar">
                <div class="brand">
                    <div class="brand-badge">€</div>
                    <div>
                        <h1>Budgetly</h1>
                        <small>Mon compte</small>
                    </div>
                </div>

                <nav class="nav">
                    <a href="{{ route('home') }}" class="active">Accueil</a>
                    <a href="{{ route('depenses.create') }}">Dépenses</a>
                    <a href="{{ route('bilan') }}">Historique</a>
                </nav>

                <div class="profile-box">
                    <h3>Profils</h3>

                    <a href="{{ route('profile') }}" class="profile-item" style="text-decoration: none; color: inherit;">
                        <span class="avatar">A</span>
                        <div>
                            <strong>Alice</strong>
                        </div>
                    </a>
                </div>
            </aside>

            <main class="main">
                <header class="topbar">
                    <div>
                        <p>Bonjour, Alice</p>
                        <h2>Résumé du mois</h2>
                    </div>
                    <a href="{{ route('depenses.create') }}" class="btn-add">+ Ajouter une dépense</a>
                </header>

                <section class="row">
                    <div class="panel">
                        <div class="panel-head">
                            <h3>Dépenses récentes</h3>
                            <a href="{{ route('bilan') }}">Voir le bilan</a>
                        </div>

                        <ul class="expense-list">
                            @forelse ($recentExpenses as $expense)
                                <li>
                                    <div>
                                        <strong>{{ $expense->label }}</strong>
                                        <small>{{ $expense->spent_at->format('d/m/Y') }} · {{ $expense->category }}</small>
                                    </div>
                                    <span class="amount">- {{ number_format($expense->amount, 2, ',', ' ') }} €</span>
                                </li>
                            @empty
                                <li class="empty-state">Aucune dépense enregistrée.</li>
                            @endforelse
                        </ul>
                    </div>

                    <div class="panel category-panel">
                        <div class="panel-head">
                            <h3>Total du mois</h3>
                            <a href="{{ route('bilan') }}" class="plus-link" aria-label="Ouvrir le bilan du mois">+</a>
                        </div>
                        <p class="month-total">{{ number_format($monthTotal, 2, ',', ' ') }} €</p>
                        <p class="small-text">{{ ucfirst($monthLabel) }}</p>
                        <div class="category-list">
                            @forelse ($categoryTotals as $category)
                                <div><span>{{ $category->category }}</span><strong>{{ number_format($category->total, 2, ',', ' ') }} €</strong></div>
                            @empty
                                <div class="empty-state">Aucune catégorie ce mois-ci.</div>
                            @endforelse
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
