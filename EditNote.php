<?php
    require_once("security.php");
	require_once("RoleScolaire.php");
?> 
<?php 
  $INE =$_GET['INE'];
  require_once("conn.php");
  $ps=$pdo->prepare("SELECT * FROM pole WHERE INE=?");
  $params=array($INE);
  $ps->execute($params);
  $etudiant=$ps->fetch();
 ?>
<!Doctype html>
  <html>
   <head>
    <title></title>
	 <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
     <link rel="stylesheet" type="text/css" href="style.css"/>  
	</head>
	<body>
	<?php require_once("Entetes.php")?>
	 <div class="container spacer">
	 <div class="panel panel-default">
	 <div class="panel-heading">EDITE</div>
	   <div class="panel-body">
	    <form method="post" action="UpdateNOTE.php" enctype="multipart/form-data">
		<div class="form-group">
		<label class="control-label">INE:</label>
		<input type="text" name="INE" value="<?php echo($etudiant["INE"])?>"  class="form-control" />
		</div>
		<div class="form-group">
		<label class="control-label">Nom:</label>
		<input type="text" name="Nom" value="<?php echo($etudiant['Nom'])?>"  class="form-control" />
		</div>
		<div class="form-group">
		<label class="control-label">Prénom:</label>
		<input type="text" name="Prénom" value="<?php echo($etudiant['Prénom'])?>"  class="form-control" />
		</div>
		<div>
		<label class="control-label">FORMATION:</label>
		<input type="text" name="FORMATION" value="<?php echo($etudiant['FORMATION'])?>"  class="form-control" />
		</div>
		<div class="form-group">
		<label class="control-label">NOTE:</label>
		<input type="text" name="NOTE" value="<?php echo($etudiant['NOTE'])?>"  class="form-control" />
		</div>
		</div>
		<button type="submit">Save</button>
		</form>
	    </div>
		</div>
		</body>
		</html>