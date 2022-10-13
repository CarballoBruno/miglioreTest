<?php
// On définit les variables liées à la page
$title="Authentification utilisateur";// Pour le titre dans le header
$link="../css/styleIdentification.css";
$erreur = null; // Variable d'erreur sur le login ou sur le mot de passe
$password = '$2y$12$bVj2sCx2AmwJqtKWw2wOHOp4dLNiNCZvOAF57Im8r6Ass8KE8M7du'; // Chiffrement du mot de passe
// on vérifie que les champs ne soient pas vides
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    // on vérifie que les champs correspondent bien à un utilisateur autorisé
    if ($_POST['pseudo'] === 'Admin' && password_verify($_POST['motdepasse'], $password)) { // on utilise un chiffrement pour le mot de passe
    session_start();// On démarre la session
    $_SESSION['connecte']=1;
    header('location: /dashboard.php');
    exit();    
    } else {
        $erreur = "Idendifiants incorrects";
    }

}
// on appelle la fonction
require_once "fonction" .DIRECTORY_SEPARATOR . 'auth.php'; 
if (est_connecte()) {
    header('location: /dashboard.php'); // si l'utilisateur est connecté on le redirige vers la page qu'il souhaite voir
    exit();
}

// On appelle le header commun à toutes les pages
require "include/header.php"
?>

<div class="case_legende">
        <h1> 
        Cette page est reservée aux administrateurs du site. <br>
        Pour vous connecter vous devez impérativement vous identifier.
        </h1>
</div>       

<form action="" method="post" class="formulaireIdentification">   
    <?php // s'il y a une erreur alors afficher un message d'erreur 
    if ($erreur): 
    ?> 

    <div class="MessageErreur">
        <? echo $erreur; ?>
    </div>

    <?php endif; ?>




    
    <div class="nom_utilisateur">
        <input type="text" name="pseudo" placeholder="Nom Utilisateur">
    </div>

    <div class="mot_de_passe">
        <input type="password" name="motdepasse" placeholder="Votre mot de passe">
    </div>

    <div class="boutonEnvoi">
        <button type="submit">Connectez-vous</button>
    </div>


</form>


<?php // on appelle le footer commun à toutes les pages
require "include/footer.php"; 
?> 

