<?php

// Dossier CLI pour commande Line Interface

// création d'une variable chemin pour indiquer l'endroit de stockage de ce fichier

$chemin = __DIR__ . DIRECTORY_SEPARATOR; // utilisation de constantes spécifiques
$nomFichier = "fichier.txt";
$cheminComplet =$chemin . $nomFichier;
$data = "Bonjour \n";

file_put_contents($cheminComplet, $data); // cette fonction permet de créer un fichier et d'y incorporer des DATA

$data2="Je vous remercie de votre venu \n";

file_put_contents($cheminComplet, $data2, FILE_APPEND); // cette fonction permet d'ajouter des DATA à un fichier existant

$data3="Merci pour toutes ces informations \n";
file_put_contents($cheminComplet, $data3, FILE_APPEND); // cette fonction permet d'ajouter des DATA à un fichier existant

// Pour lire un fichier

echo file_get_contents($cheminComplet);