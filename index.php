<?php
  session_start();
  require_once 'config/heart.php';
  require_once 'config/dbconn.php';
?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-12">
  			<?php require 'static/nav_admin.php'; ?>
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
  				<div class="col-md-8">
            <!-- CENTER COLOUMN -->
            <!-- / CENTER COLOUMN -->
  				</div>
  				<div class="col-md-2">
            <!-- RIGHT COLOUMN -->
            <!-- / RIGHT COLOUMN -->
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>
