<?php
 require_once("conn.php");
 $req ="SELECT * FROM etudiants";
 $ps=$pdo->prepare($req);
 $ps->execute();
?>
<?php
    require_once("security.php");
?>
<html>
 <head>
  <title></title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="style.css"/>  
  
   </head>
    <body>
	<?php require_once("entete.php")?>
	<div class="col-nd-6 col-xs-12">
	<div class="panel panel-info spacer">
	<div class="panel-heading">Liste des étudiants </div>
	<div class="panel-body">
	     <table class="table table-striped">
	 <thead>
       <tr>
        <th>INE</th> <th>Nom</th> <th>Prénom</th> <th>Adresse</th> <th>Téléphone</th>
       </tr>
	   </thead>
	   <tbody>
	   <?php while($et=$ps->fetch() ) { ?>
	   <tr>
	     <td><?php echo($et['INE']) ?></td>
		 <td><?php echo($et['Nom']) ?></td>
		 <td><?php echo($et['Prénom']) ?></td>
		 <td><?php echo($et['Adresse']) ?></td>
		 <td><?php echo($et['Téléphone']) ?></td>
		 <td><a href="EditEtudiants.php?INE=<?php echo($et['INE'])?>">Edit</a></td>
		 <td><a onclick="return confirm"('Are you sure ...');" href="SupprimeEtudiant.php?INE=<?php echo($et['INE'])?>">Supprimer</a></td>
	   </tr>
	   <?php  } ?> 
	   </tbody>
	   </table>
	   </div>
	   </div>
	   </div>

     
	   </body>
	   </html>
	    
