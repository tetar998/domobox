<?php


  try{
      $bdd = new PDO('mysql:host=localhost;dbname=side_project;charset=utf8', 'tetar9', 'tetar9');
    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
  }

    $phase = $_GET["id"];

    explode_list($phase);

  function explode_list($phase){

    $value_sentence = 0;
     if ($phase == "bonjour")
      echo "bonjour que puis-je faire pour vous";
      else{
      $list =   explode(" ", $phase);
        if (($list[0] == "ou") || ($list[0] == "où")){
            $value_sentence = 1;
            echo "nous cherchons un lieu";
        }
        elseif($list[0] == "quand"){
          $value_sentence = 2;
          echo "nous cherchons une date";
        }
        elseif($list[0] == "qui"){
          $value_sentence = 3;
          echo "nous cherchons une personne";
        }
        elseif($list[0] == "combien"){
          $value_sentence = 4;
          echo "nous cherchons une quantitée";
        }
        elseif(($list[0] == "quel") ||
                ($list[0] == "quels")||
                ($list[0] == "quelle") ||
                ($list[0] == "quelles")){
          $value_sentence = isItThing($list);
          echo "nous cherchons une chose";
        }
        else {
          echo "aucun mot cle trouvé";
        }
      }
  }

  function isItThing($list){

    $i = 0;
    while ($list[$i]){
      if ($list[$i] == "heure"){
        echo "z";
        $i++;
      }
      else {
        echo "a";
        $i++;
      }
    }

  }

?>
