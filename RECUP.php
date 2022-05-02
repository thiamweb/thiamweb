  <?php
    require_once("security.php");
	require_once("RoleScolaire.php");
?>
 <?php 
    
	 $Login=$_POST['Login'];
	 $Motdepassactuel=$_POST['Mot de pass actuel'];
	 $Newpassword=$_POST['New password'];
	 require_once("conn.php");
	 $ps=$pdo->prepare("INSERT INTO recup (Login,Mot de pass actuel,New password) VALUES (?,?,?)");
	 $params=array($Login,$Motdepassactuel,$Newpassword);
	 $ps->execute($params);
	 header("location:index.php");
?>
