<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mon budget</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <aside class="sidebar">
                <div class="brand">
                    <div class="brand-badge">€</div>
                    <div>
                        <h1>Budget</h1>
                        <small>Mon compte</small>
                    </div>
                </div>

                <nav class="nav">
                    <a href="#" class="active">Accueil</a>
                    <a href="#">Dépenses</a>
                    <a href="#">Budget</a>
                    <a href="#">Comptes</a>
                    <a href="#">Historique</a>
                </nav>

                <div class="profile-box">
                    <h3>Profils</h3>

                    <div class="profile-item">
                        <span class="avatar">A</span>
                        <div>
                            <strong>Alice</strong>
                            <small>3 comptes</small>
                        </div>
                    </div>

                    <div class="profile-item">
                        <span class="avatar green">H</span>
                        <div>
                            <strong>Hugo</strong>
                            <small>2 comptes</small>
                        </div>
                    </div>
                </div>
            </aside>

            <main class="main">
                <header class="topbar">
                    <div>
                        <p>Bonjour, Alice</p>
                        <h2>Résumé du mois</h2>
                    </div>
                    <a href="#" class="btn-add">+ Ajouter</a>
                </header>

                <section class="summary-grid">
                    <article class="card primary">
                        <h4>Solde du jour</h4>
                        <p class="value">1 284,50 €</p>
                        <div class="small-text">+ 120 € depuis hier</div>
                    </article>

                    <article class="card">
                        <h4>Dépenses du jour</h4>
                        <p class="value">62,40 €</p>
                        <div class="small-text">4 transactions</div>
                    </article>

                    <article class="card">
                        <h4>Budget restant</h4>
                        <p class="value">318,00 €</p>
                        <div class="small-text">Cette semaine</div>
                    </article>
                </section>

                <section class="row">
                    <div class="panel">
                        <div class="panel-head">
                            <h3>Mes banques</h3>
                            <a href="#">Voir tout</a>
                        </div>

                        <div class="account-list">
                            <div class="account-item main">
                                <div>
                                    <small>Compte courant</small>
                                    <strong>1 245,80 €</strong>
                                </div>
                                <small>Banque de France</small>
                            </div>

                            <div class="account-item">
                                <div>
                                    <small>Livret A</small>
                                    <strong>430,00 €</strong>
                                </div>
                                <small>Banque Populaire</small>
                            </div>

                            <div class="account-item">
                                <div>
                                    <small>Carte bancaire</small>
                                    <strong>285,20 €</strong>
                                </div>
                                <small>Crédit Agricole</small>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-head">
                            <h3>Bilan</h3>
                            <span>7 jours</span>
                        </div>

                        <div class="chart">
                            <div class="bar-wrap"><span class="bar" style="height: 38%"></span><span>L</span></div>
                            <div class="bar-wrap"><span class="bar" style="height: 55%"></span><span>M</span></div>
                            <div class="bar-wrap"><span class="bar" style="height: 48%"></span><span>M</span></div>
                            <div class="bar-wrap"><span class="bar" style="height: 72%"></span><span>J</span></div>
                            <div class="bar-wrap"><span class="bar" style="height: 60%"></span><span>V</span></div>
                            <div class="bar-wrap"><span class="bar" style="height: 82%"></span><span>S</span></div>
                            <div class="bar-wrap"><span class="bar" style="height: 50%"></span><span>D</span></div>
                        </div>
                    </div>
                </section>

                <section class="row">
                    <div class="panel">
                        <div class="panel-head">
                            <h3>Dépenses récentes</h3>
                            <a href="#">Tout voir</a>
                        </div>

                        <ul class="expense-list">
                            <li>
                                <div>
                                    <strong>Courses</strong>
                                    <small>Hier • Supermarché</small>
                                </div>
                                <span class="amount">- 38,90 €</span>
                            </li>
                            <li>
                                <div>
                                    <strong>Transport</strong>
                                    <small>Aujourd’hui • Train</small>
                                </div>
                                <span class="amount">- 12,50 €</span>
                            </li>
                            <li>
                                <div>
                                    <strong>Restaurant</strong>
                                    <small>Jeudi • Déjeuner</small>
                                </div>
                                <span class="amount">- 21,30 €</span>
                            </li>
                            <li>
                                <div>
                                    <strong>Loisirs</strong>
                                    <small>Mercredi • Cinéma</small>
                                </div>
                                <span class="amount">- 18,00 €</span>
                            </li>
                        </ul>
                    </div>

                    <div class="panel">
                        <div class="panel-head">
                            <h3>Objectifs</h3>
                            <a href="#">Ajouter</a>
                        </div>

                        <div class="goal-box">
                            <div class="goal-item">
                                <div class="goal-top">
                                    <span>Épargne</span>
                                    <strong>420 € / 500 €</strong>
                                </div>
                                <div class="progress"><span style="width: 84%"></span></div>
                            </div>

                            <div class="goal-item">
                                <div class="goal-top">
                                    <span>Loisirs</span>
                                    <strong>110 € / 200 €</strong>
                                </div>
                                <div class="progress"><span style="width: 55%"></span></div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
