<?php
// Etude pour la reconnaissance d'un palindrome

$motAtester = readline("Entez le mot à tester ?");

$motAtester=strtolower($motAtester);// Utilisation de la fonction pour mettre tous les caractères en minuscules
$motFiltre = strrev($motAtester);// Utilisation de la fonction pour renverser l'ordre des caractères

//Cycle de comparaison
if ($motAtester === $motFiltre) {
    echo($motAtester . " est un palindrome.");
}
else {
    echo($motAtester . " n'est pas un palindrome.");

}








?>