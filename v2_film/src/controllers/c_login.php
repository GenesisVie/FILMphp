<?php

if(isset($_POST['pseudo']) && isset($_POST['mot_de_passe']))
{
if ($_POST['pseudo']==USR && $_POST['mot_de_passe']==MDP){
    $_SESSION['logged'] = True;
}
elseif(empty($_POST['pseudo']) OR empty($_POST['mot_de_passe'])) {
    echo "Un des champs est vide.";
}
}else{
  echo "Déjà connecté";
}
require_once(PATH_VIEWS.'login.php');
?>
