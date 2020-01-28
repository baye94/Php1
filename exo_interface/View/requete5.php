<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../style/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<body>
<!-- <button class="btn btn success" href="../index.php"><button> -->
  <div class="container">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
          <a href="../index.php" class="btn btn-primary">Retour</a>
          </div>
  		<div class="panel-body">
  			<table class="table table-bordered table-hover table-responsive">
  				<tr>
  					<th>Country_code</th>
  					<th>NombreENregistrement</th>
  					

  				</tr>
  				<tr>
  					<?php
                      require_once('../Model/requetes.php');
                      $row = repartitionParEtat();
  					foreach($row as $tab) {
  						echo "<tr>
                            
                            <td>$tab->country_code</td>
                            <td>$tab->Enregistrement</td>

  						     </tr>";
  					}
  					?>

  				</tr>

  			</table>
  		</div>
  	</div>
  </div>
</body>
</html>