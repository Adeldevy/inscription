<?php

//optimiser le code et eviter la répétition
function escape($string){
    global $connexion;
    return mysqli_real_escape_string($connexion,$string);

}



?>