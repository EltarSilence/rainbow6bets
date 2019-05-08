<?php
  session_start();
  require_once 'config/heart.php';
  require_once 'config/dbconn.php';
  if (isset($_GET['cat'])){
    //ricezione categoria
    if ($_GET['cat'] == "proleague"){
      $proleague_id = 1;
      /* == PRO LEAGUE ORDINARIA == */
      $matches_query1 = "SELECT * FROM partite AS P WHERE datetime > NOW() AND category_id = $proleague_id AND canTie = true ORDER BY datetime DESC";
      $matches_query2 = "SELECT * FROM partite AS P WHERE datetime > NOW() AND category_id = $proleague_id AND canTie = false ORDER BY datetime DESC";
      $result1 = $conn->query($matches_query1);
      $matches = '<table id="matches" class="table table-bordered text-center">
      <thead class="thead-dark">
        <tr>
          <th scope="col" colspan="2">Incontro <i class="fa fa-tv"></i></th>
          <th scope="col">1</th>
          <th scope="col">X</th>
          <th scope="col">2</th>
          <th scope="col"><i class="fa fa-business-time"></i></th>
        </tr>
      </thead>
      <tbody>';
      while ($mtc = $result1->fetch_assoc()){
        $matches .= '<tr id="'.$mtc['id'].'|'.getTeamNameFMid($mtc['id_team1']).'%'.getTeamNameFMid($mtc['id_team2']).'">
          <td>'.getTeamNameFMid($mtc['id_team1']).'</td>
          <td>'.getTeamNameFMid($mtc['id_team2']).'</td>
          <td id="odd">'.number_format((float)$mtc['odd_1'], 2, '.', '').'</td>
          <td id="odd">'.number_format((float)$mtc['odd_X'], 2, '.', '').'</td>
          <td id="odd">'.number_format((float)$mtc['odd_2'], 2, '.', '').'</td>
          <td id="when">'.$mtc['datetime'].'</td>
        </tr>
        <tr>
          <td colspan="6" id="top_expand_'.$mtc['id'].'">
            <a href="#expand_'.$mtc['id'].'" data-toggle="collapse" data-target="#expand_'.$mtc['id'].'">
              <i class="fa fa-chevron-down"></i>
            </a>
          </td>
        </tr>

        <tr id="expand_'.$mtc['id'].'" class="collapse">
          <td>'.$mtc['id'].'</td>
        </tr>
        ';
      }
      $matches.='</tbody></table>';
      /* == PRO LEAGUE FINALS == */
      $result2 = $conn->query($matches_query2);
      $matches .= '<table id="matches_notie" class="table table-bordered text-center">
      <thead class="thead-dark">
        <tr>
          <th scope="col" colspan="2">Incontro <i class="fa fa-tv"></i></th>
          <th scope="col">1</th>
          <th scope="col">2</th>
          <th scope="col"><i class="fa fa-business-time"></i></th>
        </tr>
      </thead>
      <tbody>';
      while ($mtc = $result2->fetch_assoc()){
        $matches .= '<tr id="'.$mtc['id'].'|'.getTeamNameFMid($mtc['id_team1']).'%'.getTeamNameFMid($mtc['id_team2']).'">
          <td>'.getTeamNameFMid($mtc['id_team1']).'</td>
          <td>'.getTeamNameFMid($mtc['id_team2']).'</td>
          <td id="odd">'.number_format((float)$mtc['odd_1'], 2, '.', '').'</td>
          <td id="odd">'.number_format((float)$mtc['odd_2'], 2, '.', '').'</td>
          <td id="when">'.$mtc['datetime'].'</td>
        </tr>
        <tr>
          <td colspan="6" id="top_expand_'.$mtc['id'].'">
            <a href="#expand_'.$mtc['id'].'" data-toggle="collapse" data-target="#expand_'.$mtc['id'].'">
              <i class="fa fa-chevron-down"></i>
            </a>
          </td>
        </tr>

        <tr id="expand_'.$mtc['id'].'" class="collapse">
          <td>'.$mtc['id'].'</td>
        </tr>
        ';
      }
      $matches.='</tbody></table>';
    }
  }
?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container-fluid">
    <?php require 'static/nav_admin.php'; ?>
  	<div class="row">
  		<div class="col-md-12">

  			<div class="row">
  				<div class="col-md-2">
            <!-- LEFT COLOUMN -->
            <table class="table table-striped text-center">
              <thead>
                <tr>
                  <th scope="col">Competizioni</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="?cat=proleague">Pro League EU</td>
                </tr>
              </tbody>
            </table>
            <!-- / LEFT COLOUMN -->
  				</div>
  				<div class="col-md-7">
            <!-- CENTER COLOUMN -->
            <?php
              if (isset($matches) && $matches != ""){
                echo $matches;
              }
            ?>
            <!-- / CENTER COLOUMN -->
  				</div>
  				<div class="col-md-3">
            <!-- RIGHT COLOUMN -->
            <div class="schedina">
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <td colspan="3">Schedina</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td id="thenhide" colspan="3"><i class="fa fa-chevron-left"></i> Clicca su una quota / competizione</td>
                    <td id="incontro" colspan="2"></td>
                    <td id="dataora"></td>
                  </tr>
                  <tr>
                    <td>Importo: &euro; 100</td>
                    <td>Quota: <span id="quota">1,00</span></td>
                    <td>Pot. Vincita: &euro; <span id="potvin">0</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- / RIGHT COLOUMN -->
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
<script src="assets/script.js"></script>
</html>
