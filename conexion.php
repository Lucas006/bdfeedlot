<?php
//Conexión a BD sin POO
$host='localhost';
$user='root';
$pw='';
$db='bdFeedLot';
$conexion=mysqli_connect($host,$user,$pw,$db)or die("error de conexion");
mysqli_set_charset($conexion,"UTF-8");
/* $consulta = 'SELECT * FROM Carreras';
$resultado = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_array($resultado)){
  echo "N° Carrera" + $fila['id_carrera']+"<br>";
  echo "Estilo" + $fila['estilo']+"<br>";
  echo "Distancia" + $fila['distancia']+"<br>";
}*/
 ?>
