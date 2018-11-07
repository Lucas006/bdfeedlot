PHP
<?php
	session_start();
	echo "Hola " . $_SESSION['usuario'];
?>
<?php 
 header("Location: index.php");
 echo "Hola " . $_SESSION['usuario'];
?>