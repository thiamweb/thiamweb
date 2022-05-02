<?php
 require_once("security.php");
 session_start();
 session_destroy();
 header("location:Login.php");
 ?>