<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
?>

<!--  En tête de page -->
<?php require_once(PATH_VIEWS.'header.php'); ?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php'); ?>

<!--  Début de la page -->
<h3>Connexion</h3>

<?php
if(!isset($_SESSION['logged']))
{
?>

<form action="" method="post">
   Pseudo: <input type="text" name="pseudo" id="pseudo" />

   Mot de passe : <input type="password" name="mdp" id="mot_de_passe" />

   <input type="submit" name="connexion" value="Connexion" />
</form>
<?php
}
?>
<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); ?>
