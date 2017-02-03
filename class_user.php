<?php

include_once ("config/conf.php");

class humain extends Connection{

    public function test($login) {

// test de co

      $connection = new Connection();
      $sql="SELECT * FROM categorie";
      $result= $connection->select($sql);
      foreach ($result as $row)
      {
          echo $row['description'].'<br>';
      }
      echo ($login);

        }
}
?>
