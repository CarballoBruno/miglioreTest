<?php
/* Fonction pour le dashboard */

function ajouter_vue (){
    /* on créer une variable qui se construira à partir de notre arboresence existante */
    $fichier=dirname(__DIR__). DIRECTORY_SEPARATOR .'data' . DIRECTORY_SEPARATOR . 'compteur';

    // On crée une variable pour un fichier compteur vues journalière
    $fichier_Journalier =$fichier."_".date('Y-m-d');
    incremeter_compteur_vue($fichier);
    incremeter_compteur_vue($fichier_Journalier);        
   
}

// on crée un fonction pour incrementer le compteur, cette fonction ne retourne rien mais incremente seulement le compteur
function incremeter_compteur_vue($fichier):void {
    /* On créer une variable compteur que l'on initialise à 1 */
    $compteur=1;
    /* on crée la condition lorsque le fichier existe */
    if(file_exists($fichier)) {
        // si le fichier existe on incrémente le compteur
        $compteur=(int)file_get_contents($fichier); // file_get_contents => permet de lire le fichier
        $compteur=$compteur+1;
    } // le sinon est inutile puisque la suite de la fonction met à jour le fichier

    /* on créer le fichier avec la fonction file_put_contents, et on y inscrit seulement la variable compteur */
        file_put_contents($fichier,$compteur);

}


function nombre_vues(): string {
    $fichier=dirname(__DIR__). DIRECTORY_SEPARATOR .'data' . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichier);
}


?>