<?php $titrePage= "nouveau mot de passe"; ?>
    <?php require_once("includes/header.php"); ?>
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
    <?php require_once("includes/footer.php"); ?>