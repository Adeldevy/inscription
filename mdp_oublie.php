    <?php $titrePage= "mot de passe oublié"; ?>
    <?php require_once("includes/header.php"); ?>
    <div class="container">
        <div class="content">
            <h2 class="heading">RÉCUPÉRATION DE MOT DE PASSE</h2>
            <div class='notification'>Vous devez attendre au moins 20 minutes pour une autre demande</div>
            <form action="" method="POST">
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="nom d'utilisateur" name="nom" required>
                </div>
                <div class="input-box">
                    <input type="email" class="input-control" placeholder="Email" name="email" required>
                </div>
                <div class="input-box">
                    <input type="submit" class="input-submit" value="RÉCUPÉRATION DE MOT DE PASSE" name="mdp" required>
                </div>
            </form>
        </div>
    </div>
    <?php require_once("includes/footer.php"); ?>
</body>
</html>