<?php
     require_once("security.php");
   	require_once("RoleScolaire.php");
?>
<?php 
    $INE=$_GET['INE'];
	require_once("conn.php");
	$ps=$pdo->prepare("DELETE FROM etudiants WHERE INE=?");
	$params=array($INE);
	$ps->execute($params);
	header("location:index.php");
?>