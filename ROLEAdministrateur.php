<?php
if(!($_SESSION['PROFILE']['ROLE']=="Administrateur")){
	header("location:$_SERVER[HTTP_REFERER]");
?>