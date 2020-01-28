<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../style/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<body>
<!-- <button class="btn btn success" href="../index.php"><button> -->
  <div class="container col-12">
    <div class="panel">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
          <a href="../index.php" class="btn btn-primary">Retour</a>
          </div>
  		<div class="panel-body">
  			<table class="table table-bordered table-hover table-responsive" >
  				<tr>
  					<th>identifiant</th>
  					<th>Prenom</th>
  					<th>Nom</th>
            <th>Email</th> 
            <th>Genre</th>
             <th>Ip</th>
             <th>birthday</th>
             <th>Pays</th>
             <th>lien</th>

  				</tr>
  				<tr>
  					<?php
                      require_once('../Model/requetes.php');
                      $row = afficheTousLesFemmes();
  					foreach($row as $tab) {
  						echo "<tr>
                            <td>$tab->id</td>
                            <td>$tab->first_name</td>
                            <td>$tab->last_name</td>
                            <td>$tab->email</td>
                            <td>$tab->gender</td>
                            <td>$tab->ip_address</td>
                            <td>$tab->birth_date</td>
                            <td>$tab->country_code</td>
                            <td>$tab->avatar_url</td>

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