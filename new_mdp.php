<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOUVEAU MOT DE PASSE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h2 class="heading">NOUVEAU MOT DE PASSE</h2>
            <div class='notification'>Mot de passe mis à jour avec succès. <a href='connexion.php'>Connectez vous maintenant</a></div>
            <form action="" method="POST">
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="NOUVEAU MOT DE PASSE" name="newmdp" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder=" CONFIRMER LE NOUVEAU MOT DE PASSE" name="confmdp" required>
                </div>
                <div class="input-box">
                    <input type="submit" class="input-submit" value="SOUMETTRE" name="submit" >
                </div>
            </form>

        </div> 
    </div>
</body>
</html>