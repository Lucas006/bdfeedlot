<?php
require('conexion.php');
$tabla='Usuarios';
if (isset($_GET['btn_insertar']))
 {
		$user=$_GET["user"];
    $pass=$_GET["pass"];
    $algo=mysqli_query($conexion,"SELECT * FROM Usuarios WHERE usuario='$user'");
    $Aalgo=mysqli_fetch_array($algo);
    if (!empty($Aalgo)){
      echo "<script>alert('Usuario existente');location.href='login.php'</script>";
    }
    else{
      mysqli_query($conexion,"INSERT INTO $tabla VALUES ('$user', '$pass')");
    	echo "<script>alert('Inserción correcta');location.href='login.php'</script>";
    }
}
else{
  if (isset($_GET['btn_actualizar']))
  {
        $user=$_GET["nuevo"]; //Nombre nuevo
        $pass=$_GET["pass"]; //Contraseña nueva
        $usuario=$_GET["nomMod"]; //Toma el usuario a modificar
        mysqli_query($conexion,"UPDATE $tabla SET usuario='$user' contrasena='$pass' WHERE usuario='$usuario'");
        echo "<script>alert('Los datos se actualizaron correctamente!');location.href='login.php'</script>";
  }
 	  else{
      if ($_GET['opcion']==2)
        {
          $user_eliminar=$_GET["eliminar"];
          $algo=mysqli_query($conexion,"SELECT * FROM Movimientos WHERE operador='$user_eliminar'");
          $Aalgo=mysqli_fetch_array($algo);
            if (!empty($Aalgo)){
              echo "<script>alert('Usuario con dependencias');location.href='login.php'</script>";
            }
            else{
              mysqli_query($conexion,"DELETE FROM $tabla WHERE usuario='$user_eliminar'");
              echo "<script>alert('Usuario eliminado');location.href='login.php'</script>";
            }
        }
      else
    		  {echo " <script>alert('Complete los datos');location.href='Nmodificar.php'</script>";}}}
        echo ""
?>
