<?
header('Content-type:text/html; charset=utf-8');
// Création de différentes variables pour l'utilisation de la fonction mail
$_SESSION['mess']=$_POST['mess'];
$to = "info@migliore06.fr";
$subject="Formulaire de Contact via site www.migliore06.fr";
$message= "Vous avez une demande de ".$_POST["nom"]." \n".
"Numero de telephone : ".$_POST["telephone"]." \n".
"Adresse mail : ".$_POST["mail"]." \n"." \n".
"Voici le message :" .$_POST["message"];
$headers=[
"from" => "webmaster@migliore06.fr",
"de" => $_POST["mail"],
"Content-Type:" => "text/html; charset=UTF-8"];


// Gestion des erreurs
$errors=[];

// si le message n'existe pas  ou que le message est vide
if(!array_key_exists("nom", $_POST) || $_POST["nom"]==' ') {
    $errors["nom"]="Vous n'avez pas saisi vos coordonnées"; //alors on remplit le tableau d'erreur et on affiche le type d'erreur à l'utilisateur
}
if(!array_key_exists("message", $_POST) || $_POST["message"]==' ') {
    $errors["message"]="Vous n'avez pas saisi de message"; //alors on remplit le tableau d'erreur et on affiche le type d'erreur à l'utilisateur
}
if(!array_key_exists("telephone", $_POST) || $_POST["telephone"]==' ') {
    $errors["telephone"]="Vous n'avez pas saisi de téléphone de contact"; //alors on remplit le tableau d'erreur et on affiche le type d'erreur à l'utilisateur
}
if(!array_key_exists("mail", $_POST) || $_POST["mail"]== ''|| !filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL)) {
    $errors["mail"]="Vous devez saisir une adresse mail valide"; //alors on remplit le tableau d'erreur et on affiche le type d'erreur à l'utilisateur
}
session_start (); /* On ouvre la session pour pouvoir partager les variables entre deux pages */
if (!empty($errors)) {
    
    $_SESSION['errors']=$errors; /*On envoie à l'utilisateur le tableau des erreurs */
    $_SESSION['inputs']=$_POST; /* On sauvegarde les données de l'utilisateur */

    header('Location: contact.php'); /* Si le tableau d'erreur n'est pas vide revennir à la page précédente */
    
} else {
    /* Sinon Utilisation de la fonction mail avec les variables */
$_SESSION['success']=1;/* on définit une nouvelle donnée avec comme résultat 1 pour confirmer que le message a bien été envoyé */

mail($to,$subject,$message,$headers);

header('Location: contact.php'); /* Si le tableau d'erreur n'est pas vide revennir à la page précédente */



}








?>

