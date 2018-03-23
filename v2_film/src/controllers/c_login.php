<?php

if(empty($_POST['pseudo']) OR empty($_POST['mot_de_passe'])) {
    echo "Un des champs est vide.";
}else{
      if (($_POST['pseudo']==USR)&&($_POST['mot_de_passe']==MDP)){
        $_SESSION['logged'] = true;
      }
    }

require_once(PATH_VIEWS.'login.php');
?>
