

<?php
	session_start();
		$usuario = $_POST['nnombre'];
		$pass = $_POST['npassword'];
	if(empty($usuario) || empty($pass)){
		header("Location: index.html");
	exit();
	}
	$con = mysqli_connect('localhost','root','', 'bdfeetlot') or die("Error al conectar ");
		$result = mysqli_query($con, "SELECT * from usuarios where usuario='$usuario'");
	$row = mysqli_fetch_array($result);
	if($row['clave'] == $pass){
		$_SESSION['usuario'] = $usuario;
	header("Location: indexABM.php");
	}else{
	header("Location: index.php");
//exit();
///}
//}else{
//header("Location: index.html");
//exit();
/*
<?php
	if ($_SESSION== session_start()){
	header('Location: http://www.ccm.net/forum/');
	} else ("redirect error");
?>																						
*/
	}

?>