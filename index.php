<?php


  try{
      $bdd = new PDO('mysql:host=localhost;dbname=side_project;charset=utf8', 'tetar9', 'tetar9');
    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
  }
  $tmp = "fuck les nains";
  echo json_encode($tmp);
echo "titi";

?>
