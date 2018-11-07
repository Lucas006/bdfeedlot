<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="css/loginModificar.css" />
	<title>Modificar</title>
</head>
<body>
<h1>Editar registro</h1>

<nav><ul><li><a href="login.php">Volver a inicio</a></li></ul></nav>

<form action="ABMlogin.php" method="GET" name="form_agregar">
	<?php require('conexion.php');
	$user_mod = $_GET['user']; //Se toma el usuario pasado por URL
	$registro =	 mysqli_query($conexion,"SELECT * FROM Usuarios WHERE usuario='$user_mod'"); //Se toman los datos del usuario
	$fila=mysqli_fetch_array($registro); //Se los introduce en un arreglo para luego tomarlos a los datos
	?>
	<input type="hidden" name="nomMod" value="<?php echo $_GET['user']; ?>" required/><br />
	<input type="text" name="nuevo" value="<?php echo $fila['usuario']; ?>" required/><br />
	<br />
	<input type="password" name="pass" value="<?php echo $fila['contrasena']; ?>" required/><br />
	<br />
	<input type="submit" value="Actualizar" name="btn_actualizar"/>
</form>
</body>
</html>
