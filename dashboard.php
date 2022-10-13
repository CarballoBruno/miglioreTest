<?php
// On inclut les fonction pour l'authentification
require_once "fonction/auth.php";
// on utilise la fonction d'authentification pour avoir accès à cette page 
acces_authentification();




// on inclut le fichier pour le calcul des vues
require_once "fonction/fonctions_Site_Internet.php";

/* Déclaration de mes variables */
$total_Vues = nombre_vues(); // appel de la fonction 'nombre_vues()' qui se trouve dans le répertoire fonction/fonctions_Site_Internet.php
$annee = (int)date('Y') ; // appel de la fonction native date pour récupérer seulement les années que l'on convertit en entier 

// On définit les variables liées à la page
$title="Authentification utilisateur";
$link="../css/styleDashboard.css";
$keywords="NCM - Tableau de bord";


/* j'ajoute à ma page le header */
require "include/header.php"

?>


<div class="tableau">
   Le nombre de personne qui ont visité le site est de : <strong><? echo $total_Vues ?></strong>
</div>

<div class="bouton_deconnection">
   <?php if (est_connecte()): ?>

      <a href="logout.php"> Se déconnecter</a>

   <?php endif ?>


</div>



<?php
// j'ajoute le footer de la page
require "include/footer.php"; 


?>