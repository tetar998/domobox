<?php


  try{
      $bdd = new PDO('mysql:host=localhost;dbname=side_project;charset=utf8', 'tetar9', 'tetar9');
    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
  }

    $phrase = $_GET["phrase"];

    toto($phrase);

  function toto($phrase){
     if ($phrase == "bonjour")
      echo "bonjour que puis-je faire pour vous";
      else
      echo  hash_and_find($phrase);
  }

  function hash_and_find($src){

    $phrase = $src;
    $mot = "heure";


    if (preg_match("/\b".$mot."\b/i", $phrase)){
    return json_encode("Le mot $mot a ete trouvee dans la phrase $phrase");
    }
    else{
    return json_encode("Le mot $mot ne se trouve pas dans la phrase $phrase");
    }

  }

?>
