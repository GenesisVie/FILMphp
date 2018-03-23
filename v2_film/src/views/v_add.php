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

<form action="index.php?page=add" method="post">

Nom du film: <input type="text" name="titrefilm"></br>
</br>
Resumé: <textarea type="text" name="resume-" rows="6" cols="20">
 </textarea>
</br>
</br>

<select name="genre">
 <option value="0">Tous les genres</option>
  <?php

foreach ($genres as $i) {
   ?>
    <option value="<?= $i->getId() ?>"></option>
 <?php
}
?>
</select>

<br/>
<br/>

<input type="submit" name="envoyer" value="Envoyer">

</form>

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');
