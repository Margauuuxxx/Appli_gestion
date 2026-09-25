<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profil {{ $user->firstname ?: $user->name }} - Budgetly</title>
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
                    <a href="{{ route('home') }}">Accueil</a>
                    <a href="{{ route('depenses.create') }}">Dépenses</a>
                    <a href="{{ route('bilan') }}">Historique</a>
                </nav>

                <div class="profile-box">
                    <h3>Profils</h3>
                    <div class="profile-item">
                        <span class="avatar">{{ strtoupper(substr($user->firstname ?: $user->name, 0, 1)) }}</span>
                        <div>
                            <strong>{{ $user->firstname ?: $user->name }}</strong>
                        </div>
                    </div>
                </div>
            </aside>

            <main class="main">
                <header class="topbar">
                    <div>
                        <p>Compte</p>
                        <h2>Profil personnel</h2>
                    </div>
                    <div class="topbar-actions">
                        <form method="POST" action="{{ route('logout') }}" class="logout-form">
                            @csrf
                            <button type="submit" class="back-link-btn">Se déconnecter</button>
                        </form>
                    </div>
                </header>

                <section class="panel">
                    <div class="panel-head">
                        <h3>Informations du compte</h3>
                    </div>

                    <div class="account-list">
                        <div class="account-item main">
                            <div>
                                <strong>{{ $user->firstname }} {{ $user->name }}</strong>
                                <small>Compte principal</small>
                            </div>
                            <span class="avatar">{{ strtoupper(substr($user->firstname ?: $user->name, 0, 1)) }}</span>
                        </div>

                        <div class="account-item">
                            <div>
                                <strong>Prénom</strong>
                                <small>{{ $user->firstname ?: 'Non renseigné' }}</small>
                            </div>
                        </div>

                        <div class="account-item">
                            <div>
                                <strong>Nom</strong>
                                <small>{{ $user->name }}</small>
                            </div>
                        </div>

                        <div class="account-item">
                            <div>
                                <strong>Email</strong>
                                <small>{{ $user->email }}</small>
                            </div>
                        </div>

                        <div class="account-item">
                            <div>
                                <strong>Âge</strong>
                                <small>{{ $user->age ? $user->age . ' ans' : 'Non renseigné' }}</small>
                            </div>
                        </div>

                        <div class="account-item">
                            <div>
                                <strong>Téléphone</strong>
                                <small>{{ $user->phone ?: 'Non renseigné' }}</small>
                            </div>
                        </div>

                        <div class="account-item">
                            <div>
                                <strong>Adresse</strong>
                                <small>{{ $user->address ?: 'Non renseignée' }}</small>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
