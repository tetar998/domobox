

<?php

  include("user.php");

  $connection = new Connection();
  $query = 'SELECT * FROM user';
  $result= $connection->select($query);

  $act = $_GET["act"];

  if ($act != "add_user"){
      echo ("toto");
  }else{
    header("Location: user.php");
    exit;
  }


  // test de creation de la class humain et de tetar avec different attribu
  // TODO creer les different attribu + creer les fichier de conf pour les phrases
  //

?>
