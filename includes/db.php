<?php

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","inscription");

//CONNEXION
$connexion = new PDO(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$connexion){

   die("Erreur de connexion à la Base de données".mysqli_error($connexion));
}
?>