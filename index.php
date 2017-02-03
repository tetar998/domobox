

<?php



  $act = $_GET["act"];
  $key = $_GET["ky"];

  if ($act != "add_user"){
    echo "starfoula";
    echo $key;
  }else{
    header("Location: user.php");
    exit;
  }


  // test de creation de la class humain et de tetar avec different attribu
  // TODO creer les different attribu + creer les fichier de conf pour les phrases



?>
