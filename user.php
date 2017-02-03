<!-- HTML CODE IN THIS PART -->

<form method="post" action="user.php" class="form" enctype="multipart/form-data" >
<input type="hidden" name="act" value="add_user" />

    <br>Votre nom:<br>
    <input name="Nom" Nom="votre nom">

    <br>Votre prenom:<br>
    <input name="Prenom" Prenom="votre prenom">

    <br>key user:<br>
    <input name="KeyUser" KeyUser="votre clée">

    <br> envoyer <br>
    <div style="text-align:center"><input name="valider" type="submit" alt="Modifier" title="Modifier"
       value="Modifier" style="padding:5px;width:50%;margin-top:10px;"/></div>

</form>

<!-- PHP ICI -->


<?php
/**
  GESTION DES INCLUDES
*/
//TODO mettre en place un header avec tout les includes

include_once ("config/conf.php");

  /**
   ATTRIBUTION DES VALEURS POST
   */
  $nom = $_POST['Nom'];
  $prenom = $_POST['Prenom'];
  $keyUser = $_POST['KeyUser'];
  $act = $_POST["act"];

/**
  VERIFICATION DES VALEURS ET UP DANS LA BDD
*/
    $connection = new Connection();

    if ($act == "add_user"){
      if (($nom != "") && ($prenom != "")){
        echo $sql  = "INSERT INTO user (nom, prenom, key_user) VALUES ('$nom', '$prenom', '$keyUser')";
        $result = $connection->select($sql);

      }else
      echo "toto";
  }else {
    echo "remplir le formulaire";
  }

  ?>
