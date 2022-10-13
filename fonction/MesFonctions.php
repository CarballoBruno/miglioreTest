<?php

function premierEssai (string $mot_function) {

    $maChaineSansEspace=trim($mot_function);
    $nombreDelettre = strlen($maChaineSansEspace);
    echo $maChaineSansEspace;
    echo $mot_function . " est composé de " . $nombreDelettre . " lettres." ;
}

premierEssai("Bruno Carballo");




?>

