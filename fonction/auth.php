<?php
function est_connecte (): bool {
    // On verifie si la session n'est pas active et alors on active la session
    if (session_status()=== PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);

}

function acces_authentification (): void { // il n'y a pas de retour souhaité.
    if (!est_connecte()) {// on utilise la fonction 'est_connecte' pour savoir si nous sommes ou pas déjà connecté
        // On redirige l'utilisateur vers la page d'authentification afin de vérifier ses droits
        header('location: ../identification.php');
        exit(); // on sort de la page afin que la suite du code ne d'execute pas
    }
}



?>