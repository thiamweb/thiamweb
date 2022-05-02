<!Doctype html>
  <html>
   <head>
    <title></title>
	<meta charset="utf-8"/>
	 <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
     <link rel="stylesheet" type="text/css" href="style.css"/>  
	</head>
	<body align="center">
     <div class="container spacer col-nd-6 col-xs-6 col-md-offset-3">
	 <div class="panel panel-default">
	 <div class="panel-heading">SERVICE CENTRALE AUTHENTIFICATION </div>
	 <div class="panel-body">
	    <form method="post" action="Authentifier.php" enctype="multipart/form-data">
		<div class="form-group">
		<label class="control-label">Mail:</label>
		<input type="text" name="username" class="form-control"/>
		</div>
		<div class="form-group">
		<label class="control-label">Mots de Passe:</label>
		<input type="password" name="password" class="form-control"/>
		</div>
		<div>
		<button type="submit">Save</button>
		</div>
		<br/>
		<div align=center>
		<a href="Rename.php">Mot de passe oublié ?</a>
		</div>
		</div>
		</form>
		</div>
		</div>
		</div>
		</body>
				    
		</html>