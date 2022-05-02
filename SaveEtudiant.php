  <?php
    require_once("security.php");
	require_once("RoleScolaire.php");
?>
 <?php 
     $INE=$_POST["INE"];
	 $Nom=$_POST['Nom'];
	 $Prénom=$_POST['Prénom'];
	 $Adresse=$_POST['Adresse'];
	 $Téléphone=$_POST['Téléphone'];
	 require_once("conn.php");
	 $ps=$pdo->prepare("INSERT INTO etudiants (INE,Nom,Prénom,Adresse,Téléphone) VALUES (?,?,?,?,?)");
	 $params=array($INE,$Nom,$Prénom,$Adresse,$Téléphone);
	 $ps->execute($params);
	 header("location:index.php");
?>
