<?php
    require_once("security.php");
	require_once("RoleScolaire.php");
?>
<?php 
     $INE=$_POST['INE'];
	 $Nom=$_POST['Nom'];
	 $Prénom=$_POST['Prénom'];
	 $Adresse=$_POST['Adresse'];
	 $Téléphone=$_POST['Téléphone'];
	   require_once("conn.php");
	 $ps=$pdo->prepare("UPDATE etudiants SET INE=?, Nom=?, Prénom=?, Adresse=? WHERE Téléphone=?");
	 $params=array($INE,$Nom,$Prénom,$Adresse,$Téléphone);
	 $ps->execute($params);
	 header('location:index.php');
?>
