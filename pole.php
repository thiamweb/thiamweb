  <?php
    require_once("security.php");
	require_once("RoleScolaire.php");
?>
 <?php 
     $INE=$_POST["INE"];
	 $Nom=$_POST['Nom'];
	 $Prénom=$_POST['Prénom'];
	  $FORMATION=$_POST['FORMATION'];
	 $NOTE=$_POST['NOTE'];
	 require_once("conn.php");
	 $ps=$pdo->prepare("INSERT INTO pole (INE,Nom,Prénom,FORMATION,NOTE) VALUES (?,?,?,?,?)");
	 $params=array($INE,$Nom,$Prénom,$FORMATION,$NOTE);
	 $ps->execute($params);
	 header("location:note.php");
?>
