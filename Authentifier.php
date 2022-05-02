<?php 
    require_once("conn.php");
	$Mail=$_POST["username"];
	$MotsdePasse=Md5($_POST['password']);
	$ps=$pdo->prepare("SELECT * FROM users WHERE LOGIN=? AND PASSWORD=?");
	$params=array($Mail,$MotsdePasse); 
	$ps->execute($params);
 if($users=$ps->fetch()){
	 	 session_start();
   $_SESSION['PROFILE']=$users;
	   header("location:index.php");
	 	 
  }
    else{
		 header("location:Login.php");
	
  }	 
?>