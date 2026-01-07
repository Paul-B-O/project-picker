<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion – ProjectPicker</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <?php include("../components/header.php") ?>

    <main class="container">

        <div class="titles">
            <h1>Connexion</h1>
            <div>Accédez à votre espace personnel</div>
        </div>

        <div class="login-container">
            <form class="card login-card">

                <div class="login-field">
                    <label>Identifiant</label>
                    <input type="text" placeholder="Votre identifiant">
                </div>

                <div class="login-field">
                    <label>Mot de passe</label>
                    <input type="password" placeholder="Votre mot de passe">
                </div>

                <div class="login-actions">
                    <button type="button" class="btn btn-secondary">
                        Retour
                    </button>

                    <button type="submit" class="btn btn-primary">
                        Se connecter
                    </button>
                </div>

            </form>
        </div>

    </main>

    <?php include("../components/footer.php") ?>

    </body>
</html>
