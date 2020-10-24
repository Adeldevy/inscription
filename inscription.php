<?php $titrePage= "inscription"; ?>
<?php require_once("includes/header.php"); ?>
    <div class="container">
        <div class="content">
            <h2 class="heading">S'INSCRIRE</h2>
            <?php
            if(isset($_POST['inscription'])){
              $nom = $_POST['nom']; 
              $prenom = $_POST['prenom'];
              $pseudo =$_POST['pseudo']; 
              $mail = $_POST['mail'];
              $mdp1 = $_POST['mdp1'];  
              $mdp2 = $_POST['mdp2'];  

              echo "First Name: " . $nom . "<br>";
              echo "Last Name: " . $prenom . "<br>";
              echo "User Name: " . $pseudo. "<br>";
              echo "User Email: " . $mail . "<br>";
              echo "user pass: " . $mdp1 . "<br>";
              echo "user confirm password: " . $mdp2 . "<br>";

            }  
            ?>


            <div class='notification'>Inscription réussie. Vérifiez votre e-mail pour le lien d'activation</div>
            <form action="inscription.php" method="POST">
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
    <?php require_once("includes/footer.php"); ?>