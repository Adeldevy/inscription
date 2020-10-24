<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inscription</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h2 class="heading">S'INSCRIRE</h2>
            <div class='notification'>Inscription réussie. Vérifiez votre e-mail pour le lien d'activation</div>
            <form action="sign_up.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="Nom" name="nom" autocomplete="off" required>
                    <span class='error'>Error messages</span>
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="Prénom" name="prenom" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="Nom d'utilisateur" name="pseudo" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="email" class="input-control" placeholder="Email" name="mail" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="Entrer le mot de passe" name="mdp1" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="Confirmer le mot de passe" name="mdp2" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="submit" class="input-submit" value="S'INSCRIRE" name="inscription">
                </div>
                <div class="sign-up-cta"><span>Vous avez déjà un compte?</span> <a href="connexion.php">Connectez-vous ici</a></div>
            </form>

        </div>
    </div>
</body>
</html>