<?php

// fonction à deux arguments qui seront des variables 
function nav_item (string $lien, string $titre): string {

    $classe = 'nav_Item';
// S'il on se trouve sur la page active alors la class 'page active' doit être prise en compte sur cette page
    if($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe = $classe . ' pageActive';
    } else {
		$classe = $classe . ' pageInactive';
	}

// On utilise les chaines de caractères HEREDOC pour plus de clarté entre htlm et php

	return <<<HTML
	<a class="$classe" href="$lien">$titre</a>
HTML;
}

?>
<!DOCTYPE html>
<html lang="fr">

	<head>
        <meta charset="utf-8"> <!--Définition du type d'encodage afin d'accepter les caractères universels -->
        <title><?php echo ($titre) ?></title> <!--Titre dans l'onglet avec utilisation de la variable $titre-->
        <link rel="icon" type="/image/png" href="../icone/favicon.png"> <!-- favicon dans l'onglet de la page HTML avec le lien d'ouverture   -->
		
		<meta name="Description" content="Carrossier Constructeur dans les Alpes Maritimes, la Nouvelle Carrosserie Migliore vous accueille et vous conseil pour tous les aménagnements utilitaires et poids lourds, tels que Benne, Hayon, Caisse Messagerie, Caisse Déménagement, Plateau, Grue, et autres aménagements intérieurs.">

		<meta name="keywords" content="<?php echo ($keywords) ?>"><!--Mots clés pour moteurs de recherche.-->
		
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Permet la responsivité -->

        <link rel="stylesheet" type="text/css" href="../css/styleCSSMiseAZero.css"> <!-- Reset CSS .-->
		<link rel="stylesheet" type="text/css" href="../css/styleCommun.css" /> <!--Lien CSS -->
		<link rel="stylesheet" type="text/css" href="../css/styleheader.css" /> <!--Lien CSS [header] -->
		<link rel="stylesheet" type="text/css" href="../css/stylefooter.css" />  <!--Lien CSS [footer] -->
		<link rel="stylesheet" type="text/css" href=<?php echo $lien ?>><!--Lien CSS de la page Actuel -->

		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>

    <body>
        <header>
			
		    <div class="header-BandeauSup"></div>
				<button class="btn_band_sup" type="submit">Se Connecter</button>
				
			</div>

			<div class="header-BandeauCentral">
				<img class="logo" src ="/icone/LogoNCM.png" alt = "Logo de la Carrosserie Migliore">

				<button class="btnMenuResponsive" aria-label="Bouton pour menu responsive" aria-expanded="false">
						<span class="lignes"></span>
						<span class="lignes"></span>
						<span class="lignes"></span>					
    			</button>			
				
				<p Class = "nomSociete">Nouvelle Carrosserie Migliore</p>
				<p Class = "notreMetier">- Carrossier Constructeur -</p>
				<p Class = "slogan">"Une Ecoute, Un Conseil, Un Savoir-faire"</p>

				<nav class = "menuNavigation">						
						<?php echo nav_item ('/index.php', 'Accueil'); ?>
						<?php echo nav_item ('/php/Construction.php', 'Construction'); ?>
						<?php echo nav_item ('/php/reparation.php', 'Réparation'); ?>
						<?php echo nav_item ('/php/bas.php', 'Bon à Savoir'); ?>
						<?php echo nav_item ('/php/contact.php', 'Contact'); ?>
				</nav>
			</div>

			<div class="header-BandeauInf"></div>
        </header>






    


