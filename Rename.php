
<!Doctype html>
  <html>
   <head>
    <title></title>
	<meta charset="utf-8"/>
	 <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
     <link rel="stylesheet" type="text/css" href="style.css"/>  
	</head>
	<body align=center>
	 <div class="container spacer col-nd-6 col-xs-6 col-md-offset-3">
	 <div class="panel panel-default">
	 <div class="panel-heading">RECUPERATION DU MOTS DE PASSE</div>
	 <div class="panel-body">
	    <form method="post" action="RECUP.php" enctype="multipart/form-data">
		<div class="form-group">
		<label class="control-label">Login:</label>
		<input type="text" name="Login" class="form-control"/>
		</div>
		<div class="form-group">
		<label class="control-label">Mot de pass actuel:</label>
		<input type="text" name="Motdepassactuel" class="form-control"/>
		</div>
		<div class="form-group">
		<label class="control-label">New password:</label>
		<input type="text" name="Newpassword" class="form-control"/>
		</div>
		</div>
		<button type="submit">Save</button>
		</form>
		</div>
		</body>
		</html>