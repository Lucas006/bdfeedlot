<?php
  session_start();
  echo $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lan="es">
<head>
  <meta  charset="utf-8">
  <title>Feed Lot</title>
  <link rel="stylesheet" href="css/login.css"/>
  </head>
<body>
<ul>
<li><a href="indexABM.php">Feed Lot</a></li>
<li><a href="#">Login</a></li>
</ul>

<h1>ABM Login</h1><br>

<form action="ABMlogin.php" method="GET" name="sistema" >
  <label for="nombre">Complete lo siguiente</label>
  <br><br>
  Usuario <input type="text" name="user" maxlength="20" class='nom' required>
  <br><br>
  Contraseña <input type="password" name="pass" maxlength="20" class='nom' required>
  <br><br>
  <input type="submit" name="btn_insertar" value="Insertar">
  <input type="reset" value="Reset"><br><br>
</form>
<table>
<thead><tr><th>Usuario</th><TH>OPCIÓN</TH></tr>
</thead>
<TBODY>
<?php
require("conexion.php");
$articulos=mysqli_query($conexion,"SELECT * FROM Usuarios");
while($fila=mysqli_fetch_array($articulos)){
?>
<tr>
<td><?php echo $fila['usuario'];?> </td>
<td><a class='amod' href="ABMlogin.php?opcion=2&eliminar=<?php echo $fila['usuario'];?>">Eliminar</a><a class='amod' href="loginModificar.php?user=<?php echo $fila['usuario'];?>">Modificar</a></td>
</tr>
<?php
}
?>
</TBODY>
</table>
</body>
</html>
