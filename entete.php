<div class="navbar navbar-inverse navbar-fixe-top">
  <ul class="nav navbar-nav">
   <li><a href="index.php">Etudiant</a></li>
    <li><a href="SaisieEtudiant.php">SaisiETUDIANTS </a></li>
	 <li><a href="note.php">NOTES</a></li>
	 <li align=right><a href="logOut.php">Logout[<?php echo((isset($_SESSION['PROFILE']))?($_SESSION['PROFILE']['LOGIN']):"")?>]</a></li>
	 </ul>
	 </div>
   