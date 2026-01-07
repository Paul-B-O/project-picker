<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes projets – ProjectPicker</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<?php include("../components/header.php") ?>

<main class="container">

    <div class="myprojects-header">
        <h1>Mes projets</h1>
        <button class="btn btn-primary">+ Créer un nouveau projet</button>
    </div>

    <section class="card myprojects-card">

        <div class="myprojects-row myprojects-head">
            <div>Titre</div>
            <div>Date</div>
            <div>Votes</div>
            <div>Actions</div>
        </div>

        <div class="myprojects-row">
            <div>Application de gestion de notes</div>
            <div>15 nov 2025</div>
            <div>
                <span class="badge badge-vote">28</span>
            </div>
            <div class="myprojects-actions">
                <button class="btn btn-secondary">Voir</button>
                <button class="btn btn-primary">Modifier</button>
                <button class="btn btn-accent">Supprimer</button>
            </div>
        </div>

        <div class="myprojects-row">
            <div>Planning de révisions</div>
            <div>8 nov 2025</div>
            <div>
                <span class="badge badge-vote">19</span>
            </div>
            <div class="myprojects-actions">
                <button class="btn btn-secondary">Voir</button>
                <button class="btn btn-primary">Modifier</button>
                <button class="btn btn-accent">Supprimer</button>
            </div>
        </div>

    </section>

</main>


<?php include("../components/footer.php") ?>

</body>
</html>
