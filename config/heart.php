<?php
  //da id a nome
  function retrieveName($id){
    require 'dbconn.php';
    $sql = "SELECT * FROM utenti WHERE id = $id";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
      $nome = $row['username'];
      break;
    }
    return $nome;
  }

?>
