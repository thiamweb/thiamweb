
<!Doctype html>
  <html>
   <head>
    <title></title>
	<meta charset="utf-8"/>
	 <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
     <link rel="stylesheet" type="text/css" href="style.css"/>  
	</head>
	<body>
	<?php require_once("Entetes.php")?>
	 <div class="container spacer col-nd-6 col-xs-6 col-md-offset-3">
	 <div class="panel panel-default">
	 <div class="panel-heading">SAISIE ETUDIANTS </div>
	 <div class="panel-body">
	    <form method="post" action="pole.php" enctype="multipart/form-data"> 
		<div class="form-group">
		<label class="control-label">INE:</label>
		<input type="text" name="INE" class="form-control"/>
		</div>
		<div class="form-group">
		<label class="control-label">Nom:</label>
		<input type="text" name="Nom" class="form-control"/>
		</div>
		<div class="form-group">
		<label class="control-label">Prénom:</label>
		<input type="text" name="Prénom" class="form-control"/>
		</div>
		<div>
		<label class="control-label">FORMATION:</label>
		<input type="text" name="FORMATION" class="form-control"/>
		</div>
		<div class="form-group">
		<label class="control-label">NOTE:</label>
		<input type="text" name="NOTE" class="form-control"/>
		</div>
		</div>
		<button type="submit">Save</button>
		</form>
		</div>
		</body>
		</html>