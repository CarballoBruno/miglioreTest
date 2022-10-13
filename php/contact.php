<?php
session_start(); /* Super Variable fonction proche d'un cookie qui permet de récupérer les variables d'une page sur l'autre*/
    // On définit les variables liées à la page
    $titre="Nouvelle Carrosserie Migliore - Carrossier Constructeur - Page contact";
    $lien="../css/styleContact.css";
    $keywords="NCM - Formulaire de Contact";
    require "../include/header.php";
?>
    <section class="formulaireContact">
            
        <div class="rectGauche">
            <img class="image_1" src="/photos/photos375x250/img1.jpg" alt="Photos Travail Carrosserie Migliore">
            <img class="image_2" src="/photos/photos375x250/img2.jpg" alt="Photos Travail Carrosserie Migliore">
        </div>
      
       
                           
        <form action="enregistrement.php" method ="post" class="grid_formulaire frmEnregistrement">

        <?php if(array_key_exists('errors', $_SESSION)): /* on regarde si le tableau d'erreurs est vide */?>

            <div class="case_errors">
                <?= 
                implode('<br>', $_SESSION['errors']); /* On affiche le tableau des erreurs */
                ?>
            </div>

                
        <?php endif; /* Permet de faire disparaitre les messages d'erreur à la réactualisation de la page */?>

        <?php if(array_key_exists('success', $_SESSION)): /*on regarde si le message a bien été envoyé */?>

            <div class="bon_envoi_message">
                <p> Votre Message a bien été envoyé</p>
            </div>
        <?php endif; /* Permet de faire disparaitre les messages de bon envoi à la réactualisation de la page */?>
            
    
            <div class="case_legende">
                <legend class="c_legende"> Veuillez compléter tous les champs avant d'envoyer </legend>
            </div>


            <div class="case case_nom">                       
                <label for="c_nom">Vos coordonnées :</label>
                    <textarea name="nom" required id="c_nom" value=null> 
                        <?= 
                        /* Si le champ a été rentrée par l'utilisateur(?) on le sauvegarde sinon (:) on met un espace vide*/
                        isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : '';
                        ?>
                    </textarea>                       
            </div> 

            <div class="case case_telephone">
                <label for="c_telephone">Téléphone de contact:</label>
                <input type="texte" name="telephone" required class="c_telephone" placeholder="88 88 88 88 88" value="
                    <?= 
                    /* Si le champ a été rentrée par l'utilisateur(?) on le sauvegarde sinon (:) on met un espace vide*/
                    isset($_SESSION['inputs']['telephone']) ? $_SESSION['inputs']['telephone'] : '';
                    ?>">
            </div>                    

            <div class="case case_mail">
                <label for="c_mail">Mail de contact:</label>
                <input required type="mail" name="mail" class="c_mail" value="
                    <?= 
                    /* Si le champ a été rentrée par l'utilisateur(?) on le sauvegarde sinon (:) on met un espace vide*/
                    isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : '';
                    ?>">
            </div>

            <div class="myCaptcha">
                <label for="c_captcha" class="labelCaptcha">Je ne suis pas un robot</label>
                <input type="checkbox" name="captcha" class="c_captcha">
            </div>

            <div class="case case_message">
                <label for="c_message">Votre Message :</label>
                <textarea name="message" required id="c_message" value=null> 
                    <?= 
                     /* Si le champ a été rentrée par l'utilisateur(?) on le sauvegarde sinon (:) on met un espace vide*/
                    isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';
                    ?>
                </textarea>                                            
            </div>

            <div class="contact_BordureInferieure">

            </div>

                <div class="btn">
                    <button type="submit">
                         Envoyer
                    </button>
                </div>

                <div class="case_errors"></div>
                <div class="bon_envoi_message"></div>
                
                
            </form> 
        </section>
        
 
        
        
<?php
    require "../include/footer.php";
    
    /* On nettoie la session de toutes les données et de toutes les erreurs */  
    unset($_SESSION['inputs']);
    unset($_SESSION['errors']);
    unset($_SESSION['success']);


?>