<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h2 class="heading">s'identifier</h2>
            <div class='notification'>connexion réussie</div>
            <form action="login.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="Nom" name="nom" required>
                </div>
                <div class="input-box">
                    <input type="email" class="input-control" placeholder="Email" name="email" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="Entrer le mot de passe" name="mdp" required>
                </div>
                <div class="input-box rm-box">
                    <div>
                        <input type="checkbox" id="remember-me" class="remember-me" name="remember-me">
                        <label for="remember-me">Souviens-toi de moi</label>
                    </div>
                    <a href="mdp_oublie.php" class="forgot-password">Mot de passe oublié?</a>
                </div>
                <div class="g-recaptcha" data-sitekey="<?php echo $public_key;?>"></div>
                <div class="input-box">
                    <input type="submit" class="input-submit" value="LOGIN" name="s'identifier">
                </div>
                <div class="login-cta"><span>Vous n'avez pas de compte?</span> <a href="inscription.php">Inscrivez-vous ici</a></div>
            </form>

        </div>
    </div>
</body>
</html>