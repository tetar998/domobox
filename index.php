<?php

  include("user.php");

$connection = new Connection();
$query = 'SELECT * FROM user';
$result= $connection->select($query);

  $tmp = "fuck les nains";
  echo json_encode($tmp);
  echo "titi";
  print_r($result);

  // test de creation de la class humain et de tetar avec different attribu
  // TODO creer les different attribu + creer les fichier de conf pour les phrases
  $tetar = new humain();
  $tetar->test("azerty");
  $tetar->test("zaeknazlkenzaelnazelkzelkjzaeklajzeklazjeklazjeklazej");

  print_r($arr);

?>
