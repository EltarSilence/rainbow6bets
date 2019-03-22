<?php
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
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
    			<h3>
    				h3. Lorem ipsum dolor sit amet.
    			</h3>
    			<dl>
    				<dt>
    					Description lists
    				</dt>
    				<dd>
    					A description list is perfect for defining terms.
    				</dd>
    				<dt>
    					Euismod
    				</dt>
    				<dd>
    					Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
    				</dd>
    				<dd>
    					Donec id elit non mi porta gravida at eget metus.
    				</dd>
    				<dt>
    					Malesuada porta
    				</dt>
    				<dd>
    					Etiam porta sem malesuada magna mollis euismod.
    				</dd>
    				<dt>
    					Felis euismod semper eget lacinia
    				</dt>
    				<dd>
    					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
    				</dd>
    			</dl>
      		<p>
      				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
      		</p>
      	</div>
      </div>
		</div>
</body>
</html>
