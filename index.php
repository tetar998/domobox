<?php

  include("user.php");

  try {
    $strConnection = 'mysql:host=localhost;dbname=side_project'; //Ligne 1
    $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); //Ligne 2
    $pdo = new PDO($strConnection, 'tetar9', 'tetar9', $arrExtraParam); //Ligne 3; Instancie la connexion
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Ligne 4
}
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}
$query = 'SELECT * FROM user';
$arr = $pdo->query($query)->fetch();

  $tmp = "fuck les nains";
  echo json_encode($tmp);
  echo "titi";
  $tetar = new humain();
  print_r($arr);
?>
