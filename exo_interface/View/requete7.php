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
      <div class="panel" >
  	<div class="panel panel-primary">
  		<div class="panel-heading">
          <a href="../index.php" class="btn btn-primary">Retour</a>
          </div>
  		<div class="panel-body">
  			<table class="table table-bordered table-hover ">
  				<tr>
  					<th>identifiant</th>
  					<th>Prenom</th>
  					<th>Nom</th>
                    <th>age</th> 
            	</tr>
  				<tr>
  					<?php
                      require_once('../Model/requetes.php');
                      $row = ageDesPersonnes();
  					foreach($row as $tab) {
  						echo "<tr>
                            <td>$tab->id</td>
                            <td>$tab->first_name</td>
                            <td>$tab->last_name</td>
                            <td>$tab->age</td>
                               </tr>";
  					}
  					?>

  				</tr>

  			</table>
  		</div>
  	</div>
  </div>
  </div>
</body>
</html>