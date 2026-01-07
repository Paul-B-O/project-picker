<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposer un projet</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/new-project.css">
</head>
<body>

<?php include("../components/header.php") ?>

<main class="container">
    <div class="titles">
        <h1>Proposer un nouveau projet</h1>
        <div>Partagez votre idée avec les autres étudiants</div>
    </div>

    <div class="project-form">
        <form class="card project-form-card">

            <div class="form-group">
                <label for="title">Titre du projet</label>
                <input type="text" id="title" placeholder="Ex : Application de gestion de tâches">
            </div>

            <div class="form-group">
                <label for="author">Votre nom</label>
                <input type="text" id="author" placeholder="Ex : Jean Dupont">
            </div>

            <div class="form-group">
                <label for="short_desc">Description courte</label>
                <textarea id="short_desc" rows="3"
                    placeholder="Résumé en une phrase (affiché sur les cartes)..."></textarea>
            </div>

            <div class="form-group">
                <label for="full_desc">Description détaillée</label>
                <textarea id="full_desc" rows="6"
                    placeholder="Décrivez votre projet en détail..."></textarea>
            </div>

            <div class="form-actions">
                <button type="button" class="btn btn-secondary">Annuler</button>
                <button type="submit" class="btn btn-primary">Soumettre le projet</button>
            </div>

        </form>
    </div>
</main>


<?php include("../components/footer.php") ?>

</body>
</html>
