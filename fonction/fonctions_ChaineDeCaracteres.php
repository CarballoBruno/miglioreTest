<?php

function CompteurLettre (string $chaine_function) {

    $maChaineSansEspace=str_replace(" ","",$chaine_function);// On remplace les espaces de la chaine de caractère par rien, ainsi on supprime tout les espaces
    $nombreDelettre = strlen($maChaineSansEspace); // compte le nombre de lettre de notre variable
    //echo $maChaineSansEspace;
    echo $chaine_function . " est composé de " . $nombreDelettre . " lettres." ;
   
}

function ValeurChaine (string $chaine_function) {

    $chaine_function = str_replace(" ","",$chaine_function);// On remplace les espaces de la chaine de caractère par rien, ainsi on supprime tout les espaces   
    $chaine_function = strtoupper($chaine_function);// Met toutes les lettres en majuscules
    $chaine_Tableau = str_split($chaine_function); // je convertis ma chaine de caractère en tableau
    $longueur_chaine_Tableau=count($chaine_Tableau); // je détermine la longueur de mon tableau
    

    // boucle sur la longueur du tableau 
    $compteur=0;

        for($i=0; $i<$longueur_chaine_Tableau;$i=$i+1) {

            $compteur = $compteur + ord($chaine_Tableau[$i])-64;           
            
        }
    
        echo "$compteur \n";         
    
}

function Repondre_oui_non($phrase) {

 /* 
 Création d'une boucle infini qui permet que continuer à poser la question
 tant que l'utilisateur n'entre pas les caractères demandés
 */   
    while (true) {
        $reponse = readline($phrase . " [Tapez 'o' pour oui et 'n' pour non]");

        if ($reponse === "o") {
            return true;
        } elseif ($reponse === "n") {
            return false;
        }
    }
       
}



/* Essai avec la fonction repondre_oui_non

$resultatBool = Repondre_oui_non('Voulez-vous continuer') ;

var_dump($resultatBool);

*/


/* Essai avec la fonction ValeurChaine

$valeurATester = readline("Entrer la chaine de caractère que vous souhaitez tester : ");


ValeurChaine($valeurATester);

*/

?>