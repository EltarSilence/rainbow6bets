<?php
  //da id a cio che vuoi
  function retrieveUserData($what, $id){
    require 'dbconn.php';
    $sql = "SELECT * FROM utenti WHERE id = $id";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
      $res = $row[$what];
      break;
    }
    return $res;
  }

  //da id team a nome team
  function getTeamNameFMid($id){
    require 'dbconn.php';
    $sql = "SELECT nome FROM teams WHERE id = $id";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
      $res = $row['nome'];
      break;
    }
    return $res;
  }
?>
