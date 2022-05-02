
<?php 
/*
   mysql_connect ("localhost","root","") or die (mysql_error() );
   mysql_select_db("scolarité") or die{mysql_error() );
*/   
	 ?>
<?php
 try {
	     $strConnection =   'mysql:host=localhost;dbname=scolarité';
		$pdo = new PDO ($strConnection, 'root', '');
  }
  
catch  (PDOException $e) {
	   $msg = 'ERREUR PDO dans ' . $e->getMessage();
	   die ($msg);
}
?>